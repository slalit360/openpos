<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CLCdesq API REST client Connector
 *
 * Interface for communicating with the CLCdesq Product Push API
 */

class Clcdesq_integration_lib
{
	private $CI;
	private $api_key;
	private $api_url;
	
	/**
	 * Constructor
	 */
	public function __construct($api_key = '')
	{
		$this->CI =& get_instance();
		
		$this->api_key	= $this->CI->encryption->decrypt($this->CI->Appconfig->get('clcdesq_api_key'));
		$this->api_url	= $this->CI->encryption->decrypt($this->CI->Appconfig->get('clcdesq_api_url'));
	}
	
	public function new_product_push(array $data)
	{
		if(!$this->is_enabled())
		{
			return NULL;
		}
		
		$data 		= $this->get_data($data);
		$pushdata	= $this->populate_api_data($data);
		
		ob_start();
		var_dump($data);
		$dump = ob_get_clean();
		log_message("ERROR", 'APIKEY: ' . $this->api_key);
		log_message("ERROR", 'APIURL: ' . $this->api_url);
		log_message("ERROR", 'array_data: ' . $dump);
		
		$json = json_encode($pushdata);
		$clcdesq_guid = $this->send_data($this->api_url, $this->api_key, $json);
		
		log_message("ERROR", "API Results: $clcdesq_guid");
		
		//TODO: The result of the API Product Push should be a GUID.  Store that in the database as an attribute for the pushed product
		return NULL;
	}
	
	/**
	 * Send API request to update the item. Since CLCdesq does not have a partial update function, it sends the item with all the same information as before, but also including the GUID.
	 *
	 * @param	array	$data	Partial data needed to
	 * @return 	boolean			TRUE is returned if the push was successful or FALSE if there was some error.
	 */
	public function update_product_push(array $data)
	{
		if(!$this->is_enabled())
		{
			return NULL;
		}
		
		$data 		= $this->get_data($data);
		$pushdata	= $this->populate_api_data($data);
		
		$json = json_encode($pushdata);
		$clcdesq_guid = $this->send_data($this->api_url, $this->api_key, $json);
		
		//TODO: For now, the update product push is identical to the new product push except that we are sending the GUID
		return NULL;
	}
	
	/**
	 * Send API request to delete the item. Since CLCdesq does not have a true delete function, it sends the item with Published and ShowOnWebsite set to FALSE.
	 *
	 * @param	array	$data
	 * @return 	boolean			TRUE is returned if the push was successful or FALSE if there was some error.
	 */
	public function delete_product_push(array $data)
	{
		if(!$this->is_enabled())
		{
			return NULL;
		}
		
		$data 		= $this->get_data($data);
		$pushdata	= $this->populate_api_data($data);
		
		//Delete specific flags
		$pushdata['Published'] 		= FALSE;
		$pushdata['ShowOnWebsite']	= FALSE;
		
		$json = json_encode($pushdata);
		$clcdesq_guid = $this->send_data($this->api_url, $this->api_key, $json);
		
		//TODO: Figure out exactly what the results that it sends back are and return a failure on error.
		return NULL;
	}
	
	/**
	 * Checks to see if the CLCdesq Integration is enabled
	 *
	 * @return	boolean	TRUE if enabled or FALSE if disabled.
	 */
	private function is_enabled()
	{
		if($this->CI->Appconfig->get('clcdesq_enable') != 1)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	/**
	 * Using the given item, retrieves all necessary Attribute values
	 *
	 * @param 	array	$data	An array containing some but not all of the data from the database.
	 * @return	array	$data	An array augmented with the additional data from the database.
	 */
	private function get_data(array $data)
	{
		//TODO: Get all the things from the database!
		return $data;
	}
	
	/**
	 * Sends the POST JSON request via cURL
	 *
	 * @param	string	$url	The API URL to call.
	 * @param	string	$key	The API key to use in the request.
	 * @param 	string	$json	The JSON formatted data to send.
	 * @return	string			Returns the resulting error or GUID from the API
	 */
	private function send_data(string $url, string $key, string $json)
	{
		$curl_resource	= curl_init($url);
		curl_setopt($curl_resource, CURLOPT_HTTPHEADER, array('Content-type: application/json',"APIKEY: $key"));
		curl_setopt($curl_resource, CURLOPT_POST, TRUE);
		curl_setopt($curl_resource, CURLOPT_POSTFIELDS, $json);
		curl_setopt($curl_resource, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl_resource, CURLOPT_SSL_VERIFYPEER, FALSE);
		
		$result = curl_exec($curl_resource);
		curl_close($curl_resource);
		return $result;
	}
	
	/**
	 * Populates the API data needed for the push.  This is used by all three product_push member functions.
	 *
	 * @param 	array	data	Complete data needed to build the Array.
	 * @return	array			Array to be used in the product push.
	 */
	private function populate_api_data($data)
	{
		$api_data = array('AspectRatio' => $data['aspect_ratio'],
			'AudienceRating' 		=> $data['audience_rating'],
			'AudioFormat' 			=> $data['audio_format'],
			'AudioTrackListing' 	=> $data['audio_track_listing'],
			'AuthorsText' 			=> $data['author'],
			'Barcode' 				=> $data['item_number'],
			'Binding' 				=> $data['binding'],
			'BookForeword' 			=> $data['book_foreword'],
			'BookIndex' 			=> $data['book_index'],
			'BookSampleChapter' 	=> $data['book_sample_chapter'],
			'Contributors' 			=> array($this->get_contributor_ao_array($data['item_id'])),
			'DateAdded'	 			=> $data['date_added'],
			'Depth'		 			=> $data['depth'],
			'Description' 			=> $data['description'],
			'DimensionUnit' 		=> NULL,
			'DiscountGroup' 		=> $this->get_Product_discount_group_ao_array($data['item_id']),
			'EAN' 					=> NULL,
			'Format' 				=> NULL,
			'Height'		 		=> NULL,
			'InternalCode' 			=> $data['item_id'],
			'ISBN'		 			=> $this->is_isbn($data['item_number']),
			'KindId'		 		=> NULL,
			'Language'	 			=> $this->get_language_ao_array($data['item_id']),
			'MediaType'	 			=> $this->get_media_type_ao_array($data['item_id']),
			'NumberOfDiscs' 		=> NULL,
			'NumberOfPages' 		=> NULL,
			'OriginalTitle' 		=> NULL,
			'Price' 				=> $data['unit_price'],
			'PriceWithoutVAT'		=> NULL,
			'PriceNote'				=> NULL,
			'Producer'				=> $this->get_producer_user_ao_array($data['item_id']),
			'ProductStatusProducer' => $this->get_product_status_producer_ao_array($data['item_id']),
			'PriceCurrency'			=> NULL,
			'Published' 			=> NULL,
			'PublisherRRP'			=> NULL,
			'ReducedPrice'			=> NULL,
			'ReducedPriceStartDate'	=> NULL,
			'ReducedPriceEndDate'	=> NULL,
			'ReleaseDate' 			=> NULL,
			'RunningTime'			=> NULL,
			'Series'				=> $this->get_product_series_ao_array($data['item_id']),
			'StockCount'			=> NULL,
			'StockOnOrder'			=> NULL,
			'Supplier'				=> $this->get_supplier_user_ao_array($data['item_id']),
			'ShowOnWebsite'			=> NULL,
			'Subtitle'				=> NULL,
			'Subtitles'				=> NULL,
			'TeaserDescription'		=> $data['description'],
			'Title' 				=> $data['name'],
			'UniqueId'				=> NULL,
			'UPC' 					=> $this->is_upc($data['item_number']),
			'VatPercent'			=> NULL,
			'VideoTrailerEmbedCode'	=> NULL,
			'Weight'				=> NULL,
			'WeightForShipping'		=> NULL,
			'WeightUnit'			=> NULL,
			'Width'					=> NULL,
			'Categories' 			=> array($this->get_category_ao_array($data['item_id']))
		);
		//		$data['clcdesq']['aspectratio_attribute'] 			= $this->config->item('clcdesq_aspectratio');			//-
		//		$data['clcdesq']['audiencerating_attribute']		= $this->config->item('clcdesq_audiencerating');		//-
		//		$data['clcdesq']['audioformat_attribute'] 			= $this->config->item('clcdesq_audioformat');			//-
		//		$data['clcdesq']['authorstext_attribute'] 			= $this->config->item('clcdesq_authorstext');
		//		$data['clcdesq']['binding_attribute'] 				= $this->config->item('clcdesq_binding');
		//		$data['clcdesq']['depth_attribute'] 				= $this->config->item('clcdesq_depth');
		//		$data['clcdesq']['format_attribute'] 				= $this->config->item('clcdesq_format');				//-
		//		$data['clcdesq']['guid_attribute']	 				= $this->config->item('clcdesq_guid');
		//		$data['clcdesq']['height_attribute'] 				= $this->config->item('clcdesq_height');
		//		$data['clcdesq']['numberofpages_attribute']			= $this->config->item('clcdesq_numberofpages');			//-
		//		$data['clcdesq']['originaltitle_attribute']			= $this->config->item('clcdesq_originaltitle');
		//		$data['clcdesq']['pricenote_attribute'] 			= $this->config->item('clcdesq_pricenote');				//-
		//		$data['clcdesq']['producer_attribute']				= $this->config->item('clcdesq_producer');
		//		$data['clcdesq']['releasedate_attribute'] 			= $this->config->item('clcdesq_releasedate');			//-
		//		$data['clcdesq']['runningtime_attribute'] 			= $this->config->item('clcdesq_runningtime');			//-
		//		$data['clcdesq']['subtitle_attribute'] 				= $this->config->item('clcdesq_subtitle');				//-
		//		$data['clcdesq']['subtitles_attribute'] 			= $this->config->item('clcdesq_subtitles');				//-
		//		$data['clcdesq']['teaserdescription_attribute']		= $this->config->item('clcdesq_teaserdescription');		//-
		//		$data['clcdesq']['videotrailerembedcode_attribute']	= $this->config->item('clcdesq_videotrailerembedcode');	//-
		//		$data['clcdesq']['weight_attribute'] 				= $this->config->item('clcdesq_weight');
		//		$data['clcdesq']['weightforshipping_attribute']		= $this->config->item('clcdesq_weightforshipping');		//-
		//		$data['clcdesq']['width_attribute'] 				= $this->config->item('clcdesq_width');
		return $api_data;
	}
}
SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1oj8u338ilcmjvffhac1sclu8mpss94'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00045490264892578

SELECT GET_LOCK('c8acc07bdbd4783acbb419aef9524f21', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1oj8u338ilcmjvffhac1sclu8mpss94'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028491020202637

UPDATE `ospos_sessions` SET `timestamp` = 1576320441, `data` = '__ci_last_regenerate|i:1576320441;person_id|s:1:\"5\";menu_group|s:4:\"home\";'
WHERE `id` = 'q1oj8u338ilcmjvffhac1sclu8mpss94'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.050081014633179

SELECT RELEASE_LOCK('c8acc07bdbd4783acbb419aef9524f21') AS ci_session_lock 
 Execution Time:0.00016403198242188

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1oj8u338ilcmjvffhac1sclu8mpss94'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00025415420532227

SELECT GET_LOCK('958f8054bc34d41a0f875a38523cca4c', 300) AS ci_session_lock 
 Execution Time:9.2029571533203E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5mmnlifbmrdaim2dqlbri3fi6fhl2usb'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016212463378906

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:9.5844268798828E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00012612342834473

SHOW TABLES FROM `ospos` 
 Execution Time:0.00039505958557129

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012898445129395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00015020370483398

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:6.7949295043945E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:6.8187713623047E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001671314239502

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:9.918212890625E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.082434892654419

SHOW TABLES FROM `ospos` 
 Execution Time:0.00045084953308105

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00022697448730469

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00010490417480469

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00029897689819336

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00095105171203613

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013113021850586

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.4121017456055E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.1988830566406E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029611587524414

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.3153762817383E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.082389831543E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028204917907715

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00039196014404297

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:0.00014019012451172

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016403198242188

SHOW TABLES FROM `ospos` 
 Execution Time:0.00041794776916504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00032687187194824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.0108642578125E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010299682617188

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00036311149597168

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'expenses!_categories%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'expenses!_categories!_%' ESCAPE '!' 
 Execution Time:4.9829483032227E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00010085105895996

SHOW TABLES FROM `ospos` 
 Execution Time:0.00050806999206543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:6.8902969360352E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:8.0108642578125E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00050520896911621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011515617370605

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00011801719665527

SELECT COUNT(expense_categories.expense_category_id) as count
FROM `ospos_expense_categories` AS `expense_categories`
WHERE   (
`category_name` LIKE '%%' ESCAPE '!'
OR  `category_description` LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:7.1048736572266E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:6.103515625E-5

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:9.7036361694336E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00063920021057129

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00229811668396

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00050902366638184

SHOW TABLES FROM `ospos` 
 Execution Time:0.00041317939758301

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011420249938965

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:3.0994415283203E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:4.887580871582E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:4.5061111450195E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011086463928223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00027203559875488

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00012993812561035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00022983551025391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.9141387939453E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:9.3936920166016E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00031018257141113

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.2213668823242E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.8214874267578E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.8889389038086E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'company' 
 Execution Time:9.3936920166016E-5

UPDATE `ospos_app_config` SET `key` = 'company', `value` = 'Shree Krishna Family Restaurant'
WHERE `key` = 'company' 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'address' 
 Execution Time:0.00013113021850586

UPDATE `ospos_app_config` SET `key` = 'address', `value` = '518, Ahinsa Vatika, Near Pawan Cinema, Main G.T.Road, Nehru Nagar, Ghaziabad, UP - 201001'
WHERE `key` = 'address' 
 Execution Time:0.00010919570922852

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'phone' 
 Execution Time:0.00010514259338379

UPDATE `ospos_app_config` SET `key` = 'phone', `value` = '+919355345888'
WHERE `key` = 'phone' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'email' 
 Execution Time:0.00011014938354492

UPDATE `ospos_app_config` SET `key` = 'email', `value` = 'changeme@example.com'
WHERE `key` = 'email' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'fax' 
 Execution Time:0.00014686584472656

UPDATE `ospos_app_config` SET `key` = 'fax', `value` = '+919355345888'
WHERE `key` = 'fax' 
 Execution Time:0.00020003318786621

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'website' 
 Execution Time:0.00015091896057129

UPDATE `ospos_app_config` SET `key` = 'website', `value` = 'https://www.zomato.com/ncr/shree-kishna-family-restaurant-1-nehru-nagar-ghaziabad'
WHERE `key` = 'website' 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'return_policy' 
 Execution Time:7.7962875366211E-5

UPDATE `ospos_app_config` SET `key` = 'return_policy', `value` = 'Food Purchased Once cannot be returned'
WHERE `key` = 'return_policy' 
 Execution Time:0.00011706352233887

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00025701522827148

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00015687942504883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014281272888184

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00011706352233887

SHOW TABLES FROM `ospos` 
 Execution Time:0.00052714347839355

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010418891906738

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:7.5101852416992E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:7.7962875366211E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00060200691223145

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00044488906860352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:3.1948089599609E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:8.7976455688477E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00040984153747559

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00044703483581543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00079488754272461

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00012302398681641

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00013279914855957

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.8174133300781E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00031208992004395

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.8160552978516E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00026178359985352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00053596496582031

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00032615661621094

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00010395050048828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00022983551025391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.2928924560547E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00046300888061523

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.0837478637695E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.4175338745117E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012421607971191

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.23924899101257

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0011870861053467

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0042760372161865

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.00028896331787109

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00019502639770508

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.00046396255493164

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00014615058898926

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00024199485778809

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00024914741516113

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.8889389038086E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.5061111450195E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00043010711669922

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00041794776916504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0002748966217041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012993812561035

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '4'
				GROUP BY sale_id
			) 
 Execution Time:2.1162259578705

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '4'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0017499923706055

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '4'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.0015239715576172

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '4'
ORDER BY `line` ASC 
 Execution Time:0.0015649795532227

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.16737604141235

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '4'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '4' 
 Execution Time:0.00026297569274902

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:7.9870223999023E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '4'
ORDER BY `print_sequence` ASC 
 Execution Time:0.0003049373626709

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.4849853515625E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.7949295043945E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:8.9168548583984E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00022697448730469

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:7.8201293945312E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014019012451172

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.7220458984375E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:4.4107437133789E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.8902969360352E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00037288665771484

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.5844268798828E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.3896179199219E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:7.6055526733398E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:3.9815902709961E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:4.2915344238281E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010991096496582

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00041007995605469

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010108947753906

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:4.8160552978516E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:9.8943710327148E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00057601928710938

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.4877014160156E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012707710266113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010919570922852

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_template' 
 Execution Time:0.00028109550476074

UPDATE `ospos_app_config` SET `key` = 'receipt_template', `value` = 'receipt_short'
WHERE `key` = 'receipt_template' 
 Execution Time:0.0009300708770752

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_font_size' 
 Execution Time:0.0014548301696777

UPDATE `ospos_app_config` SET `key` = 'receipt_font_size', `value` = '12'
WHERE `key` = 'receipt_font_size' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_delay_autoreturn' 
 Execution Time:0.00034403800964355

UPDATE `ospos_app_config` SET `key` = 'print_delay_autoreturn', `value` = '0'
WHERE `key` = 'print_delay_autoreturn' 
 Execution Time:0.00057411193847656

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'email_receipt_check_behaviour' 
 Execution Time:0.00018501281738281

UPDATE `ospos_app_config` SET `key` = 'email_receipt_check_behaviour', `value` = 'last'
WHERE `key` = 'email_receipt_check_behaviour' 
 Execution Time:0.00019717216491699

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_receipt_check_behaviour' 
 Execution Time:0.00024795532226562

UPDATE `ospos_app_config` SET `key` = 'print_receipt_check_behaviour', `value` = 'last'
WHERE `key` = 'print_receipt_check_behaviour' 
 Execution Time:0.00044393539428711

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_show_company_name' 
 Execution Time:0.00040793418884277

UPDATE `ospos_app_config` SET `key` = 'receipt_show_company_name', `value` = 1
WHERE `key` = 'receipt_show_company_name' 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_show_taxes' 
 Execution Time:0.00029516220092773

UPDATE `ospos_app_config` SET `key` = 'receipt_show_taxes', `value` = 1
WHERE `key` = 'receipt_show_taxes' 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_show_tax_ind' 
 Execution Time:0.00025510787963867

UPDATE `ospos_app_config` SET `key` = 'receipt_show_tax_ind', `value` = 1
WHERE `key` = 'receipt_show_tax_ind' 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_show_total_discount' 
 Execution Time:0.00010085105895996

UPDATE `ospos_app_config` SET `key` = 'receipt_show_total_discount', `value` = 1
WHERE `key` = 'receipt_show_total_discount' 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_show_description' 
 Execution Time:9.4890594482422E-5

UPDATE `ospos_app_config` SET `key` = 'receipt_show_description', `value` = 1
WHERE `key` = 'receipt_show_description' 
 Execution Time:9.4175338745117E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receipt_show_serialnumber' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'receipt_show_serialnumber', `value` = 1
WHERE `key` = 'receipt_show_serialnumber' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_silently' 
 Execution Time:8.2015991210938E-5

UPDATE `ospos_app_config` SET `key` = 'print_silently', `value` = 0
WHERE `key` = 'print_silently' 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_header' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'print_header', `value` = 0
WHERE `key` = 'print_header' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_footer' 
 Execution Time:8.392333984375E-5

UPDATE `ospos_app_config` SET `key` = 'print_footer', `value` = 0
WHERE `key` = 'print_footer' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_top_margin' 
 Execution Time:8.1062316894531E-5

UPDATE `ospos_app_config` SET `key` = 'print_top_margin', `value` = NULL
WHERE `key` = 'print_top_margin' 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_left_margin' 
 Execution Time:8.4161758422852E-5

UPDATE `ospos_app_config` SET `key` = 'print_left_margin', `value` = NULL
WHERE `key` = 'print_left_margin' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_bottom_margin' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'print_bottom_margin', `value` = NULL
WHERE `key` = 'print_bottom_margin' 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'print_right_margin' 
 Execution Time:8.082389831543E-5

UPDATE `ospos_app_config` SET `key` = 'print_right_margin', `value` = NULL
WHERE `key` = 'print_right_margin' 
 Execution Time:7.7962875366211E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0014438629150391

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00045394897460938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00032305717468262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.4877014160156E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.8916549682617E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00036311149597168

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.4836273193359E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010085105895996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_enable' 
 Execution Time:0.00027108192443848

UPDATE `ospos_app_config` SET `key` = 'invoice_enable', `value` = 1
WHERE `key` = 'invoice_enable' 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_register_mode' 
 Execution Time:0.00011014938354492

UPDATE `ospos_app_config` SET `key` = 'default_register_mode', `value` = 'sale_invoice'
WHERE `key` = 'default_register_mode' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'sales_invoice_format' 
 Execution Time:0.00016903877258301

UPDATE `ospos_app_config` SET `key` = 'sales_invoice_format', `value` = '{CO}'
WHERE `key` = 'sales_invoice_format' 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'sales_quote_format' 
 Execution Time:0.00015997886657715

UPDATE `ospos_app_config` SET `key` = 'sales_quote_format', `value` = 'Q%y{QSEQ:6}'
WHERE `key` = 'sales_quote_format' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'recv_invoice_format' 
 Execution Time:0.00011992454528809

UPDATE `ospos_app_config` SET `key` = 'recv_invoice_format', `value` = '{CO}'
WHERE `key` = 'recv_invoice_format' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_default_comments' 
 Execution Time:0.00010490417480469

UPDATE `ospos_app_config` SET `key` = 'invoice_default_comments', `value` = 'Thankyou for Visiting'
WHERE `key` = 'invoice_default_comments' 
 Execution Time:9.5129013061523E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_email_message' 
 Execution Time:8.1062316894531E-5

UPDATE `ospos_app_config` SET `key` = 'invoice_email_message', `value` = 'Dear {CU}, In attachment the receipt for sale {ISEQ}'
WHERE `key` = 'invoice_email_message' 
 Execution Time:7.4863433837891E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'line_sequence' 
 Execution Time:7.2002410888672E-5

UPDATE `ospos_app_config` SET `key` = 'line_sequence', `value` = '0'
WHERE `key` = 'line_sequence' 
 Execution Time:7.0810317993164E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'last_used_invoice_number' 
 Execution Time:8.6069107055664E-5

UPDATE `ospos_app_config` SET `key` = 'last_used_invoice_number', `value` = '0'
WHERE `key` = 'last_used_invoice_number' 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'last_used_quote_number' 
 Execution Time:8.702278137207E-5

UPDATE `ospos_app_config` SET `key` = 'last_used_quote_number', `value` = '0'
WHERE `key` = 'last_used_quote_number' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'quote_default_comments' 
 Execution Time:8.6069107055664E-5

UPDATE `ospos_app_config` SET `key` = 'quote_default_comments', `value` = 'This is a default quote comment'
WHERE `key` = 'quote_default_comments' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'work_order_enable' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'work_order_enable', `value` = 0
WHERE `key` = 'work_order_enable' 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'work_order_format' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'work_order_format', `value` = 'W%y{WSEQ:6}'
WHERE `key` = 'work_order_format' 
 Execution Time:9.5844268798828E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'last_used_work_order_number' 
 Execution Time:0.00010204315185547

UPDATE `ospos_app_config` SET `key` = 'last_used_work_order_number', `value` = '0'
WHERE `key` = 'last_used_work_order_number' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_type' 
 Execution Time:0.00010490417480469

UPDATE `ospos_app_config` SET `key` = 'invoice_type', `value` = 'invoice'
WHERE `key` = 'invoice_type' 
 Execution Time:9.608268737793E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023412704467773

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:7.7009201049805E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2029571533203E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.4849853515625E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00010418891906738

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00018906593322754

SHOW TABLES FROM `ospos` 
 Execution Time:0.00036406517028809

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.9897384643555E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.6797943115234E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013089179992676

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:4.5061111450195E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00058794021606445

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00043702125549316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:4.7922134399414E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0003972053527832

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00012612342834473

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00020480155944824

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00020694732666016

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062203407287598

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011992454528809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013017654418945

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00034403800964355

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0003669261932373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0003509521484375

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00011897087097168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00022792816162109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.2928924560547E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00036787986755371

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.887580871582E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.0810317993164E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015521049499512

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.6069107055664E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010395050048828

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:2.0929780006409

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00085687637329102

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0020320415496826

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.00023007392883301

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0001370906829834

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.00046396255493164

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00010013580322266

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00074100494384766

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:8.6784362792969E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00016689300537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.0095062255859E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.9100646972656E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00037407875061035

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.3153762817383E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00035595893859863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001990795135498

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00031900405883789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010013580322266

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '7'
				GROUP BY sale_id
			) 
 Execution Time:0.20805191993713

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '7'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.001359224319458

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '7'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.0010890960693359

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '7'
ORDER BY `line` ASC 
 Execution Time:0.00054502487182617

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00011491775512695

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '7'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:6.9856643676758E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '7' 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:3.7908554077148E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.9829483032227E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:3.504753112793E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:3.1948089599609E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:3.1948089599609E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:3.0994415283203E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:5.5789947509766E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.0796737670898E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '7'
ORDER BY `print_sequence` ASC 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.3180923461914E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023794174194336

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:7.6055526733398E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.9856643676758E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.2227249145508E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.504753112793E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.0002601146697998

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0001378059387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:6.5803527832031E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:3.9815902709961E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:4.9829483032227E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:5.5074691772461E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00066995620727539

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00045108795166016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.3167343139648E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:3.0994415283203E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:6.6995620727539E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023484230041504

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:7.2002410888672E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.8187713623047E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.0054321289062E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029897689819336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.4121017456055E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.4836273193359E-5

SELECT `item_id`, `name`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%p%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00027799606323242

SELECT `item_id`, `item_number`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%p%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%p%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:6.2942504882812E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00036907196044922

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00010204315185547

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.2213668823242E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00068187713623047

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.6055526733398E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00040912628173828

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.00037384033203125

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:6.3896179199219E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:6.5803527832031E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0018219947814941

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0013420581817627

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:7.2002410888672E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021910667419434

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:7.2956085205078E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.4107437133789E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.7908554077148E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00024318695068359

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.3882598876953E-5

SELECT `item_id`, `name`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%p%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:4.6968460083008E-5

SELECT `item_id`, `item_number`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%p%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%p%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:4.1007995605469E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0003349781036377

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:9.2983245849609E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012302398681641

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.6982040405273E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00037598609924316

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:5.5074691772461E-5

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:4.4822692871094E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:4.0769577026367E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:3.8862228393555E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:4.7206878662109E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:4.4107437133789E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:3.814697265625E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00063705444335938

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00053882598876953

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:7.4863433837891E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00020813941955566

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002739429473877

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.00010204315185547

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00016117095947266

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.5817108154297E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00010013580322266

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.4822692871094E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.0005040168762207

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002138614654541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:3.9815902709961E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.887580871582E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:4.9114227294922E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0011131763458252

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0015759468078613

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:7.5817108154297E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010108947753906

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00023889541625977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026202201843262

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:8.5115432739258E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:4.4107437133789E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.0001218318939209

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:3.9815902709961E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:9.8943710327148E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00027894973754883

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%l%' ESCAPE '!'
OR  `last_name` LIKE '%l%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%l%' ESCAPE '!'
OR  `email` LIKE '%l%' ESCAPE '!'
OR  `phone_number` LIKE '%l%' ESCAPE '!'
OR  `company_name` LIKE '%l%' ESCAPE '!'
 )
AND `deleted` = 0
ORDER BY `last_name` ASC 
 Execution Time:9.608268737793E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00036907196044922

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.0001227855682373

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.4121017456055E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.4849853515625E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:8.5830688476562E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.1961669921875E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.0005190372467041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024890899658203

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00010013580322266

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00012302398681641

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.0013740062713623

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00059008598327637

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:4.8160552978516E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:8.6069107055664E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00066995620727539

SELECT GET_LOCK('a111386ddb85805f01234653efd3842f', 300) AS ci_session_lock 
 Execution Time:0.0003349781036377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00094699859619141

UPDATE `ospos_sessions` SET `timestamp` = 1576320749, `data` = '__ci_last_regenerate|i:1576320749;person_id|s:1:\"5\";menu_group|s:4:\"home\";allow_temp_items|i:1;sale_id|i:-1;sales_mode|s:12:\"sale_invoice\";sales_location|s:1:\"1\";sales_invoice_number_enabled|b:0;sales_employee|s:1:\"5\";sales_work_order_number|N;sales_cart|a:2:{i:1;a:25:{s:7:\"item_id\";s:1:\"1\";s:13:\"item_location\";s:1:\"1\";s:10:\"stock_name\";s:5:\"stock\";s:4:\"line\";i:1;s:4:\"name\";s:20:\"Panner Kadhai | Each\";s:11:\"item_number\";s:6:\"112233\";s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:21:\"allow_alt_description\";s:1:\"1\";s:13:\"is_serialized\";s:1:\"1\";s:8:\"quantity\";i:1;s:8:\"discount\";s:4:\"0.00\";s:13:\"discount_type\";s:1:\"1\";s:8:\"in_stock\";s:5:\"0.000\";s:5:\"price\";s:6:\"200.00\";s:10:\"cost_price\";s:6:\"100.00\";s:5:\"total\";s:6:\"200.00\";s:16:\"discounted_total\";s:8:\"200.0000\";s:12:\"print_option\";i:0;s:10:\"stock_type\";s:1:\"1\";s:9:\"item_type\";s:1:\"0\";s:8:\"hsn_code\";s:0:\"\";s:15:\"tax_category_id\";s:1:\"0\";}i:2;a:25:{s:7:\"item_id\";s:1:\"1\";s:13:\"item_location\";s:1:\"1\";s:10:\"stock_name\";s:5:\"stock\";s:4:\"line\";i:2;s:4:\"name\";s:20:\"Panner Kadhai | Each\";s:11:\"item_number\";s:6:\"112233\";s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:21:\"allow_alt_description\";s:1:\"1\";s:13:\"is_serialized\";s:1:\"1\";s:8:\"quantity\";i:1;s:8:\"discount\";s:4:\"0.00\";s:13:\"discount_type\";s:1:\"1\";s:8:\"in_stock\";s:5:\"0.000\";s:5:\"price\";s:6:\"200.00\";s:10:\"cost_price\";s:6:\"100.00\";s:5:\"total\";s:6:\"200.00\";s:16:\"discounted_total\";s:8:\"200.0000\";s:12:\"print_option\";i:0;s:10:\"stock_type\";s:1:\"1\";s:9:\"item_type\";s:1:\"0\";s:8:\"hsn_code\";s:0:\"\";s:15:\"tax_category_id\";s:1:\"0\";}}sales_customer|s:1:\"6\";dinner_table|i:1;sales_payments|a:1:{s:4:\"Cash\";a:3:{s:12:\"payment_type\";s:4:\"Cash\";s:14:\"payment_amount\";d:420;s:11:\"cash_refund\";i:0;}}cash_mode|i:0;cash_rounding|i:0;sales_invoice_number|N;'
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.1615891456604

SELECT RELEASE_LOCK('a111386ddb85805f01234653efd3842f') AS ci_session_lock 
 Execution Time:0.00014185905456543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '4p2370ih7elk9g9tobp3ohe1sksujvl8'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.033529996871948

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021982192993164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.5830688476562E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.2213668823242E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.9856643676758E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:5.4836273193359E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.6014785766602E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00030994415283203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.5129013061523E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.9829483032227E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.8160552978516E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.887580871582E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.7193298339844E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.6001205444336E-5

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_sales`
WHERE `invoice_number` = '5' 
 Execution Time:0.00012302398681641

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.887580871582E-5

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2019-12-14 16:22:29', '6', '5', '', 0, '5', NULL, NULL, 1, 1) 
 Execution Time:0.00023198127746582

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (9, 'Cash', 420, 0, '5') 
 Execution Time:0.083806991577148

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00038695335388184

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:0.00030803680419922

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (9, '1', 1, '', '', 1, '0.00', '1', '100.00', '200.00', '1', 0) 
 Execution Time:0.00018811225891113

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '1', definition_id, attribute_id, 9
			  FROM ospos_attribute_links
			  WHERE item_id = '1' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00027585029602051

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:0.065885066986084

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (9, '1', 2, '', '', 1, '0.00', '1', '100.00', '200.00', '1', 0) 
 Execution Time:0.0002899169921875

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '1', definition_id, attribute_id, 9
			  FROM ospos_attribute_links
			  WHERE item_id = '1' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00031089782714844

INSERT INTO `ospos_sales_taxes` (`sale_id`, `tax_type`, `tax_group`, `sale_tax_basis`, `sale_tax_amount`, `print_sequence`, `name`, `tax_rate`, `sales_tax_code_id`, `jurisdiction_id`, `tax_category_id`, `rounding_code`) VALUES (9, 1, 'CGST', '400.0000', 10, 1, 'CGST', '2.500', NULL, NULL, NULL, 1) 
 Execution Time:0.00024104118347168

INSERT INTO `ospos_sales_taxes` (`sale_id`, `tax_type`, `tax_group`, `sale_tax_basis`, `sale_tax_amount`, `print_sequence`, `name`, `tax_rate`, `sales_tax_code_id`, `jurisdiction_id`, `tax_category_id`, `rounding_code`) VALUES (9, 1, 'SGST', '400.0000', 10, 3, 'SGST', '2.500', NULL, NULL, NULL, 1) 
 Execution Time:0.00022006034851074

INSERT INTO `ospos_sales_items_taxes` (`sale_id`, `item_id`, `line`, `name`, `percent`, `tax_type`, `rounding_code`, `cascade_sequence`, `item_tax_amount`, `sales_tax_code_id`, `tax_category_id`, `jurisdiction_id`) VALUES (9, '1', 1, 'CGST', '2.500', 1, 1, 0, 5, NULL, NULL, NULL) 
 Execution Time:0.065582036972046

INSERT INTO `ospos_sales_items_taxes` (`sale_id`, `item_id`, `line`, `name`, `percent`, `tax_type`, `rounding_code`, `cascade_sequence`, `item_tax_amount`, `sales_tax_code_id`, `tax_category_id`, `jurisdiction_id`) VALUES (9, '1', 1, 'SGST', '2.500', 1, 1, 0, 5, NULL, NULL, NULL) 
 Execution Time:0.00020909309387207

INSERT INTO `ospos_sales_items_taxes` (`sale_id`, `item_id`, `line`, `name`, `percent`, `tax_type`, `rounding_code`, `cascade_sequence`, `item_tax_amount`, `sales_tax_code_id`, `tax_category_id`, `jurisdiction_id`) VALUES (9, '1', 2, 'CGST', '2.500', 1, 1, 0, 5, NULL, NULL, NULL) 
 Execution Time:0.067240953445435

INSERT INTO `ospos_sales_items_taxes` (`sale_id`, `item_id`, `line`, `name`, `percent`, `tax_type`, `rounding_code`, `cascade_sequence`, `item_tax_amount`, `sales_tax_code_id`, `tax_category_id`, `jurisdiction_id`) VALUES (9, '1', 2, 'SGST', '2.500', 1, 1, 0, 5, NULL, NULL, NULL) 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00029397010803223

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'receipt_show_company_name'
 LIMIT 1 
 Execution Time:0.0002140998840332

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_header'
 LIMIT 1 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_footer'
 LIMIT 1 
 Execution Time:0.00014305114746094

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023984909057617

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.00012016296386719

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.8174133300781E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029301643371582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.3167343139648E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00056099891662598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00029587745666504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0001678466796875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010800361633301

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00027894973754883

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:9.0122222900391E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.6784362792969E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00010490417480469

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00039982795715332

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00017690658569336

SHOW TABLES FROM `ospos` 
 Execution Time:0.0011968612670898

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001218318939209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.082389831543E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:1.0635130405426

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.001317024230957

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0020589828491211

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.0002589225769043

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00022506713867188

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.000640869140625

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00038790702819824

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00054311752319336

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.00020194053649902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0005028247833252

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00027680397033691

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.3896179199219E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.6014785766602E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00041508674621582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:6.8902969360352E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.0837478637695E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.5101852416992E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.8916549682617E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '9'
				GROUP BY sale_id
			) 
 Execution Time:0.21741700172424

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '9'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00061416625976562

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '9'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.00088906288146973

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '9'
ORDER BY `line` ASC 
 Execution Time:0.000762939453125

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00013899803161621

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '9'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.0014190673828125

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00024008750915527

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00025701522827148

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '9'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011920928955078

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '9' 
 Execution Time:0.0007328987121582

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:0.00040388107299805

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00028800964355469

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.082389831543E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:6.3180923461914E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:6.4849853515625E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.5762786865234E-5

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '9'
ORDER BY `print_sequence` ASC 
 Execution Time:0.00028014183044434

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.0001220703125

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:7.9154968261719E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00087690353393555

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.0001518726348877

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026416778564453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:9.7036361694336E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00037693977355957

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00023198127746582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.0837478637695E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014376640319824

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:7.2956085205078E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012531280517578

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00062918663024902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00037908554077148

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00083088874816895

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.00021481513977051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00049400329589844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001368522644043

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:9.0837478637695E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00040888786315918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00037503242492676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00020790100097656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.8930130004883E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026416778564453

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:9.2029571533203E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:7.7009201049805E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00093317031860352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017380714416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.8902969360352E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013113021850586

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.23468995094299

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0010631084442139

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0019829273223877

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.00023484230041504

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00017094612121582

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.00046801567077637

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:8.2015991210938E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00038886070251465

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.00010895729064941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00012111663818359

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.793571472168E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.0014579296112061

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019717216491699

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.3180923461914E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6041946411133E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '9'
				GROUP BY sale_id
			) 
 Execution Time:0.38441586494446

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '9'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0020840167999268

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '9'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.0016849040985107

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '9'
ORDER BY `line` ASC 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00014305114746094

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '9'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:5.5074691772461E-5

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '9'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '9' 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:3.8862228393555E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:3.7908554077148E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:3.814697265625E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:3.7908554077148E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.887580871582E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '9'
ORDER BY `print_sequence` ASC 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:5.3167343139648E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.9114227294922E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'receipt_show_company_name'
 LIMIT 1 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_header'
 LIMIT 1 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_footer'
 LIMIT 1 
 Execution Time:3.6954879760742E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00049304962158203

SELECT GET_LOCK('b356b7be6d6a74c1f7c7359269b7c840', 300) AS ci_session_lock 
 Execution Time:0.00014615058898926

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00063681602478027

UPDATE `ospos_sessions` SET `timestamp` = 1576321177, `data` = '__ci_last_regenerate|i:1576321177;person_id|s:1:\"5\";menu_group|s:4:\"home\";allow_temp_items|i:1;sale_id|i:-1;sales_mode|s:12:\"sale_invoice\";sales_location|s:1:\"1\";sales_invoice_number_enabled|b:0;sales_employee|s:1:\"5\";sales_work_order_number|N;'
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.038708209991455

SELECT RELEASE_LOCK('b356b7be6d6a74c1f7c7359269b7c840') AS ci_session_lock 
 Execution Time:0.00018692016601562

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ag8lv37cil8qrdere84ddqo4hpq5acp7'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00031399726867676

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00015115737915039

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00012588500976562

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.9843063354492E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.0003969669342041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.5129013061523E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0003209114074707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.0108642578125E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.5115432739258E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '9'
				GROUP BY sale_id
			) 
 Execution Time:0.23805594444275

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '9'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00063300132751465

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '9'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.00094318389892578

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '9'
ORDER BY `line` ASC 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00029301643371582

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '9'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:6.2942504882812E-5

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '9'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:8.082389831543E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '9' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0002291202545166

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:9.5129013061523E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00012588500976562

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '9'
ORDER BY `print_sequence` ASC 
 Execution Time:0.00012898445129395

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013613700866699

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'receipt_show_company_name'
 LIMIT 1 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_header'
 LIMIT 1 
 Execution Time:4.887580871582E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_footer'
 LIMIT 1 
 Execution Time:3.7908554077148E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026893615722656

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00016021728515625

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00072693824768066

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.9897384643555E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:9.3936920166016E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00033903121948242

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00011920928955078

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:8.6069107055664E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00013089179992676

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00013303756713867

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00012707710266113

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012803077697754

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00044107437133789

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00012302398681641

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028610229492188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.7962875366211E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00034594535827637

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.0810317993164E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_enable' 
 Execution Time:0.00025391578674316

UPDATE `ospos_app_config` SET `key` = 'invoice_enable', `value` = 1
WHERE `key` = 'invoice_enable' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_register_mode' 
 Execution Time:0.00012111663818359

UPDATE `ospos_app_config` SET `key` = 'default_register_mode', `value` = 'sale_invoice'
WHERE `key` = 'default_register_mode' 
 Execution Time:8.5830688476562E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'sales_invoice_format' 
 Execution Time:8.1062316894531E-5

UPDATE `ospos_app_config` SET `key` = 'sales_invoice_format', `value` = '{CO}'
WHERE `key` = 'sales_invoice_format' 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'sales_quote_format' 
 Execution Time:9.7036361694336E-5

UPDATE `ospos_app_config` SET `key` = 'sales_quote_format', `value` = 'Q%y{QSEQ:6}'
WHERE `key` = 'sales_quote_format' 
 Execution Time:9.6797943115234E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'recv_invoice_format' 
 Execution Time:9.6797943115234E-5

UPDATE `ospos_app_config` SET `key` = 'recv_invoice_format', `value` = '{CO}'
WHERE `key` = 'recv_invoice_format' 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_default_comments' 
 Execution Time:9.5129013061523E-5

UPDATE `ospos_app_config` SET `key` = 'invoice_default_comments', `value` = 'Visit again '
WHERE `key` = 'invoice_default_comments' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_email_message' 
 Execution Time:9.2029571533203E-5

UPDATE `ospos_app_config` SET `key` = 'invoice_email_message', `value` = 'Dear {CU}, In attachment the receipt for sale {ISEQ}'
WHERE `key` = 'invoice_email_message' 
 Execution Time:8.9168548583984E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'line_sequence' 
 Execution Time:0.00010108947753906

UPDATE `ospos_app_config` SET `key` = 'line_sequence', `value` = '0'
WHERE `key` = 'line_sequence' 
 Execution Time:9.9897384643555E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'last_used_invoice_number' 
 Execution Time:0.00010108947753906

UPDATE `ospos_app_config` SET `key` = 'last_used_invoice_number', `value` = '0'
WHERE `key` = 'last_used_invoice_number' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'last_used_quote_number' 
 Execution Time:9.5129013061523E-5

UPDATE `ospos_app_config` SET `key` = 'last_used_quote_number', `value` = '0'
WHERE `key` = 'last_used_quote_number' 
 Execution Time:9.5844268798828E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'quote_default_comments' 
 Execution Time:9.3936920166016E-5

UPDATE `ospos_app_config` SET `key` = 'quote_default_comments', `value` = 'This is a default quote comment'
WHERE `key` = 'quote_default_comments' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'work_order_enable' 
 Execution Time:0.00048017501831055

UPDATE `ospos_app_config` SET `key` = 'work_order_enable', `value` = 0
WHERE `key` = 'work_order_enable' 
 Execution Time:0.00077486038208008

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'work_order_format' 
 Execution Time:0.0001368522644043

UPDATE `ospos_app_config` SET `key` = 'work_order_format', `value` = 'W%y{WSEQ:6}'
WHERE `key` = 'work_order_format' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'last_used_work_order_number' 
 Execution Time:0.00011205673217773

UPDATE `ospos_app_config` SET `key` = 'last_used_work_order_number', `value` = '0'
WHERE `key` = 'last_used_work_order_number' 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'invoice_type' 
 Execution Time:0.00010085105895996

UPDATE `ospos_app_config` SET `key` = 'invoice_type', `value` = 'tax_invoice'
WHERE `key` = 'invoice_type' 
 Execution Time:9.3936920166016E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028395652770996

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:8.9883804321289E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00015687942504883

SHOW TABLES FROM `ospos` 
 Execution Time:0.00052285194396973

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.0108642578125E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044012069702148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.3153762817383E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2029571533203E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:3.3855438232422E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0006709098815918

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00050592422485352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:3.3855438232422E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:4.8160552978516E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026607513427734

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:7.2956085205078E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.3153762817383E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.7908554077148E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00043582916259766

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001227855682373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013303756713867

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00031089782714844

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00014305114746094

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028800964355469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.0001218318939209

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:8.2015991210938E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00060296058654785

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00038480758666992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013399124145508

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.2215039730072

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00085711479187012

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0018551349639893

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.00018191337585449

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00014901161193848

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.00051093101501465

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:9.2029571533203E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00034093856811523

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:8.392333984375E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00050783157348633

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.4877014160156E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00037288665771484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00033402442932129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'sales_delete'
 LIMIT 1 
 Execution Time:9.0837478637695E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '1' 
 Execution Time:0.00090217590332031

SELECT *
FROM `ospos_sales_items`
WHERE `sale_id` = '1' 
 Execution Time:0.0011508464813232

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:0.0007779598236084

UPDATE `ospos_sales` SET `sale_status` = 2
WHERE `sale_id` = '1' 
 Execution Time:0.00029087066650391

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '4' 
 Execution Time:0.00026416778564453

SELECT *
FROM `ospos_sales_items`
WHERE `sale_id` = '4' 
 Execution Time:0.00024795532226562

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:0.00010514259338379

UPDATE `ospos_sales` SET `sale_status` = 2
WHERE `sale_id` = '4' 
 Execution Time:0.00020289421081543

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '5' 
 Execution Time:0.00027108192443848

SELECT *
FROM `ospos_sales_items`
WHERE `sale_id` = '5' 
 Execution Time:0.00024890899658203

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:8.8930130004883E-5

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:8.1062316894531E-5

UPDATE `ospos_sales` SET `sale_status` = 2
WHERE `sale_id` = '5' 
 Execution Time:0.0001838207244873

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '7' 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_sales_items`
WHERE `sale_id` = '7' 
 Execution Time:0.000244140625

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:8.5830688476562E-5

UPDATE `ospos_sales` SET `sale_status` = 2
WHERE `sale_id` = '7' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '9' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_sales_items`
WHERE `sale_id` = '9' 
 Execution Time:0.00024986267089844

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:9.2983245849609E-5

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:8.7976455688477E-5

UPDATE `ospos_sales` SET `sale_status` = 2
WHERE `sale_id` = '9' 
 Execution Time:0.00019598007202148

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00025081634521484

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:9.2983245849609E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018787384033203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00010800361633301

SHOW TABLES FROM `ospos` 
 Execution Time:0.000823974609375

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.6069107055664E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.4877014160156E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.3909759521484E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.18151807785034

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00055909156799316

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0015151500701904

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.0002899169921875

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00027918815612793

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.00049996376037598

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00049209594726562

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00037097930908203

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00010108947753906

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00028586387634277

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.4836273193359E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00034618377685547

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011086463928223

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00016117095947266

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.5101852416992E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:9.0837478637695E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:7.5101852416992E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:5.4121017456055E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00056290626525879

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00052404403686523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.6055526733398E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:9.4890594482422E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00025010108947754

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:8.392333984375E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028681755065918

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.9870223999023E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:7.0095062255859E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00042104721069336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.0095062255859E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010418891906738

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.6055526733398E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.6055526733398E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.4863433837891E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.0837478637695E-5

SELECT `item_id`, `name`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%o%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00029206275939941

SELECT `item_id`, `item_number`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%o%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00022411346435547

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%o%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00022006034851074

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0003509521484375

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00011897087097168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00031185150146484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:9.1791152954102E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:6.1988830566406E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00042295455932617

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011181831359863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013089179992676

SELECT *
FROM `ospos_dinner_tables`
WHERE `dinner_table_id` = 1 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = '2'
AND `deleted` = 0 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:6.7949295043945E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:7.0095062255859E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00067281723022461

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0005497932434082

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:8.1062316894531E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023508071899414

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:7.8201293945312E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.9843063354492E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.6954879760742E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00028681755065918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001218318939209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.1048736572266E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.9856643676758E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.3936920166016E-5

SELECT `item_id`, `name`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%o%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:7.7962875366211E-5

SELECT `item_id`, `item_number`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%o%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%o%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:6.6995620727539E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00027012825012207

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00012683868408203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00022721290588379

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011515617370605

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:7.4863433837891E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00041604042053223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012612342834473

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.4863433837891E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.9168548583984E-5

SELECT `item_id`, `name`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%e%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00033092498779297

SELECT `item_id`, `item_number`, `pack_name`, `item_number`, `name`, `unit_price`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%e%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%e%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:5.1975250244141E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002751350402832

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:9.1075897216797E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013208389282227

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00010490417480469

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:6.8902969360352E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00057601928710938

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011587142944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:5.4121017456055E-5

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.00039386749267578

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:3.8862228393555E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = '2'
AND `deleted` = 0 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00017595291137695

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0022761821746826

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0006859302520752

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:6.8187713623047E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:9.1791152954102E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00014495849609375

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00040602684020996

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:7.5101852416992E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00044703483581543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.4175338745117E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00012683868408203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00038003921508789

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = '2'
AND `deleted` = 0 
 Execution Time:0.00035715103149414

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00012302398681641

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:8.9168548583984E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012760162353516

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.002032995223999

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:0.00031399726867676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:5.6982040405273E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00032806396484375

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0003509521484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012898445129395

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:6.6041946411133E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00044584274291992

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.5817108154297E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012707710266113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.8214874267578E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00022721290588379

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00062108039855957

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = '2'
AND `deleted` = 0 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00020289421081543

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00021815299987793

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0001978874206543

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00065922737121582

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0007631778717041

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00027990341186523

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00025105476379395

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:9.0122222900391E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.0001227855682373

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.1961669921875E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.7908554077148E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:9.8943710327148E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00030207633972168

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:5.8174133300781E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.8160552978516E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.9114227294922E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:3.9815902709961E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00068998336791992

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00047397613525391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.8889389038086E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `tax_code_id` = ''
AND `deleted` = 0 
 Execution Time:4.3869018554688E-5

SHOW COLUMNS FROM `ospos_tax_codes` 
 Execution Time:0.00043201446533203

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:4.6014785766602E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = -1
				GROUP BY sale_id
			) 
 Execution Time:0.00028800964355469

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = -1
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00020599365234375

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00017690658569336

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00020217895507812

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:7.0095062255859E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'customers%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:3.8862228393555E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'customers!_%' ESCAPE '!' 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_list_id'
 LIMIT 1 
 Execution Time:0.00018906593322754

SHOW TABLES FROM `ospos` 
 Execution Time:0.0011160373687744

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_customers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%l%' ESCAPE '!'
OR  `last_name` LIKE '%l%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%l%' ESCAPE '!'
OR  `email` LIKE '%l%' ESCAPE '!'
OR  `phone_number` LIKE '%l%' ESCAPE '!'
OR  `company_name` LIKE '%l%' ESCAPE '!'
 )
AND `deleted` = 0
ORDER BY `last_name` ASC 
 Execution Time:9.608268737793E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00043320655822754

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00040197372436523

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026178359985352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:2.7179718017578E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00034999847412109

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00030899047851562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:4.9114227294922E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.6968460083008E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00041103363037109

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.0003809928894043

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = '2'
AND `deleted` = 0 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:3.504753112793E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.8174133300781E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:4.7922134399414E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00029611587524414

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00013089179992676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002288818359375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00050997734069824

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00022697448730469

SHOW TABLES FROM `ospos` 
 Execution Time:0.0012259483337402

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011181831359863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012612342834473

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.9870223999023E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00028800964355469

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:9.2029571533203E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_id)) ENGINE=MEMORY
			(
				SELECT
					sales.sale_id AS sale_id,
					AVG(sales_items.discount) AS avg_discount,
					SUM(sales_items.quantity_purchased) AS quantity
				FROM ospos_sales AS sales
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales.sale_id
				WHERE sales.customer_id = '6'
				GROUP BY sale_id
			) 
 Execution Time:0.00045895576477051

SELECT SUM(sales_payments.payment_amount - sales_payments.cash_refund) AS total, MIN(sales_payments.payment_amount - sales_payments.cash_refund) AS min, MAX(sales_payments.payment_amount - sales_payments.cash_refund) AS max, AVG(sales_payments.payment_amount - sales_payments.cash_refund) AS average, ROUND(AVG(sales_items_temp.avg_discount), 2) AS avg_discount, ROUND(SUM(sales_items_temp.quantity), 0) AS quantity
FROM `ospos_sales`
JOIN `ospos_sales_payments` AS `sales_payments` ON `ospos_sales`.`sale_id` = `sales_payments`.`sale_id`
JOIN `ospos_sales_items_temp` AS `sales_items_temp` ON `ospos_sales`.`sale_id` = `sales_items_temp`.`sale_id`
WHERE `ospos_sales`.`customer_id` = '6'
AND `ospos_sales`.`sale_status` = 0
GROUP BY `ospos_sales`.`customer_id` 
 Execution Time:0.00039386749267578

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_temp 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = '2'
AND `deleted` = 0 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:5.4121017456055E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.8943710327148E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:7.4863433837891E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:9.0122222900391E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00043511390686035

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.0001220703125

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002748966217041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.4877014160156E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.8160552978516E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029706954956055

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.9856643676758E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.9141387939453E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:7.8916549682617E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.0095062255859E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.8174133300781E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:2.8848648071289E-5

SELECT COUNT(*) AS `numrows`
FROM `ospos_sales`
WHERE `invoice_number` IS NOT NULL 
 Execution Time:0.00020718574523926

SELECT *
FROM `ospos_sales`
WHERE `invoice_number` = '6' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.1988830566406E-5

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2019-12-14 16:32:09', '6', '5', '', 0, '6', NULL, NULL, '2', 1) 
 Execution Time:0.00029802322387695

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (10, 'Cash', 190, 0, '5') 
 Execution Time:0.079936981201172

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00039291381835938

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues, `ospos_suppliers`.`company_name`
FROM `ospos_items`
LEFT JOIN `ospos_suppliers` ON `ospos_suppliers`.`person_id` = `ospos_items`.`supplier_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '1' 
 Execution Time:8.7976455688477E-5

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (10, '1', 1, '', '', 1, 10, '0', '100.00', 200, '1', 0) 
 Execution Time:0.00020098686218262

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '1', definition_id, attribute_id, 10
			  FROM ospos_attribute_links
			  WHERE item_id = '1' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00022292137145996

INSERT INTO `ospos_sales_taxes` (`sale_id`, `tax_type`, `tax_group`, `sale_tax_basis`, `sale_tax_amount`, `print_sequence`, `name`, `tax_rate`, `sales_tax_code_id`, `jurisdiction_id`, `tax_category_id`, `rounding_code`) VALUES (10, 1, 'CGST', '200', 5, 1, 'CGST', '2.500', NULL, NULL, NULL, 1) 
 Execution Time:0.00019407272338867

INSERT INTO `ospos_sales_taxes` (`sale_id`, `tax_type`, `tax_group`, `sale_tax_basis`, `sale_tax_amount`, `print_sequence`, `name`, `tax_rate`, `sales_tax_code_id`, `jurisdiction_id`, `tax_category_id`, `rounding_code`) VALUES (10, 1, 'SGST', '200', 5, 3, 'SGST', '2.500', NULL, NULL, NULL, 1) 
 Execution Time:8.2969665527344E-5

INSERT INTO `ospos_sales_items_taxes` (`sale_id`, `item_id`, `line`, `name`, `percent`, `tax_type`, `rounding_code`, `cascade_sequence`, `item_tax_amount`, `sales_tax_code_id`, `tax_category_id`, `jurisdiction_id`) VALUES (10, '1', 1, 'CGST', '2.500', 1, 1, 0, 5, NULL, NULL, NULL) 
 Execution Time:9.2983245849609E-5

INSERT INTO `ospos_sales_items_taxes` (`sale_id`, `item_id`, `line`, `name`, `percent`, `tax_type`, `rounding_code`, `cascade_sequence`, `item_tax_amount`, `sales_tax_code_id`, `tax_category_id`, `jurisdiction_id`) VALUES (10, '1', 1, 'SGST', '2.500', 1, 1, 0, 5, NULL, NULL, NULL) 
 Execution Time:0.00010418891906738

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.047737121582031

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'receipt_show_company_name'
 LIMIT 1 
 Execution Time:0.00030899047851562

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_header'
 LIMIT 1 
 Execution Time:0.0001990795135498

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_footer'
 LIMIT 1 
 Execution Time:0.00013518333435059

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00043606758117676

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.0001060962677002

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:7.5101852416992E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:6.1988830566406E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.2928924560547E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00039505958557129

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00051689147949219

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045895576477051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:2.9087066650391E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:3.6954879760742E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:3.2901763916016E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001220703125

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00045680999755859

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00027990341186523

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00075101852416992

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:4.1007995605469E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.3896179199219E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029993057250977

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.0095062255859E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.4836273193359E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.3167343139648E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'company' 
 Execution Time:0.00029087066650391

UPDATE `ospos_app_config` SET `key` = 'company', `value` = 'Shree Krishna Family Restaurant'
WHERE `key` = 'company' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'address' 
 Execution Time:0.00012397766113281

UPDATE `ospos_app_config` SET `key` = 'address', `value` = '518, Ahinsa Vatika, Near Pawan Cinema, Main G.T.Road, Nehru Nagar, Ghaziabad, UP - 201001'
WHERE `key` = 'address' 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'phone' 
 Execution Time:0.00011396408081055

UPDATE `ospos_app_config` SET `key` = 'phone', `value` = '+919355345888'
WHERE `key` = 'phone' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'email' 
 Execution Time:0.0001070499420166

UPDATE `ospos_app_config` SET `key` = 'email', `value` = 'changeme@example.com'
WHERE `key` = 'email' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'fax' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'fax', `value` = '+919355345888'
WHERE `key` = 'fax' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'website' 
 Execution Time:8.2969665527344E-5

UPDATE `ospos_app_config` SET `key` = 'website', `value` = 'https://www.zomato.com/ncr/shree-kishna-family-restaurant-1-nehru-nagar-ghaziabad'
WHERE `key` = 'website' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'return_policy' 
 Execution Time:8.1777572631836E-5

UPDATE `ospos_app_config` SET `key` = 'return_policy', `value` = 'Food Purchased Once cannot be returned'
WHERE `key` = 'return_policy' 
 Execution Time:7.7009201049805E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00024199485778809

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00011515617370605

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.9141387939453E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029587745666504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00010085105895996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.702278137207E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010108947753906

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.5844268798828E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00033092498779297

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:5.1975250244141E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:4.9114227294922E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2956085205078E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00027990341186523

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00013089179992676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:7.3909759521484E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.8930130004883E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00039792060852051

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00012707710266113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00022411346435547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018715858459473

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00011992454528809

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:5.5074691772461E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:4.6968460083008E-5

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.1048736572266E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00038599967956543

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00029206275939941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00027608871459961

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001220703125

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018906593322754

SHOW TABLES FROM `ospos` 
 Execution Time:0.00089287757873535

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023317337036133

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00029897689819336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0003349781036377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00023913383483887

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:8.4161758422852E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:6.3180923461914E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:6.0796737670898E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:7.9870223999023E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:6.3180923461914E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:3.6001205444336E-5

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:3.6954879760742E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.6995620727539E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021505355834961

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:7.3909759521484E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:3.7908554077148E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.103515625E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00023794174194336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:7.9154968261719E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011587142944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00028204917907715

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.0003058910369873

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00012421607971191

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:4.4822692871094E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:6.7949295043945E-5

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.8943710327148E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028181076049805

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:6.6995620727539E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00031304359436035

SHOW TABLES FROM `ospos` 
 Execution Time:0.00046396255493164

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.103515625E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'company' 
 Execution Time:5.6982040405273E-5

UPDATE `ospos_app_config` SET `key` = 'company', `value` = 'Shree Krishna Family Restaurant'
WHERE `key` = 'company' 
 Execution Time:0.0001678466796875

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'address' 
 Execution Time:0.00011992454528809

UPDATE `ospos_app_config` SET `key` = 'address', `value` = '518, Ahinsa Vatika, Near Pawan Cinema, Main G.T.Road, Nehru Nagar, Ghaziabad, UP - 201001'
WHERE `key` = 'address' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'phone' 
 Execution Time:9.2983245849609E-5

UPDATE `ospos_app_config` SET `key` = 'phone', `value` = '+919355345888'
WHERE `key` = 'phone' 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'email' 
 Execution Time:8.1062316894531E-5

UPDATE `ospos_app_config` SET `key` = 'email', `value` = 'changeme@example.com'
WHERE `key` = 'email' 
 Execution Time:8.0108642578125E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'fax' 
 Execution Time:8.1777572631836E-5

UPDATE `ospos_app_config` SET `key` = 'fax', `value` = '+919355345888'
WHERE `key` = 'fax' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'website' 
 Execution Time:8.2015991210938E-5

UPDATE `ospos_app_config` SET `key` = 'website', `value` = 'https://www.zomato.com/ncr/shree-kishna-family-restaurant-1-nehru-nagar-ghaziabad'
WHERE `key` = 'website' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'return_policy' 
 Execution Time:8.082389831543E-5

UPDATE `ospos_app_config` SET `key` = 'return_policy', `value` = 'Food Purchased Once cannot be returned'
WHERE `key` = 'return_policy' 
 Execution Time:7.7009201049805E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00029397010803223

SELECT GET_LOCK('76e8292e5eaa5c520663a50e2fcee105', 300) AS ci_session_lock 
 Execution Time:0.00024294853210449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00052809715270996

UPDATE `ospos_sessions` SET `timestamp` = 1576321854, `data` = '__ci_last_regenerate|i:1576321854;person_id|s:1:\"5\";menu_group|s:4:\"home\";allow_temp_items|i:1;sale_id|i:-1;sales_mode|s:12:\"sale_invoice\";sales_location|s:1:\"1\";sales_invoice_number_enabled|b:0;sales_employee|s:1:\"5\";sales_work_order_number|N;'
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.038140058517456

SELECT RELEASE_LOCK('76e8292e5eaa5c520663a50e2fcee105') AS ci_session_lock 
 Execution Time:0.00019192695617676

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'b67v5qrvbuhifkiui5qbestedr4k9pga'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00027918815612793

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00010895729064941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00029802322387695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:8.4877014160156E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.0095062255859E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00036311149597168

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.3221664428711E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00026893615722656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00027608871459961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.4175338745117E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011587142944336

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:3.9100646972656E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:3.1948089599609E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:5.6982040405273E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013899803161621

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023078918457031

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00013208389282227

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012016296386719

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00014281272888184

SHOW TABLES FROM `ospos` 
 Execution Time:0.00030398368835449

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:6.8187713623047E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011610984802246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00043392181396484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00027608871459961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010085105895996

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'company' 
 Execution Time:7.2002410888672E-5

UPDATE `ospos_app_config` SET `key` = 'company', `value` = 'Shree Krishna Family Restaurant'
WHERE `key` = 'company' 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'address' 
 Execution Time:0.00014781951904297

UPDATE `ospos_app_config` SET `key` = 'address', `value` = '518, Ahinsa Vatika, Near Pawan Cinema, Main G.T.Road, Nehru Nagar, Ghaziabad, UP - 201001'
WHERE `key` = 'address' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'phone' 
 Execution Time:0.00016903877258301

UPDATE `ospos_app_config` SET `key` = 'phone', `value` = '+919355345888'
WHERE `key` = 'phone' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'email' 
 Execution Time:0.00010108947753906

UPDATE `ospos_app_config` SET `key` = 'email', `value` = 'changeme@example.com'
WHERE `key` = 'email' 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'fax' 
 Execution Time:0.00010013580322266

UPDATE `ospos_app_config` SET `key` = 'fax', `value` = '+919355345888'
WHERE `key` = 'fax' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'website' 
 Execution Time:0.00010895729064941

UPDATE `ospos_app_config` SET `key` = 'website', `value` = 'https://www.zomato.com/ncr/shree-kishna-family-restaurant-1-nehru-nagar-ghaziabad'
WHERE `key` = 'website' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'return_policy' 
 Execution Time:9.7036361694336E-5

UPDATE `ospos_app_config` SET `key` = 'return_policy', `value` = 'Food Purchased Once cannot be returned'
WHERE `key` = 'return_policy' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'company_logo' 
 Execution Time:0.00010395050048828

UPDATE `ospos_app_config` SET `key` = 'company_logo', `value` = 'company_logo3.png'
WHERE `key` = 'company_logo' 
 Execution Time:0.00016403198242188

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.001291036605835

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00042891502380371

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00013017654418945

SHOW TABLES FROM `ospos` 
 Execution Time:0.00054001808166504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00044083595275879

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.5129013061523E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.4161758422852E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00037097930908203

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00036191940307617

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:5.4121017456055E-5

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:5.5074691772461E-5

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:4.8160552978516E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:5.6028366088867E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:0.00011992454528809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011396408081055

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00075197219848633

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00014400482177734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.1791152954102E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.8174133300781E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00011610984802246

SHOW TABLES FROM `ospos` 
 Execution Time:0.00035214424133301

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00028204917907715

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039410591125488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011420249938965

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2029571533203E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:4.6014785766602E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:5.3882598876953E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:3.6001205444336E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0007469654083252

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00060296058654785

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:9.4890594482422E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023078918457031

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023508071899414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.4836273193359E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:7.0810317993164E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.4836273193359E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00026988983154297

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:5.0067901611328E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00046014785766602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00024890899658203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.7990036010742E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.0108642578125E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.392333984375E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6982040405273E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00060701370239258

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00018692016601562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0007178783416748

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:7.5817108154297E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:6.3896179199219E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00054383277893066

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.2029571533203E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00032401084899902

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.21674394607544

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00092101097106934

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0039069652557373

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.00056815147399902

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00075697898864746

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.0015017986297607

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:0.00046706199645996

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00037980079650879

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028181076049805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00040292739868164

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:0.00015807151794434

SHOW TABLES FROM `ospos` 
 Execution Time:0.001384973526001

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001528263092041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012707710266113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.5817108154297E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '10'
				GROUP BY sale_id
			) 
 Execution Time:0.20505714416504

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '10'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00067591667175293

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '10'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.0007479190826416

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '10'
ORDER BY `line` ASC 
 Execution Time:0.00042295455932617

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00015091896057129

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '10'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.00044989585876465

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '10' 
 Execution Time:0.00027108192443848

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:0.00024890899658203

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.4836273193359E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:9.9897384643555E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:4.5061111450195E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:4.2200088500977E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:8.5115432739258E-5

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '10'
ORDER BY `print_sequence` ASC 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:5.6982040405273E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.2928924560547E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00025606155395508

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'company_logo'
 LIMIT 1 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'receipt_show_company_name'
 LIMIT 1 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_header'
 LIMIT 1 
 Execution Time:0.00018620491027832

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'print_footer'
 LIMIT 1 
 Execution Time:0.00017404556274414

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00035500526428223

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00013518333435059

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00023317337036133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00033688545227051

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00016283988952637

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.3896179199219E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.7922134399414E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.0994415283203E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029802322387695

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.9114227294922E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:9.1075897216797E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00037884712219238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.5101852416992E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` = 1
AND `deleted` = 0 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:5.6982040405273E-5

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00068306922912598

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0004429817199707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:3.504753112793E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:8.8930130004883E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00021696090698242

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:7.5817108154297E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:4.0054321289062E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:4.3869018554688E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:3.7908554077148E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00029277801513672

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:4.2915344238281E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:6.413459777832E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00044608116149902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00020980834960938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00041604042053223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.1062316894531E-5

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '5'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:5.4121017456055E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.8889389038086E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.2969665527344E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00036311149597168

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00014805793762207

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00096583366394043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.1021575927734E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.6995620727539E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:4.6968460083008E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00043010711669922

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.0837478637695E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00039291381835938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.2029571533203E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.8902969360352E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010800361633301

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.48533296585083

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00079798698425293

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, SUM(sales_items.quantity_purchased) AS items_purchased, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer.company_name) AS company_name, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) AS subtotal, IFNULL(SUM(sales_items_taxes.tax), 0) AS tax, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS total, SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost, (IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0)) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, MAX(payments.sale_payment_amount) AS amount_tendered, (MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + IFNULL(SUM(sales_items_taxes.tax), 0), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2))) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
GROUP BY `sales`.`sale_id`
 LIMIT 25 
 Execution Time:0.0012359619140625

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id
			) 
 Execution Time:0.00014901161193848

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_status = 0 AND sales.sale_time BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.00011992454528809

SELECT COUNT(DISTINCT sales.sale_id) AS count
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_status` =0 AND `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59' 
 Execution Time:0.00032305717468262

SELECT `payment_type`, COUNT(payment_amount) AS count, SUM(payment_amount) AS payment_amount
FROM `ospos_sales` AS `sales`
JOIN `ospos_sales_payments` ON `ospos_sales_payments`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
WHERE `sales`.`sale_time` BETWEEN '2019-12-14 00:00:00' AND '2019-12-14 23:59:59'
AND `sales`.`sale_status` =0
GROUP BY `payment_type` 
 Execution Time:5.3882598876953E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00025415420532227

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:8.3208084106445E-5

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:9.3936920166016E-5

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:5.1975250244141E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:6.5088272094727E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_key'
 LIMIT 1 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'clcdesq_api_url'
 LIMIT 1 
 Execution Time:5.793571472168E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.00035500526428223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016593933105469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.5101852416992E-5

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE sales.sale_id = '10'
				GROUP BY sale_id
			) 
 Execution Time:0.80460214614868

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE sales.sale_id = '10'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0007789134979248

SELECT `sales`.`sale_id` AS `sale_id`, MAX(DATE(sales.sale_time)) AS sale_date, MAX(sales.sale_time) AS sale_time, MAX(sales.comment) AS comment, MAX(sales.sale_status) AS sale_status, MAX(sales.invoice_number) AS invoice_number, MAX(sales.quote_number) AS quote_number, MAX(sales.employee_id) AS employee_id, MAX(sales.customer_id) AS customer_id, MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name, MAX(customer_p.first_name) AS first_name, MAX(customer_p.last_name) AS last_name, MAX(customer_p.email) AS email, MAX(customer_p.comments) AS comments, IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)) AS amount_due, IFNULL(MAX(payments.sale_payment_amount), 0) AS amount_tendered, IFNULL(MAX(payments.sale_payment_amount) - IFNULL(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2) + ROUND(IFNULL(SUM(sales_items_taxes.tax), 0), 2), ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 2)), 0) AS change_due, MAX(payments.payment_type) AS payment_type
FROM `ospos_sales_items` AS `sales_items`
INNER JOIN `ospos_sales` AS `sales` ON `sales_items`.`sale_id` = `sales`.`sale_id`
LEFT JOIN `ospos_people` AS `customer_p` ON `sales`.`customer_id` = `customer_p`.`person_id`
LEFT JOIN `ospos_customers` AS `customer` ON `sales`.`customer_id` = `customer`.`person_id`
LEFT OUTER JOIN `ospos_sales_payments_temp` AS `payments` ON `sales`.`sale_id` = `payments`.`sale_id`
LEFT OUTER JOIN `ospos_sales_items_taxes_temp` AS `sales_items_taxes` ON `sales_items`.`sale_id` = `sales_items_taxes`.`sale_id` AND `sales_items`.`item_id` = `sales_items_taxes`.`item_id` AND `sales_items`.`line` = `sales_items_taxes`.`line`
WHERE `sales`.`sale_id` = '10'
GROUP BY `sale_id`
ORDER BY `sale_time` ASC 
 Execution Time:0.0013291835784912

SELECT `sales_items`.`sale_id`, `sales_items`.`item_id`, `sales_items`.`description`, `serialnumber`, `line`, `quantity_purchased`, `item_cost_price`, `item_unit_price`, `discount`, `discount_type`, `item_location`, `print_option`, concat(items.name, ' | ', items.pack_name) AS name, `category`, `item_type`, `stock_type`
FROM `ospos_sales_items` AS `sales_items`
JOIN `ospos_items` AS `items` ON `sales_items`.`item_id` = `items`.`item_id`
WHERE `sales_items`.`sale_id` = '10'
ORDER BY `line` ASC 
 Execution Time:0.00027203559875488

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '1'
OR `ospos_items`.`item_id` = 1
 )
 LIMIT 1 
 Execution Time:0.00019288063049316

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` = '10'
AND `item_id` = 1
AND definition_flags &  2 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013303756713867

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '1'
AND `location_id` = '1' 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_sales_payments`
WHERE `sale_id` = '10' 
 Execution Time:9.608268737793E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:8.2969665527344E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:8.9883804321289E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:0.00011181831359863

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:9.0122222900391E-5

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:0.00010180473327637

SELECT *
FROM `ospos_sales`
WHERE `sale_id` = '10' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '1' 
 Execution Time:6.8902969360352E-5

SELECT *
FROM `ospos_sales_taxes`
WHERE `sale_id` = '10'
ORDER BY `print_sequence` ASC 
 Execution Time:7.4148178100586E-5

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '5'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:6.2942504882812E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.6041946411133E-5

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = '6' 
 Execution Time:6.4849853515625E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00036907196044922

SELECT GET_LOCK('a942a29321c6e12dae21c8f81de5b752', 300) AS ci_session_lock 
 Execution Time:0.00018811225891113

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rsd8d6fj87d60sb6le7qa1nm0nnn8m23'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00029993057250977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00011086463928223

SHOW TABLES FROM `ospos` 
 Execution Time:0.00047111511230469

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019407272338867

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.8930130004883E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:8.7976455688477E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:7.7962875366211E-5

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'i7619u0q30bhkspcc95dlrl9ksu8tbli'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.081795930862427

SELECT GET_LOCK('d6db6c9a4e32fbbaa978162c0145c331', 300) AS ci_session_lock 
 Execution Time:0.00050902366638184

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'i7619u0q30bhkspcc95dlrl9ksu8tbli'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00028514862060547

UPDATE `ospos_sessions` SET `timestamp` = 1576322500, `data` = '__ci_last_regenerate|i:1576322500;person_id|s:1:\"5\";menu_group|s:4:\"home\";'
WHERE `id` = 'i7619u0q30bhkspcc95dlrl9ksu8tbli'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.17586278915405

SELECT RELEASE_LOCK('d6db6c9a4e32fbbaa978162c0145c331') AS ci_session_lock 
 Execution Time:0.00014114379882812

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'i7619u0q30bhkspcc95dlrl9ksu8tbli'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.00026392936706543

SELECT GET_LOCK('57497442062bb157fd96e022d0d41ac4', 300) AS ci_session_lock 
 Execution Time:0.00010204315185547

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9a6mee3s7rd8ihl8ej288cvu0kbglejs'
AND `ip_address` = '127.0.0.1' 
 Execution Time:0.0002899169921875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '5' 
 Execution Time:9.5844268798828E-5

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:7.0810317993164E-5

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '5'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:8.5830688476562E-5

SHOW TABLES FROM `ospos` 
 Execution Time:0.027611017227173

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010490417480469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.9127807617188E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.793571472168E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:5.6028366088867E-5

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00012898445129395

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00012612342834473

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00012588500976562

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00013208389282227

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:7.7009201049805E-5

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:8.2015991210938E-5

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:7.2002410888672E-5

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00030994415283203

SELECT *
FROM `ospos_attribute_definitions`
WHERE `deleted` = 0
AND `definition_type` NOT IN('GROUP') 
 Execution Time:0.00023102760314941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '5' 
 Execution Time:0.00010585784912109


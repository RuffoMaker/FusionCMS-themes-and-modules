<?php

/* YOUR LICENCE KEY HERE */
$config['licencekey']					 = "0000000000"; // Your Unique licence Key
/* YOUR LICENCE KEY HERE */

$config['434link']						 = "https://mega.co.nz/#!woVy3YID!NbpgzdrnOBxNaZbbuy6GuOkqKiQJ4tMvA7XbESQZXIk";	// Download Link addon Cataclysm 4.3.4
$config['406alink'] 					 = "https://mega.co.nz/#!0sMTFAJC!j5KZSGv9QU8T4UzJSOBMnJrDIgoVV9Xozdfa5DQBJ7M"; // Download Link addon Cataclysm 4.0.6a
$config['335alink'] 					 = "https://mega.co.nz/#!NxE1BKTR!MBaUDAL_HvbSBFlfNYq1vD552GOpMzIpBHgNOfASwUc"; // Download Link addon Wotlk
$config['fname406a']					 = "IW_Migrador406a.lua"; // Can change this if you customize addon
$config['fname335a'] 					 = "IW_Migrador335a.lua"; // Can change this if you customize addon
$config['fname434'] 					 = "IW_Migrador434.lua"; // Can change this if you customize addon

$config['baseurl'] 						 = "/"; // IMPORTANT!  (example: if your fusion url is: www.domain.com/web, baseurl is /web/   | else if youy fusion is only www.domain.com , baseurl is /)

$config['mail_title']					 = 'Mensaje de Migracion'; // mailBox Player
$config['mail_content']					 = 'Gracias por jugar con nosotros'; // mailBox Player
$config['MaxMoney']    					 = 2000000000;        // Max Money, if more then it, then only this. put values in copper coins
$config['Playtime']              		 = 2;           	// 2 days Minimum Playtime. Counted as: last archievment date - first archievment date
$config['playtime_minlvl']				 = 80; 				// Min level to check playTime...
$config['MaxHP']    				     = 4000;            // Max Honor Points, if more then it, then only this.
$config['MaxAP']       					 = 4000;             // Max Arena Points, if more then it, then only this.



					/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
					/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
					/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

$config['ignore_items'] = array( //  ITEM DROP OUR FROM DELIVERY LIST
								 // You can keep adding infinite realms, need not be consecutive.
							'1' => array( // Realm ID
									'17',
									'17',
									'17',
								),
							'2' => array( // Realm ID 2
									'17',
									'17',
									'17',
								), 
							'4' => array( // Realm ID 4
									'17',
									'17',
									'17',
								), 
							);



$config['replace_items'] = array( // ITEM WILL BE CHANGED IN DELIVERY LIST
								  // You can keep adding infinite realms, need not be consecutive.
							'1' => array( // Realm id
										 // ITEM RULES
									'12345' => array('replace' => '54321'),
									'12345' => array('replace' => '54321'),
								),
							'2' => array( // Realm id
										 // ITEM RULES
									'12345' => array('replace' => '54321'),
									'12345' => array('replace' => '54321'),
								),
							'4' => array( // Realm id
										 // ITEM RULES
									'12345' => array('replace' => '54321'),
									'12345' => array('replace' => '54321'),
								),
							);

/* No change here */
$config['force_code_editor'] = true;
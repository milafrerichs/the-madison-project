<?php

	/* SERVER DEFINITIONS
	=====================================================================*/
	define('SERVER_ABS', $_SERVER['DOCUMENT_ROOT']);
	define('SERVER_URL', 'http://'.$_SERVER['HTTP_HOST']);
	define('IS_STAGE', 	 strpos($_SERVER['HTTP_HOST'], '.yourdomain.com') !== false);

	/* MISC DEFINITIONS
	=====================================================================*/
	define('POSTMARK_APIKEY', 	'');
	define('POSTMARK_EMAIL',  	'');
	define('POSTMARK_NAME',		'');

	/* DB CREDITIONALS
	=====================================================================*/
	if(IS_STAGE)
	{
		$db_creds = array('rw'=>array('host'=>'localhost', 'name'=>'', 'user'=>'', 'pass'=>''));
		
		//error_reporting(E_ALL);
		//ini_set('display_errors', '1');
	}
	else
	{
		#ERRORS
		ini_set('log_errors', 'on');
		ini_set('display_errors', 'off');
		ini_set('display_startup_errors', 'off');
		ini_set('error_log', '');
		
		#SESSION LOCATION
		//ini_set('session.save_path', '');
		
		
		$db_creds = array('rw'=>array('host'=>'', 'name'=>'', 'user'=>'', 'pass'=>''),
						          'r2'=>array('host'=>'', 'name'=>'', 'user'=>'', 'pass'=>'')
					      );
	}
	
	define('DB_PREFIX', 'hoba_'); //DB TABLE PREFIX
	
	 
	/* DB TABLES NAME DEFINITIONS
	=====================================================================*/
	define('DB_TBL_BILLS',			DB_PREFIX.'bills');
	define('DB_TBL_BILL_CONTENT',	DB_PREFIX.'bill_content');
	define('DB_TBL_NOTES',			DB_PREFIX.'notes');
	define('DB_TBL_TOP_NOTES',		DB_PREFIX.'top_notes');
	define('DB_TBL_USERS', 			DB_PREFIX.'users');
	define('DB_TBL_USER_META', 		DB_PREFIX.'user_meta');
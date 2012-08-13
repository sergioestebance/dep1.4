<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'DEP v1.4',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*', // giix components
		'application.modules.rights.*',// rights
		'application.modules.rights.components.*',// rights
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		// MODULO RIGHTS
		'rights'=>array( 			
				'superuserName'=>'admin',
				'enableBizRuleData'=>true,
				'install'=>false,				
			 ),						
		// FIN RIGHTS
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'dep1.4',
			'generatorPaths' => array(
			'ext.giix-core', // giix generators
			),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
	),
		
),

	// application components
	'components'=>array(
		'user'=>array(
			'class'=>'RWebUser', //YII RIGHTS
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		'authManager'=>array(
			'class'=>'RDbAuthManager',		
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/dep4.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost; dbname=dep4',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		
		'request' => array(
        'class' => 'application.components.HttpRequest',
        'enableCsrfValidation' => true,
		'enableCookieValidation'=>true,
		'noCsrfValidationRoutes'=>array('procesogasto/creaPG','procesocompra/creaPC','peticionet/create','peticionet/crear','solicitudcompra/crear','enviobase/crear','adquisicion/crear','plantilla/crear','constancia/crear','honorario/crear','et/editar','controlseguimiento/creaCS','procesocompra/editarBL','procesocompra/editarTD','aj/editar'),
		),
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'contacto@raboit.com',
	),
);
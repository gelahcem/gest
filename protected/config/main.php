<?php

// uncomment the following to define a path alias
 /*Yii::setPathOfAlias('srbac.components','application.modules.');
 Yii::setPathOfAlias('application.views.layouts.main','application.views.layouts.main');
 Yii::setPathOfAlias('srbac.views.authitem.unauthorized','application.modules.srbac.views.authitem.unauthorized');
 Yii::setPathOfAlias('srbac.views.authitem.header','application.modules.srbac.views.authitem.header');
 Yii::setPathOfAlias('srbac.views.authitem.footer','application.modules.srbac.views.authitem.footer');*/

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Gestione Commesse',
    'defaultController' => 'site/login',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.srbac.controllers.SBaseController',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'gii',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'srbac' => array(
			'userclass'=>'risorse', //default: User
			'userid'=>'ID', //default: userid
			'username'=>'IDENTIFICATIVO', //default:username
			'delimeter'=>'@', //default:-
			'debug'=>true, //default :false
			'pageSize'=>10, // default : 15
			'superUser' =>'Authority', //default: Authorizer
			'css'=>'srbac.css', //default: srbac.css
			'layout'=>
				'application.views.layouts.main', //default: application.views.layouts.main,
			//must be an existing alias
			'notAuthorizedView'=> 'application.modules.srbac.views.authitem.unauthorized', // default:
			//srbac.views.authitem.unauthorized, must be an existing alias
			'alwaysAllowed'=>array( //default: array()
				'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
				'SiteError', 'SiteContact'),
			'userActions'=>array('Show','View','List'), //default: array()
			'listBoxNumberOfLines' => 15, //default : 10
			'imagesPath' => 'srbac.images', // default: srbac.images
			'imagesPack'=>'tango', //default: noia
			'iconText'=>true, // default : false
			'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
			//must be an existing alias
			'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
			//must be an existing alias
			'showHeader'=>true, // default: false
			'showFooter'=>true, // default: false
			'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
			// must be an existing alias
		)

	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'class' => 'WebUser',
		),
		'authManager'=>array(
			// Path to SDbAuthManager in srbac module if you want to use case insensitive
			//access checking (or CDbAuthManager for case sensitive access checking)
			'class'=>'application.modules.srbac.components.SDbAuthManager',
			// The database component used
			'connectionID'=>'db',
			// The itemTable name (default:authitem)
			'itemTable'=>'items',
			// The assignmentTable name (default:authassignment)
			'assignmentTable'=>'assignments',
			// The itemChildTable name (default:authitemchild)
			'itemChildTable'=>'itemchildren',
		),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
		'adminEmail'=>'gelahcem@gmail.com',
	),
);

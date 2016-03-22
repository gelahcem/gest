<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page" <!--style="width:auto;"-->

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="menu">
		<?php $this->widget('application.extensions.menu.SMenu',
			array(
				"menu"=>array(
					array("url"=>array(
						"route"=>"/site/index"),
						"label"=>"Home",
						'visible'=>!Yii::app()->user->isGuest,
						'icon'=>'images/home.png'),
					array("url"=>"",
						"label"=>"Timesheets",
						'visible'=>!Yii::app()->user->isGuest,
						'icon'=>'images/calendar.png',
						array("url"=>array(
							"route"=>"/timesheet/admin"),
							"label"=>"Manage Timesheet",
							'icon'=>'images/timesheets.gif')),
					array("url"=>"",
						"label"=>"Back-End",
						'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('admin'),
						'icon'=>'images/settings.png',
						array("url"=>array(
							"route"=>"/risorse/admin"),
							"label"=>"Manage User",
							'icon'=>'images/userok.png'),
						array("url"=>array(
							"route"=>"/srbac"),
							"label"=>"Manage Role",
							'icon'=>'images/users.png')),
					array("url"=>array(
						"route"=>"/site/login"),
						"label"=>"login",
						'visible'=>Yii::app()->user->isGuest,
						'icon'=>'images/power.png'),
					array("url"=>array(
						"route"=>"/site/logout"),
						"label"=>'Logout ('.Yii::app()->user->name.')',
						'visible'=>!Yii::app()->user->isGuest,
						'icon'=>'images/logout.png'),
				),
				"stylesheet"=>"menu_white.css",
				"menuID"=>"myMenu",
				"delay"=>3
			)
		);
		?>
	</div><!-- mainmenu --><div></br></br></div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by NAD s.r.l.<br/>
		All Rights Reserved.<br/>
		<p align="right"><font size="0.05"><i>powered by </i></font><img src="/gest/images/nad.jpg"></p>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

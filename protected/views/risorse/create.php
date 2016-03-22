<?php
/* @var $this RisorseController */
/* @var $model risorse */

$this->breadcrumbs=array(
	'Risorses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List risorse', 'url'=>array('index')),
	array('label'=>'Manage risorse', 'url'=>array('admin')),
);
?>

<h1>Create risorse</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this CommesseController */
/* @var $model Commesse */

$this->breadcrumbs=array(
	'Commesses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Commesse', 'url'=>array('index')),
	array('label'=>'Manage Commesse', 'url'=>array('admin')),
);
?>

<h1>Create Commesse</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
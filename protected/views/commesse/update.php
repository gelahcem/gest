<?php
/* @var $this CommesseController */
/* @var $model Commesse */

$this->breadcrumbs=array(
	'Commesses'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Commesse', 'url'=>array('index')),
	array('label'=>'Create Commesse', 'url'=>array('create')),
	array('label'=>'View Commesse', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Commesse', 'url'=>array('admin')),
);
?>

<h1>Update Commesse <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
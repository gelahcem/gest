<?php
/* @var $this RisorseController */
/* @var $model risorse */

$this->breadcrumbs=array(
	'Risorses'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List risorse', 'url'=>array('index')),
	array('label'=>'Create risorse', 'url'=>array('create')),
	array('label'=>'View risorse', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage risorse', 'url'=>array('admin')),
);
?>

<h1>Update risorse <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
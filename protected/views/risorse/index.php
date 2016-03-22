<?php
/* @var $this RisorseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Risorses',
);

$this->menu=array(
	array('label'=>'Create risorse', 'url'=>array('create')),
	array('label'=>'Manage risorse', 'url'=>array('admin')),
);
?>

<h1>Risorses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

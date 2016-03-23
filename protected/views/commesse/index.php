<?php
/* @var $this CommesseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Commesses',
);

$this->menu=array(
	array('label'=>'Create Commesse', 'url'=>array('create')),
	array('label'=>'Manage Commesse', 'url'=>array('admin')),
);
?>

<h1>Commesses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

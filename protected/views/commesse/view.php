<?php
/* @var $this CommesseController */
/* @var $model Commesse */

$this->breadcrumbs=array(
	'Commesses'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Commesse', 'url'=>array('index')),
	array('label'=>'Create Commesse', 'url'=>array('create')),
	array('label'=>'Update Commesse', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Commesse', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Commesse', 'url'=>array('admin')),
);
?>

<h1>View Commesse #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'IDENTIFICATIVO',
		'DATAAPERTURA',
		'DATACHIUSURA',
		'CLIENTE',
		'DESCRIZIONE',
		'TITOLO',
		'REFERENTE',
		'RESPCOMMESSA',
		'COORDINATORE',
		'IDPREVENTIVO',
		'SUPERCOMMESSA',
		'COMMESSEPRECEDENTI',
		'NUMEROFATTURA',
		'DATAFATTURA',
		'SOLOFORNITURA',
	),
)); ?>

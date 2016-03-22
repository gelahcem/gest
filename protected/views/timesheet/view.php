<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */

$this->breadcrumbs=array(
	'Timesheets'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Timesheet', 'url'=>array('index')),
	array('label'=>'Create Timesheet', 'url'=>array('create')),
	array('label'=>'Update Timesheet', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Timesheet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Timesheet', 'url'=>array('admin')),
);
?>

<h1>View Timesheet #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ANNO',
		'MESE',
		'SETTIMANA',
		'IDENTIFICATIVO',
		'DATA',
		'DATASHORT',
		'RISORSA',
		'IDCOMMESSA',
		'ORE',
		'KM',
		'AUTO',
		'PASTO',
		'DESCRIZIONE',
		'BLOCCO',
		'INSERITO',
		'MODIFICATO',
		'MODIFICATODA',
		'IDPREVENTIVO',
		'SUPERCOMMESSA',
		'STRAORDINARIO',
	),
)); ?>

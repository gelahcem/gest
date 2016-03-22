<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */

$this->breadcrumbs=array(
	'Timesheets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Timesheet', 'url'=>array('index')),
	array('label'=>'Create Timesheet', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#timesheet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Timesheets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'timesheet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'ANNO',
		'MESE',
		'SETTIMANA',
		'IDENTIFICATIVO',
		'DATA',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

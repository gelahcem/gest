<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */
Yii::import('application.modules.editgrid.*');
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

<form name="editableGridFormCa" method="post" action="index.php?r=timesheet/create">
<?php $this->renderPartial('_form',array(
	'model'=>$model,'datashort'=>$this->lunedisem)); ?>
</form><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'timesheet-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        /*'ID',
        'ANNO',
        'MESE',
        'SETTIMANA',
        'IDENTIFICATIVO',
        'DATA',*/
        'IDCOMMESSA',
        'DESCRIZIONE',
		'AUTO',
		'PASTO',
        'ORE',
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


<!--<form name="editableGridFormA" method="post" action="index.php?r=timesheet/editableGrid">
	<?php //$this->renderPartial('lunedi', array('model' => $model,'datashort'=>$this->lunedisem)) ?>
</form>-->

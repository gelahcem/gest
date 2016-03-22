<?php
/* @var $this TimesheetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Timesheets',
);

$this->menu=array(
	array('label'=>'Create Timesheet', 'url'=>array('create')),
	array('label'=>'Manage Timesheet', 'url'=>array('admin')),
);
?>

<h1>Timesheets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

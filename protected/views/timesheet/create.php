<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */

$this->breadcrumbs=array(
	'Timesheets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Timesheet', 'url'=>array('index')),
	array('label'=>'Manage Timesheet', 'url'=>array('admin')),
);
?>

<h1>Create Timesheet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
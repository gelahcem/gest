<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */

$this->breadcrumbs=array(
	'Timesheets'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Timesheet', 'url'=>array('index')),
	array('label'=>'Create Timesheet', 'url'=>array('create')),
	array('label'=>'View Timesheet', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Timesheet', 'url'=>array('admin')),
);
?>

<h1>Update Timesheet <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_update', array('model'=>$model)); ?>
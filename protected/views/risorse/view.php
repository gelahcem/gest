<?php
/* @var $this RisorseController */
/* @var $model risorse */

$this->breadcrumbs=array(
	'Risorses'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List risorse', 'url'=>array('index')),
	array('label'=>'Create risorse', 'url'=>array('create')),
	array('label'=>'Update risorse', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete risorse', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage risorse', 'url'=>array('admin')),
);
?>

<h1>View risorse #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'IDENTIFICATIVO',
		'NOME',
		'COGNOME',
		'NOMINATIVO',
		'USERNAME',
		'PASSWORD',
		'RUOLO',
		'COSTO',
		'ACL',
		'MAIL',
		'ACLFORTE',
		'ACLSKY',
	),
)); ?>

<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timesheet-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	//'enableAjaxValidation'=>false,
	'enableClientValidation' => true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php
		echo $form->dropDownList($model, 'IDCOMMESSA', CHtml::listData(Commesse::model()->findAll(), 'IDENTIFICATIVO', 'DESCRIZIONE'),
			array('empty' => 'selezziona commessa')
		);
		?>
		<?php echo $form->textField($model, 'DESCRIZIONE', array('size' => 60, 'maxlength' => 2048, 'placeholder' => 'descrizione',)); ?>
		<?php echo $form->textField($model, 'ORE', array('size' => 6, 'maxlength' => 6, 'placeholder' => 'ore',)); ?>
		<?php echo CHtml::submitButton(Yii::t('model', '+'), array('class' => 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
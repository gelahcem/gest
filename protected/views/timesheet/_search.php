<?php
/* @var $this TimesheetController */
/* @var $model Timesheet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANNO'); ?>
		<?php echo $form->textField($model,'ANNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MESE'); ?>
		<?php echo $form->textField($model,'MESE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SETTIMANA'); ?>
		<?php echo $form->textField($model,'SETTIMANA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDENTIFICATIVO'); ?>
		<?php echo $form->textField($model,'IDENTIFICATIVO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATA'); ?>
		<?php echo $form->textField($model,'DATA',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATASHORT'); ?>
		<?php echo $form->textField($model,'DATASHORT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RISORSA'); ?>
		<?php echo $form->textField($model,'RISORSA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCOMMESSA'); ?>
		<?php echo $form->textField($model,'IDCOMMESSA',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORE'); ?>
		<?php echo $form->textField($model,'ORE',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KM'); ?>
		<?php echo $form->textField($model,'KM',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AUTO'); ?>
		<?php echo $form->textField($model,'AUTO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASTO'); ?>
		<?php echo $form->textField($model,'PASTO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIZIONE'); ?>
		<?php echo $form->textField($model,'DESCRIZIONE',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BLOCCO'); ?>
		<?php echo $form->textField($model,'BLOCCO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSERITO'); ?>
		<?php echo $form->textField($model,'INSERITO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODIFICATO'); ?>
		<?php echo $form->textField($model,'MODIFICATO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODIFICATODA'); ?>
		<?php echo $form->textField($model,'MODIFICATODA',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPREVENTIVO'); ?>
		<?php echo $form->textField($model,'IDPREVENTIVO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUPERCOMMESSA'); ?>
		<?php echo $form->textField($model,'SUPERCOMMESSA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STRAORDINARIO'); ?>
		<?php echo $form->textField($model,'STRAORDINARIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
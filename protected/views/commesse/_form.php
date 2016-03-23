<?php
/* @var $this CommesseController */
/* @var $model Commesse */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commesse-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDENTIFICATIVO'); ?>
		<?php echo $form->textField($model,'IDENTIFICATIVO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IDENTIFICATIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATAAPERTURA'); ?>
		<?php echo $form->textField($model,'DATAAPERTURA'); ?>
		<?php echo $form->error($model,'DATAAPERTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATACHIUSURA'); ?>
		<?php echo $form->textField($model,'DATACHIUSURA'); ?>
		<?php echo $form->error($model,'DATACHIUSURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLIENTE'); ?>
		<?php echo $form->textField($model,'CLIENTE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIZIONE'); ?>
		<?php echo $form->textField($model,'DESCRIZIONE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DESCRIZIONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITOLO'); ?>
		<?php echo $form->textField($model,'TITOLO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TITOLO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REFERENTE'); ?>
		<?php echo $form->textField($model,'REFERENTE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'REFERENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESPCOMMESSA'); ?>
		<?php echo $form->textField($model,'RESPCOMMESSA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RESPCOMMESSA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COORDINATORE'); ?>
		<?php echo $form->textField($model,'COORDINATORE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'COORDINATORE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDPREVENTIVO'); ?>
		<?php echo $form->textField($model,'IDPREVENTIVO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'IDPREVENTIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUPERCOMMESSA'); ?>
		<?php echo $form->textField($model,'SUPERCOMMESSA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SUPERCOMMESSA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMMESSEPRECEDENTI'); ?>
		<?php echo $form->textField($model,'COMMESSEPRECEDENTI',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'COMMESSEPRECEDENTI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NUMEROFATTURA'); ?>
		<?php echo $form->textField($model,'NUMEROFATTURA',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NUMEROFATTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATAFATTURA'); ?>
		<?php echo $form->textField($model,'DATAFATTURA'); ?>
		<?php echo $form->error($model,'DATAFATTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SOLOFORNITURA'); ?>
		<?php echo $form->textField($model,'SOLOFORNITURA'); ?>
		<?php echo $form->error($model,'SOLOFORNITURA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
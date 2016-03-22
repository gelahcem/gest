<?php
/* @var $this RisorseController */
/* @var $model risorse */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'risorse-form',
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
		<?php echo $form->labelEx($model,'NOME'); ?>
		<?php echo $form->textField($model,'NOME',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COGNOME'); ?>
		<?php echo $form->textField($model,'COGNOME',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'COGNOME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMINATIVO'); ?>
		<?php echo $form->textField($model,'NOMINATIVO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOMINATIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUOLO'); ?>
		<?php echo $form->textField($model,'RUOLO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RUOLO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COSTO'); ?>
		<?php echo $form->textField($model,'COSTO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'COSTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACL'); ?>
		<?php echo $form->textField($model,'ACL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ACL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MAIL'); ?>
		<?php echo $form->textField($model,'MAIL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACLFORTE'); ?>
		<?php echo $form->textField($model,'ACLFORTE'); ?>
		<?php echo $form->error($model,'ACLFORTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACLSKY'); ?>
		<?php echo $form->textField($model,'ACLSKY'); ?>
		<?php echo $form->error($model,'ACLSKY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
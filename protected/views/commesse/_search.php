<?php
/* @var $this CommesseController */
/* @var $model Commesse */
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
		<?php echo $form->label($model,'IDENTIFICATIVO'); ?>
		<?php echo $form->textField($model,'IDENTIFICATIVO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATAAPERTURA'); ?>
		<?php echo $form->textField($model,'DATAAPERTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATACHIUSURA'); ?>
		<?php echo $form->textField($model,'DATACHIUSURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLIENTE'); ?>
		<?php echo $form->textField($model,'CLIENTE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIZIONE'); ?>
		<?php echo $form->textField($model,'DESCRIZIONE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TITOLO'); ?>
		<?php echo $form->textField($model,'TITOLO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REFERENTE'); ?>
		<?php echo $form->textField($model,'REFERENTE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESPCOMMESSA'); ?>
		<?php echo $form->textField($model,'RESPCOMMESSA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COORDINATORE'); ?>
		<?php echo $form->textField($model,'COORDINATORE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPREVENTIVO'); ?>
		<?php echo $form->textField($model,'IDPREVENTIVO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUPERCOMMESSA'); ?>
		<?php echo $form->textField($model,'SUPERCOMMESSA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMMESSEPRECEDENTI'); ?>
		<?php echo $form->textField($model,'COMMESSEPRECEDENTI',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NUMEROFATTURA'); ?>
		<?php echo $form->textField($model,'NUMEROFATTURA',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATAFATTURA'); ?>
		<?php echo $form->textField($model,'DATAFATTURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SOLOFORNITURA'); ?>
		<?php echo $form->textField($model,'SOLOFORNITURA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
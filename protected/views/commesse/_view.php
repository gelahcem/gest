<?php
/* @var $this CommesseController */
/* @var $data Commesse */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDENTIFICATIVO')); ?>:</b>
	<?php echo CHtml::encode($data->IDENTIFICATIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATAAPERTURA')); ?>:</b>
	<?php echo CHtml::encode($data->DATAAPERTURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATACHIUSURA')); ?>:</b>
	<?php echo CHtml::encode($data->DATACHIUSURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIZIONE')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIZIONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITOLO')); ?>:</b>
	<?php echo CHtml::encode($data->TITOLO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENTE')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESPCOMMESSA')); ?>:</b>
	<?php echo CHtml::encode($data->RESPCOMMESSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COORDINATORE')); ?>:</b>
	<?php echo CHtml::encode($data->COORDINATORE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPREVENTIVO')); ?>:</b>
	<?php echo CHtml::encode($data->IDPREVENTIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUPERCOMMESSA')); ?>:</b>
	<?php echo CHtml::encode($data->SUPERCOMMESSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMMESSEPRECEDENTI')); ?>:</b>
	<?php echo CHtml::encode($data->COMMESSEPRECEDENTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NUMEROFATTURA')); ?>:</b>
	<?php echo CHtml::encode($data->NUMEROFATTURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATAFATTURA')); ?>:</b>
	<?php echo CHtml::encode($data->DATAFATTURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SOLOFORNITURA')); ?>:</b>
	<?php echo CHtml::encode($data->SOLOFORNITURA); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this TimesheetController */
/* @var $data Timesheet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNO')); ?>:</b>
	<?php echo CHtml::encode($data->ANNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MESE')); ?>:</b>
	<?php echo CHtml::encode($data->MESE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SETTIMANA')); ?>:</b>
	<?php echo CHtml::encode($data->SETTIMANA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDENTIFICATIVO')); ?>:</b>
	<?php echo CHtml::encode($data->IDENTIFICATIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATA')); ?>:</b>
	<?php echo CHtml::encode($data->DATA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATASHORT')); ?>:</b>
	<?php echo CHtml::encode($data->DATASHORT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RISORSA')); ?>:</b>
	<?php echo CHtml::encode($data->RISORSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCOMMESSA')); ?>:</b>
	<?php echo CHtml::encode($data->IDCOMMESSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORE')); ?>:</b>
	<?php echo CHtml::encode($data->ORE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KM')); ?>:</b>
	<?php echo CHtml::encode($data->KM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AUTO')); ?>:</b>
	<?php echo CHtml::encode($data->AUTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASTO')); ?>:</b>
	<?php echo CHtml::encode($data->PASTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIZIONE')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIZIONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BLOCCO')); ?>:</b>
	<?php echo CHtml::encode($data->BLOCCO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSERITO')); ?>:</b>
	<?php echo CHtml::encode($data->INSERITO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFICATO')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFICATO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODIFICATODA')); ?>:</b>
	<?php echo CHtml::encode($data->MODIFICATODA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPREVENTIVO')); ?>:</b>
	<?php echo CHtml::encode($data->IDPREVENTIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUPERCOMMESSA')); ?>:</b>
	<?php echo CHtml::encode($data->SUPERCOMMESSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STRAORDINARIO')); ?>:</b>
	<?php echo CHtml::encode($data->STRAORDINARIO); ?>
	<br />

	*/ ?>

</div>
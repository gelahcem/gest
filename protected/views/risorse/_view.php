<?php
/* @var $this RisorseController */
/* @var $data risorse */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDENTIFICATIVO')); ?>:</b>
	<?php echo CHtml::encode($data->IDENTIFICATIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOME')); ?>:</b>
	<?php echo CHtml::encode($data->NOME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COGNOME')); ?>:</b>
	<?php echo CHtml::encode($data->COGNOME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMINATIVO')); ?>:</b>
	<?php echo CHtml::encode($data->NOMINATIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RUOLO')); ?>:</b>
	<?php echo CHtml::encode($data->RUOLO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COSTO')); ?>:</b>
	<?php echo CHtml::encode($data->COSTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACL')); ?>:</b>
	<?php echo CHtml::encode($data->ACL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MAIL')); ?>:</b>
	<?php echo CHtml::encode($data->MAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACLFORTE')); ?>:</b>
	<?php echo CHtml::encode($data->ACLFORTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACLSKY')); ?>:</b>
	<?php echo CHtml::encode($data->ACLSKY); ?>
	<br />

	*/ ?>

</div>
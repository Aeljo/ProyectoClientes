
<br/><?php echo CHtml::link("Clientes",array("index"));?>

<?php
$this->pageTitle=Yii::app()->name . ' - Subir Imagen';
?>
<h1>Crear Cliente</h1>
<!--aqui se crea el fomulario para  la insercion de datos del cliente-->
<div class="form-group"  enctype="multipart/form-data">

<?php $form=$this->beginWidget('CActiveForm',
	array(
		'method'=>'POST',
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
		)
); ?>

  	
	<div>
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula'); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre'); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>


	<div>
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->emailField($model,'Email'); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Fecha Cumplea&ntildeos');?>
		<?php echo $form->dateField($model,'Fecha_Cumpleanos'); ?>
		<?php echo $form->error($model,'Fecha_Cumpleanos'); ?>
	</div>

  	<div >
		<?php echo $form->labelEx($model,'Foto'); ?>
		<?php echo $form->fileField($model,'FotoDir'); ?>
		<?php echo $form->error($model,'FotoDir'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus'); ?>
		<?php echo $form->error($model,'Estatus'); ?>
	</div>


	<div class="buttons">
		<?php echo CHtml::submitButton("Crear",array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
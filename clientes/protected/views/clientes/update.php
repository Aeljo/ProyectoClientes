  

  <h1>Actualizar Cliente #<?php echo $model->Cedula?></h1>
<!--aqui se crea el fomulario para  la insercion de datos del cliente-->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm'); ?>

  	
	<div>
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>


	<div>
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->emailField($model,'Email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Fecha Cumplea&ntildeos');?>
		<?php echo $form->dateField($model,'Fecha_Cumpleanos',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Fecha_Cumpleanos'); ?>
	</div>

  	<div >
		<?php echo $form->labelEx($model,'Foto'); ?>
		<?php echo $form->fileField($model,'FotoDir',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'FotoDir'); ?>
		
	</div>

	<div >
		<?php echo $form->labelEx($model,'Estatus'); ?>
		<?php echo $form->textField($model,'Estatus',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Estatus'); ?>
	</div>


	<div class="buttons">
		<?php echo CHtml::submitButton("Actualizar",array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Iniciar sesion';
$this->breadcrumbs=array(
	'Iniciar sesion',
);
?>

<h1>Iniciar Sesion</h1>

<p>Por favor llene el siguiente formulario con sus credenciales:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<div>
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Contraseña'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Sugerencia: Usted puede iniciar sesion como <kbd>Usuario</kbd>/<kbd>Usuario</kbd> ó <kbd>Adminnistrador</kbd>/<kbd>Administrador</kbd>.
		</p>
	</div>

	<div class="rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'Recordar'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Ingresar',  array("class"=> "btn btn-primary btn-large ")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
 
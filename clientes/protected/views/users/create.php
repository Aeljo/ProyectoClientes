<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista usarios', 'url'=>array('index')),
	array('label'=>'Manejo de usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
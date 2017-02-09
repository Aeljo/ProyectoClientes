<br/><?php echo CHtml::link("Crear Cliente",array("create"));?>

<h1>Clientes</h1>

<?php foreach($clientes as $data):?>

<h4><?php echo $data->Nombre?> <br/> <?php echo $data->Cedula?> 
  </h4>
<h3>
<a href="<?php echo $this->createUrl("enable",array("Cedula"=>$data->Cedula));?>">
	<span class="label label-<?php echo $data->Estatus==1?"info":"warning";?>">
	<?php echo $data->Estatus==1?"Enabled":"Disable"?>
	</span>
	</a>
</h3>
<?php echo CHtml::link("Actualizar",array("update","Cedula"=>$data->Cedula));?> |
<?php echo CHtml::link("Eleminar",array("Delete","Cedula"=>$data->Cedula),array("confirm"=>"Estya seguro de eleminar"));?>|
<?php echo CHtml::link("ver",array("view","Cedula"=>$data->Cedula));?>

<?php endforeach;?>  
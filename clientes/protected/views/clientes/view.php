<br/><?php echo CHtml::link("Clientes",array("index"));?>

<h1>Vista cliente</h1>
<img class="img-responsive ime-circle" src="<?php echo Yii::app()->baseUrl.'/images/'.$model->FotoDir?>" style="margin: 0 auto; display:block; width: 100px; max-width: 120px;">

<table class="table table-responsive table-striped">
	 <tr>
	    <td><strong>Cedula</strong></td>
	 	<td><?php echo $model->Cedula?> </td>
	 </tr>

	 <tr>
	    <td><strong>Nombre</strong></td>
	 	<td><?php echo $model->Nombre?> </td>
	 </tr>

	 <tr>
	    <td><strong>Email</strong></td>
	 	<td><?php echo $model->Email?> </td>
	 </tr>

	 <tr>
	    <td><strong>Fecha Cumplea&ntildeos</strong></td>
	 	<td><?php echo $model->Fecha_Cumpleanos?> </td>
	 </tr>

	 <tr>
	    <td><strong>Foto</strong></td>
	 	<td><?php echo $model->FotoDir?> </td> 
	 </tr>

	 <tr>
	    <td><strong>Estatus</strong></td>
	 	<td><span class="label label-<?php echo $model->Estatus==1?"info":"warning";?>"><?php echo $model->Estatus==1?"Enable":"Disable"?></span> </td>
	   
	 </tr>

</table> 

<?php

class Clientes extends CActiveRecord
{
	public $FotoDir;

		public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}
	
	public function tableName()
	{
		return "usuario";
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	 public function rules()
	 {
	 	return array(
	 		 array('Cedula','required','message'=>'La cedula es requerida'),
	 		  array('Cedula','match','pattern'=>'/[0-9]+$/','message'=>'se requieren solo numeros'),

	 		 array('Nombre','required','message'=>'La cedula es requerida'),
	 		 array('Nombre','length','max'=>50,'tooLong'=>'Maximo 50 caracteres'),

	 		 array('Email','required','message'=>'La cedula es requerida'),
	 		 array('Email','email','message'=>'Correo incorrecto'),


	 		 array('Fecha_Cumpleanos','required','message'=>'Fecha de cumpleaños'),

	 		 array('Estatus','required','message'=>'Ingrese 0 o 1'),
	 		  


           array('Cedula,Nombre,Email,Fecha_Cumpleanos,FotodDir,Estatus','safe', 'on' => "search"),

	 		);
	 }


}

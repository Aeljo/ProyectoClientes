<?php
class ClientesController extends Controller
{
    public function actionIndex()
   {
  
   	$clientes=Clientes::model()->findAll();
   	$this->render("index",array("clientes"=>$clientes));
   }

   public function actionCreate()
   {


     $model=new Clientes();
     if(isset($_POST["Clientes"]))
     {
          # el attribute hace un recorrido por la base de datos trayendo los parametros y valores del campo del modelo 
          $model->attributes=$_POST["Clientes"]; 
          $image=CUploadedFile::getInstance($model,'FotoDir');
          if(empty($image)){
            if($model->save())
              #$this->redirect(array("index"));
            Yii::app()->user->setFlash("success","Pase por aqui");
          }
          else{
            $ruta=$image->getTempName();
             $destino='/xampp/htdocs/Yii//clientes/images/';
                if(move_uploaded_file($ruta, $destino.$image->getName()))
                   { 
                   echo "El archivo ha sido cargado\n";
                    }else{
                   echo "El arcivo no se ha cargado\n";
                   }
                    $model->FotoDir=$image->getName();
              if($model->save())
              {
                Yii::app()->user->setFlash("success","Clientes se  ha guardadp correctamente =).");
                #se redirige al index del mismo controlador, o si queremos a otro controlador o sitio
                $this->redirect(array("index")); #envia un codifgo de salida  indicado que se termino el script y no se ejecuta lo de abajo
              }else{
                 Yii::app()->user->setFlash("erro","No se guardo el usuario");
              }

          }
     
   
     }

     $this->render("create",array('model'=>$model,));
}



    public function actionUpdate($Cedula)
    {
      #Se consulta registro por su llave primaria 
      $model=Clientes::model()->findBypk($Cedula);
      if(isset($_POST["Clientes"]))
      {
        $model->attributes=$_POST["Clientes"];
        if($model->save())
        {
          $this->redirect(array("index"));
        }
      }
      $this->render("update",array("model"=>$model));

    }

    public function actionDelete($Cedula)
    {
        $model=Clientes::model()->deleteBypk($Cedula);
        $this->redirect(array("index"));
    }

    public function actionView($Cedula)
    {
       $model=Clientes::model()->findBypk($Cedula);
        $this->render("view",array('model'=>$model,));
    }

    public function actionEnable($Cedula)
    {
      $model=Clientes::model()->findBypk($Cedula);
      if($model->Estatus==1)
        $model->Estatus=0;
      else
        $model->Estatus=1;
       $model->save();
      $this->redirect(array("index"));
    }

 
}  
<?php 
  require_once "../core/mainModel.php";

  class alumnomodelo extends mainModel{

    protected function nuevo_alumno_modelo($dato){
      $sql = mainModel::conectar()->prepare("INSERT INTO alumno (rut, registro_exitoso) VALUES (:Rut, 'FALSE')");

      $sql->bindParam(":Rut",$dato);

      $sql->execute();
      return $sql;
    }

    protected function actualizar_alumno_modelo($dato){ // alumno actualiza perfil alumno
      $sql= mainModel::conectar()->prepare("UPDATE usuario SET 
      nombre=:Nombre, apellido=:Apellido, telefono=:Telefono WHERE rut=:Rut");

      $sql->bindParam(":Rut",$dato['Rut']);
      $sql->bindParam(":Nombre",$dato['Nombre']);
      $sql->bindParam(":Apellido",$dato['Apellido']);
      $sql->bindParam(":Telefono",$dato['Telefono']);

      $sql->execute();

      return $sql;
    }

    
    protected function actualizar_alumno_admin_modelo($dato){ // admin actualiza  alumno
      $sql= mainModel::conectar()->prepare("UPDATE alumno SET 
      carrera=:Carrera, cargo=:Cargo, cod_equipo=:Cod_equipo WHERE rut=:Rut");

      $sql->bindParam(":Rut",$dato['Rut']);
      $sql->bindParam(":Carrera",$dato['Carrera']);
      $sql->bindParam(":Cargo",$dato['Cargo']);
      $sql->bindParam(":Cod_equipo",$dato['Cod_equipo']);

      $sql->execute();

      return $sql;
    }

  }
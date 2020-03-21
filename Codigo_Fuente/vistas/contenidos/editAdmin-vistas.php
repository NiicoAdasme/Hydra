<?php $rutEd = $_GET['rut']; ?>
<?php
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id="content">
    <div class="outer">
      <div class="inner bg-light lter">
        <!--Begin Datatables-->
        <div class="row">
          <div class="col-lg-12">
            <div class="box dark">
              <header>
                <div class="icons"><i class="fa fa-table"></i></div>
                <h5>Actualizar Administrador</h5>
              </header>
              <div id="collapse2" class="body">
                <?php require_once "../../core/mainModel.php";
                $c = new mainModel();
                $datos = $c->ejecutar_consulta_simple("SELECT * FROM usuario WHERE cod_rol = 'administrador' AND rut = '$rutEd'");
                 foreach($datos as $rows){};
                ?>
                <form class="form-horizontal" action="" method="POST" id="editAdmin">

                  <fieldset>
                    <!--Nombre Profesor Actualizar-->
                    <div class="form-group">
                      <label for="nombre-edit" class="control-label col-lg-2">Nombre</label>

                      <div class="col-lg-4">
                        <input name="nombre-edit" type="text" id="nombre-edit" class="form-control" required value="<?php echo $rows['nombre'] ?>">
                      </div>

                      <!--Apellido Profesor Actualizar-->
                      <label for="apellido-edit" class="control-label col-lg-2">Apellido</label>

                      <div class="col-lg-4">
                        <input name="apellido-edit" type="text" id="apellido-edit" class="form-control" required value="<?php echo $rows['apellido'] ?>">
                      </div>
                    </div>

                    <!--Correo Profesor Actualizar-->
                    <div class="form-group">
                      <label for="correo-edit" class="control-label col-lg-2">Correo</label>

                      <div class="col-lg-4">
                        <input name="correo-edit" type="text" id="correo-edit" class="form-control" required value="<?php echo $rows['correo'] ?>">
                      </div>

                      <!--Telefono Profesor Actualizar-->
                      <label for="telefono-edit" class="control-label col-lg-2">Telefono</label>

                      <div class="col-lg-4">
                        <input name="telefono-edit" type="text" id="telefono-edit" class="form-control" required value="<?php echo $rows['telefono'] ?>">
                      </div>
                    </div>

                    <!--Rol Profesor Actualizar-->
                    <div class="form-group">
                    <?php $datos2 = $c->ejecutar_consulta_simple("SELECT cod_rol FROM rol");
                    ?>
                    <!--Codigo Semestre-->
                    <div class="form-group">

                      <label for="cod-edit" class="control-label col-lg-2">Rol</label>

                      <div class="col-lg-4 "><select data-placeholder="Your Favorite Type of Bear" class="form-control" name="rol-edit" id="rol-edit">
                          <?php foreach ($datos2 as $rows1) { ?>
                            <option name="optionRol" value="<?php echo $rows1['cod_rol'] ?>"> <?php echo $rows1['cod_rol'] ?> </option>
                          <?php } ?>
                        </select>
                      </div>

                    </div>

                      <!--Rut del Profesor-->
                      <div class="col-lg-4">
                        <input disabled name="rut" type="hidden" id="rut" class="form-control" required value="<?php echo $rows['rut'] ?>">
                      </div>
                    </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Guardar" class="btn btn-primary">
              </div>
              </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!--End Datatables-->
    </div>
    <!-- /.inner -->
  </div>
  <!-- /.outer -->
  </div>
  </div>
  <script src="../assets/js/editAdmin.js"></script>
</body>

<?php
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>


</html>
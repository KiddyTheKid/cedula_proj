<?php
include ("conectar.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (!empty($_POST['nom'])) {
    if (!empty($_POST['ape'])) {
      guardar($db);
    }
  }
}


function guardar($db){
  $sql = "INSERT INTO usuarios (cedula, nombre, apellido, sexo) values('1231231', '".$_POST['nom']."', '".$_POST['ape']."', ".$_POST['sexo'].")";
  if (mysqli_query($db,$sql)){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>Exito!</strong> Listo el usuario.
      </div>
      ';
  }else {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>Valió!</strong> Verifica los datos.
      </div>
      ';
  }
}

?>

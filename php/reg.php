<?php
include ("conectar.php");
guardar($db);


function guardar($db){
  $sql = "INSERT INTO usuarios (cedula, nombre, apellido, sexo) values('1231231', 'Pedro', 'Acosta', True)";
  if (mysqli_query($db,$sql)){
    echo "Listo";
  }else {
    echo "Valio mierda";
  }
}

?>

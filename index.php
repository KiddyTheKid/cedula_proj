<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Inicio</title>
    <script>
      $(function(){
        $("#boton").click(function(){
          var nombre = $("#nom").val();
          var apellido = $("#ape").val();
          $.post("php/conectar.php",{nom:nombre, ape:apellido},function(data){
            $("#prueba").html(data);
          });
        });
      });
    </script>
  </head>
  <body class="body titulo">
    <div class="container translayer" style="margin-top: 15%;">
      <h1 class="titulo" style="text-align: center;">Crea tu cédula ficticia</h1>
      <form>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="nom">Nombre:</label>
              <input type="text" placeholder="Nombre" name="nom" id="nom" value="" class="form-control">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="ape">Apellido:</label>
              <input type="text" placeholder="Apellido" name="ape" id="ape" value="" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="">Genero:</label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <select class="custom-select">
              <option selected value="1">Masculino</option>
              <option value="2">Femenino</option>
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <input type="submit" name="boton" id="boton" class="btn btn-primary" value="Enviar">
            </div>
          </div>
        </div>
      </form>
      <div id="prueba"></div>
    </div>
  </body>
</html>

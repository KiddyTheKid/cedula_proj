<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Inicio</title>
    <!-- <script>
    $(function(){
      $("#button").click(function(){
        var nombre = $("#nom").val();
        var apellido = $("#ape").val();
        $.post('php/reg.php',{nom:nombre, ape:apellido}, function(data){
          if (data != ''){
            // $("#nom").value(data);
            $("#prueba").html(data);
            // document.getElementById("nom").value = data;
            // setTimeout(function(){message_status.hide()},1000);
          }
        });
      });
    });
    </script> -->
    <script language="javascript" src="js/jquery-1.9.1.min.js"></script>
    <script language="javascript" src="js/jquery-1.4.2.min.js"></script>
    <script language="javascript">
    $(document).ready(function() {
      $('#form').submit(function() {
        $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function(data) {
            $('#alertas').html(data);
            document.getElementById("nom").value = "";
            document.getElementById("ape").value = "";
          }
        })
        return false;
      });
    });
    </script>
  </head>
  <body class="body titulo">
    <div class="container translayer" style="margin-top: 15%;">
      <div id="alertas"></div>
      <h1 class="titulo" style="text-align: center;">Crea tu cédula ficticia</h1>
      <form id="form" action="php/reg.php" method="POST">
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
          <div class="col">
            <label for="">Correo:</label>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <select class="custom-select" name="sexo" id="sexo">
              <option selected value="1">Masculino</option>
              <option value="0">Femenino</option>
            </select>
          </div>
          <div class="col">
            <div class="form-group">
              <input type="email" name="correo" class="form-control" placeholder="chichico@chichi.co" value="">
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <button type="submit" id="button" class="btn btn-primary" name="button">Aceptar</button>
            </div>
          </div>
        </div>
      </form>
      <div id="prueba"></div>
    </div>
  </body>
</html>

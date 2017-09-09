<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Inicio</title>
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
      </form>
    </div>
  </body>
</html>

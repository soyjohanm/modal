<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario en modal</title>
    <link rel="stylesheet" href="./materialize.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
  <body>
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
    <div id="modal1" class="modal" style="border-radius: 15px; overflow-x: hidden;">
      <div class="modal-content">
        <center>
          <h4>Formulario<span class="right modal-close" title="Cerrar">&times;</span></h4>
        </center>
        <form method="post" id="formulario" name="formulario" role="form">
          <fieldset>
            <legend>Nombre</legend>
            <input type="text" name="nombre" placeholder="Ingrese nombre del artículo" required>
          </fieldset>
          <fieldset>
            <legend>Descripción</legend>
            <input type="text" name="descripcion" placeholder="Ingrese la descripción del artículo" required>
          </fieldset>
          <fieldset>
            <legend>Cantidad</legend>
            <input type="number" name="cantidad" placeholder="Ingrese la cantidad de artículos" required>
          </fieldset><br>
          <div class="row">
            <button type="submit" class="col s12 btn btn-flat">Añadir</button>
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
      });
      $('#formulario').submit(function(event) {
        var parametros = $(this).serialize();
        $.ajax({
          type: "POST",
          url: "guardar.php",
          data: parametros,
          success: function(data) {
            M.toast({html:data});
            document.getElementById("formulario").reset();
          }
        });
        event.preventDefault();
      });
    </script>
  </body>
</html>

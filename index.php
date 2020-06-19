<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario en modal</title>
    <style media="screen">
      html {
        line-height: 1.15;
        /* 1 */
        -ms-text-size-adjust: 100%;
        /* 2 */
        -webkit-text-size-adjust: 100%;
        /* 2 */
      }
      body {
        margin: 0;
      }
      a {
        background-color: transparent;
        /* 1 */
        -webkit-text-decoration-skip: objects;
      }
      button, input, optgroup, select, textarea {
        font-family: sans-serif;
        /* 1 */
        font-size: 100%;
        /* 1 */
        line-height: 1.15;
        /* 1 */
        margin: 0;
        /* 2 */
      }
      button, input {
        /* 1 */
        overflow: visible;
      }
      button, select {
        /* 1 */
        text-transform: none;
      }
      button, html [type="button"], [type="reset"], [type="submit"] {
        -webkit-appearance: button;
        /* 2 */
      }
      fieldset {
        padding: 0.35em 0.75em 0.625em;
      }
      legend {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        /* 1 */
        color: inherit;
        /* 2 */
        display: table;
        /* 1 */
        max-width: 100%;
        /* 1 */
        padding: 0;
        /* 3 */
        white-space: normal;
        /* 1 */
      }
      [type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button {
        height: auto;
      }
      html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }
      *, *:before, *:after {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
      }
      button, input, optgroup, select, textarea {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      }
      a {
        color: #039be5;
        text-decoration: none;
        -webkit-tap-highlight-color: transparent;
      }
      .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
      }

      .z-depth-1-half, .btn:hover, .btn-large:hover, .btn-small:hover, .btn-floating:hover {
        -webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
        box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
      }
      .z-depth-5, .modal {
        -webkit-box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);
        box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);
      }
      .right {
        float: right !important;
      }
      .row {
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
      }
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .row .col {
        float: left;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0 0.75rem;
        min-height: 1px;
      }
      .row .col.s12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto;
      }
      a {
        text-decoration: none;
      }
      html {
        line-height: 1.5;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        font-weight: normal;
        color: rgba(0, 0, 0, 0.87);
      }
      @media only screen and (min-width: 0) {
        html {
            font-size: 14px;
        }
      }
      h1, h2, h3, h4, h5, h6 {
        font-weight: 400;
        line-height: 1.3;
      }
      h4 {
        font-size: 2.28rem;
        line-height: 110%;
        margin: 1.52rem 0 0.912rem 0;
      }
      .btn, .btn-large, .btn-small, .btn-flat {
        border: none;
        border-radius: 2px;
        display: inline-block;
        height: 36px;
        line-height: 36px;
        padding: 0 16px;
        text-transform: uppercase;
        vertical-align: middle;
        -webkit-tap-highlight-color: transparent;
      }
      .btn, .btn-large, .btn-small, .btn-floating, .btn-large, .btn-small, .btn-flat {
        font-size: 14px;
        outline: 0;
      }
      .btn:focus, .btn-large:focus, .btn-small:focus, .btn-floating:focus {
        background-color: #1d7d74;
      }
      .btn, .btn-large, .btn-small {
        text-decoration: none;
        color: #fff;
        background-color: purple;
        text-align: center;
        letter-spacing: .5px;
        -webkit-transition: background-color .2s ease-out;
        transition: background-color .2s ease-out;
        cursor: pointer;
      }
      .btn:hover, .btn-large:hover, .btn-small:hover {
        background-color: purple;
        color: white;
      }
      .btn-flat {
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: transparent;
        color: #343434;
        cursor: pointer;
        -webkit-transition: background-color .2s;
        transition: background-color .2s;
      }
      .btn-flat:focus, .btn-flat:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
      }
      .waves-effect {
        position: relative;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        vertical-align: middle;
        z-index: 1;
        -webkit-transition: .3s ease-out;
        transition: .3s ease-out;
      }
      .waves-effect .waves-ripple {
        position: absolute;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        margin-top: -10px;
        margin-left: -10px;
        opacity: 0;
        background: rgba(0, 0, 0, 0.2);
        -webkit-transition: all 0.7s ease-out;
        transition: all 0.7s ease-out;
        -webkit-transition-property: opacity, -webkit-transform;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
        -webkit-transform: scale(0);
        transform: scale(0);
        pointer-events: none;
      }
      .waves-effect.waves-light .waves-ripple {
        background-color: rgba(255, 255, 255, 0.45);
      }
      .waves-effect .waves-ripple {
        z-index: -1;
      }
      .modal {
        display: none;
        position: fixed;
        left: 0;
        right: 0;
        background-color: #fafafa;
        padding: 0;
        max-height: 70%;
        width: 55%;
        margin: auto;
        overflow-y: auto;
        border-radius: 2px;
        will-change: top, opacity;
      }
      .modal:focus {
        outline: none;
      }
      @media only screen and (max-width: 992px) {
        .modal {
            width: 80%;
        }
      }
      .modal h1, .modal h2, .modal h3, .modal h4 {
        margin-top: 0;
      }
      .modal .modal-content {
        padding: 24px;
      }
      .modal .modal-close {
        cursor: pointer;
      }
      .modal-overlay {
        position: fixed;
        z-index: 999;
        top: -25%;
        left: 0;
        bottom: 0;
        right: 0;
        height: 125%;
        width: 100%;
        background: #000;
        display: none;
        will-change: opacity;
      }
      ::-webkit-input-placeholder {
        color: #d1d1d1;
      }
      ::placeholder {
        color: #d1d1d1;
      }
      input:not([type]), input[type=text]:not(.browser-default),
      input[type=password]:not(.browser-default), input[type=email]:not(.browser-default),
      input[type=url]:not(.browser-default), input[type=time]:not(.browser-default),
      input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default),
      input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #9e9e9e;
        border-radius: 0;
        outline: none;
        height: 3rem;
        width: 100%;
        font-size: 16px;
        margin: 0 0 8px 0;
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-transition: border .3s, -webkit-box-shadow .3s;
        transition: border .3s, -webkit-box-shadow .3s;
        transition: box-shadow .3s, border .3s;
        transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
      }
      input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]),
      input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]),
      input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]),
      input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]),
      input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]),
      input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]),
      textarea.materialize-textarea:focus:not([readonly]) {
        border-bottom: 1px solid purple;
        -webkit-box-shadow: 0 1px 0 0 purple;
        box-shadow: 0 1px 0 0 purple;
      }
    </style>
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

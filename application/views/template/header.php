
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" />

    <script src="<?php echo base_url(); ?>public/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-1.11.1.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>public/js/validacion.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>cam/jquery.webcam.js"></script>
    <script>
    jQuery(document).ready(function($) {
      $(document).ready( function () {
        $('#table_id').DataTable();
      } );

      $( ".datepicker" ).datepicker();
      
      $(function() {
        $( document ).tooltip();
      });

      $('#table_id').DataTable({
          "language": {
              "sProcessing":    "Procesando...",
              "sLengthMenu":    "Mostrar _MENU_ registros",
              "sZeroRecords":   "No se encontraron resultados",
              "sEmptyTable":    "Ningún dato disponible en esta tabla",
              "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":   "",
              "sSearch":        "Buscar:",
              "sUrl":           "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":    "Último",
                  "sNext":    "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
          }
      });
    });

</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  
  $("#webcam").webcam({
    width: 240,
    height: 240,
    mode: "callback",
    swffile: "<?php echo base_url(); ?>cam/jscam_canvas_only.swf", // canvas only doesn't implement a jpeg encoder, so the file is much smaller

    onTick: function(remain) {

        if (0 == remain) {
            $("#status").text("Sacando foto!");
        } else {
            $("#status").text(remain + " Segundos...");
        }
    },

    onSave: function(data) {      
      var col = data.split(";");
      var img = image;

      for(var i = 0; i < 320; i++) {
          var tmp = parseInt(col[i]);
          img.data[pos + 0] = (tmp >> 16) & 0xff;
          img.data[pos + 1] = (tmp >> 8) & 0xff;
          img.data[pos + 2] = tmp & 0xff;
          img.data[pos + 3] = 0xff;
          pos+= 4;
      }

      if (pos >= 4 * 320 * 240) {
          ctx.putImageData(img, 0, 0);
          pos = 0;
      }
    },

    onCapture: function () {
      $("#flash").css("display", "block");
      $("#flash").fadeOut("fast", function () {
        $("#flash").css("opacity", 1);
      });

      webcam.save();

      // Show a flash for example
    },

    debug: function (type, string) {
        // Write debug information to console.log() or a div, ...
    },

    onLoad: function () {
    // Page load
        var cams = webcam.getCameraList();
        for(var i in cams) {
          $("#cams").append("<li>" + cams[i] + "</li>");
        }
                    $("#canvas").hide();
    }
});
});
</script>
<style>
.ui-tooltip, .arrow:after {
background: black;
border: 2px solid white;
}
.ui-tooltip {
padding: 10px 20px;
color: white;
border-radius: 20px;
font: bold 14px "Helvetica Neue", Sans-Serif;
text-transform: uppercase;
box-shadow: 0 0 7px black;
}
.arrow {
width: 70px;
height: 16px;
overflow: hidden;
position: absolute;
left: 50%;
margin-left: -35px;
bottom: -16px;
}
.arrow.top {
top: -16px;
bottom: auto;
}
.arrow.left {
left: 20%;
}
.arrow:after {
content: "";
position: absolute;
left: 20px;
top: -20px;
width: 25px;
height: 25px;
box-shadow: 6px 5px 9px -9px black;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg);
}
.arrow.top:after {
bottom: -20px;
top: auto;
}
</style>
  </head>
<style>
.error{
  border: 1px solid red;
  background-color: #FFC4C4;
  color:red;
  font-size: 10px;
}
body > .row{
  background-color: #F2F2F2;
}
.h1-head{
  font-size: 22px;
}
.h3-head{
  font-size: 18px;  
}
.header{
  text-align: center;
  /*border: 2px solid #20BF42;*/
  background-color: white;
  height: 130px;
}

.botones-lista{
  border: 2px solid white;
  display: inline-block;
  padding: 1px;
  margin-right: 5px;
  border-radius: 5px;
}
.botones-lista:hover{
  border: 2px solid #007095;
  display: inline-block;
  padding: 1px;
  background-color: grey;
}
</style>
  <body style="background-color: grey">

    <div class="row" header>
      <div class="large-2 columns header" >
        <img src="<?php echo base_url(); ?>public/img/escudo.gif" alt="" style="float:left" width="130">
      </div>
      <div class="large-8 columns header" >
        <h1 class="h1-head" style="color:#F23535">ASOCIACION DE COMERCIANTES MINORIASTAS</h1>
        <h1 class="h1-head" style="color:#F2F235">"FINAL MERCADO LA PAZ"</h1>
        <h3 class="h3-head" style="color:#20BF42">Cochabamba - Bolivia</h3>
      </div>
      <div class="large-2 columns header" >
        <img src="<?php echo base_url(); ?>public/img/escudo-bolivia.gif" alt="" style="float:right" width="150">
      </div>
    </div>
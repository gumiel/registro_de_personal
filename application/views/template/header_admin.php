<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <script src="<?php echo base_url(); ?>public/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-1.11.1.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.dataTables.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $(document).ready( function () {
          $('#table_id').DataTable();
        } );
      });
    </script>
<style>
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
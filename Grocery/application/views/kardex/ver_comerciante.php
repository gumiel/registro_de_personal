<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
  @page { 
    size: auto;/* es el valor por defecto */ 
    margin: 15% ; 
    padding: 0px;
    margin: 0px;
    margin-top: 0.2cm;


    @top { content: "Prince User Guide" }
    @bottom-right { content: counter(page) }
  }
  .content1 {
    width: 800px;
    height: 600px;
    border: 1px solid white;
    font-size: 12px;
    font-family: sans-serif;
  }
  .content1-borde {
    border: 2px solid black;
    border-radius: 10px;
    height: 570px;
    margin-left: 10px;
    margin-top: 13px;
    width: 765px;
  }
  .titulo1{
    float: left;
    margin-left: 0;
    margin-top: 21px;
    text-align: center;
    width: 330px;
  }
  .titulo2{
    float: right;
    font-size: 15px;
    margin-top: 26px;
    width: 320px;
  }
  .datos{
    float: left;
    font-size: 14px;
    line-height: 1.4;
    margin-left: 35px;
    margin-top: 24px;
  }
  .foto{
    border: 2px solid black;
    border-radius: 8px;
    float: right;
    height: 170px;
    margin-right: 35px;
    margin-top: 16px;
    padding: 3px;
    width: 130px;
  }
  .fotoDentro{
    border: 1px solid black;
    border-radius: 8px;
    width: 100%;
    height: 100%;
  }
  
  .huella{
    float: left;
    margin-left: 33px;
    margin-top: 69px;
    text-align: center;
    width: 300px;
  }
  
  .firmaAfiliado{
    border-top: 1px solid black;
    margin-left: 35px;
    width: 163px;
  }



  .firmas{
    float: right;
    margin-top: 27px;
    width: 430px;
  }
  .firmasContent{
    margin-top: 75px;
  }
  .firmasContent > div{
    border-top: 1px solid;
    float: left;
    text-align: center;
    width: 129px;
  }
  .formDato{
    border-bottom: 2px dotted;
    padding-left: 6px;
    padding-right: 6px;
  }
  @media print {
    .oculto-imprimir {display:none}
  }
  </style>
</head>
<body>
  
  <input type="button" class="oculto-imprimir" value="Imprimir" onClick="window.print()" style="margin-top:15px;font-size: 20px">

  <div class="content1">
    <div class="content1-borde">
      
      <div class="header">
        <div class="titulo1">
          <strong>ASOCIACION DE COMERCIANTES MINORISTAS<BR>
          FINAL MERCADO LA PAZ</strong>
          <div>
            Calles: J:F Velarde, Quillacollo, Tapacari y Cliza<br>  
            Personeria Júridica No. 086/97    Teléfono: 4559940
          </div>
        </div>
        <div class="titulo2">
          <strong>KARDEX COMPUTARIZADO <?php echo date('Y') ?></strong>
          <div>
            CODIGO AFILIADO: <span class="codigo_afiliado_kardex formDato"><?php echo $codigo_afiliado_kardex; ?></span> <br>
            CODIGO LICENCIA: <span class="codigo_licencia_kardex formDato"><?php echo $codigo_licencia_kardex; ?></span>
          </div>
        </div>
      </div>
      
      <div style="clear: both"></div>
      
      <div class="medium">
          <div class="datos">
            APELLIDOS Y NOMBRES DEL AFILIADO:<span class="nombres_kardex formDato"><?php echo $nombres_kardex; ?></span><br>
            LUGAR Y FECHA DE NACIMIENTO:<span class="lugar_nacimiento_kardex formDato"><?php echo $lugar_nacimiento_kardex; ?> <?php echo $nacimiento_kardex; ?></span><br>
            No. DE CEDULA DE IDENTIDAD: <span class="ci_kardex formDato"><?php echo $ci_kardex; ?></span><br>
            ESTADO CIVIL: <span class="estado_civil_kardex formDato"><?php echo $estado_civil_kardex; ?></span> PROFESION: <span class="profesion_kardex formDato"><?php echo $profesion_kardex; ?></span> <br>
            CONYUGUE: <span class="conyugue_kardex formDato"><?php echo $conyugue_kardex; ?></span> Nro. DE HIJOS: <span class="hijos_kardex formDato"><?php echo $hijos_kardex; ?></span> <br>
            PROCEDENCIA: <span class="procedencia_kardex fprmDato"><?php echo $procedencia_kardex; ?></span> ANTIGUEDAD: <span class="antiguedad_kardex formDato"><?php echo $antiguedad_kardex; ?></span> <br>
            DOMICILIO ACTUAL: <span class="domicilio_kardex formDato"><?php echo $domicilio_kardex; ?></span> <br>
            UBICACION DEL PUESTO DE VENTA: <span class="ubicacion_puesto_kardex formDato"><?php echo $ubicacion_puesto_kardex; ?></span> <br>
            TELEFONOS: <span class="telefonos_kardex formDato"><?php echo $telefonos_kardex; ?></span> COMERCIALIZA: <span class="comercializa_kardex formDato"><?php echo $comercializa_kardex; ?></span> <br>
            CASETA No: <span class="caseta_numero_kardex formDato"><?php echo $caseta_numero_kardex; ?></span> 
            MESA EN: <span class="mesa_en_kardex formDato"><?php echo $mesa_en_kardex; ?></span> <br>
          </div>
          <div class="foto">
            <div class="fotoDentro"></div>
          </div>
      </div>

      <div style="clear: both"></div>

      <div class="footer">
        



        <div class="huella">
          <div class="firmaAfiliado">Firma del afiliado</div>
          <table border=1 style="margin-top: 17px;" rules="all">
            <tr>
              <td style="width: 110px;">IZQUIERDO</td>
              <td style="width: 110px;">DERECHO</td>
            </tr>
            <tr>
              <td style="height: 130px;"> </td>
              <td style="height: 130px;"> </td>
            </tr>
          </table>
        </div>



        <div class="firmas">
          <div style="margin-left:15px;">Cochabamba,.......... de ........................................... <?php echo date('Y'); ?></div>
          <div class="firmasContent">
            <div style="margin-left: 19px;margin-right: 109px;">
              Presidente
            </div>
            <div>
              Strio. de Actas
            </div>
          </div>
          <div style="clear:both"></div>
          <div class="firmasContent">
            <div style="margin-left: 19px;margin-right: 109px;">
              Vice Presidente
            </div>
            <div>
              Strio. de Hacienda
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>







<style type="text/css">
  
  .tarjeta-izq{
    border: 1px solid black;
    border-radius: 15px;
    width: 360px;
    height: 250px;
    font-size: 14px;
    padding: 5px 15px 5px 15px;
    display: inline-block;
    float: left;
  }
  .tarjeta-izq .firma1{
    border-top: 1px solid black;
    display: inline-block;
    float: left;
    margin-right: 29px;
    padding-left: 10px;
    padding-right: 10px;
  }
  .tarjeta-izq-borde h3{
    margin-top: 5px;
    margin-bottom: 7px;
  }
  .tarjeta-izq h2{
    font-size: 14px;
    text-align: center;
  }
  .firma1-contenedor{
    margin-top: 45px;
  }
  .frente-bloque{
    display: inline-block;
    float: left;
    margin-top: 6px;
  }

</style>



  <div class="tarjeta-izq">
    <h2>ASOCIACION DE COMERCIANTES MINORISTAS<BR>
    FINAL MERCADO LA PAZ</h2>
    <div>
      Per. Jurídica No.: 086/97
    </div>
    <div>
      CARNET DE AFILIACION DEL ASOCIADO
    </div>
    <div>
      CODIGO No.: <span class="codigo_afiliado_kardex formDato"><?php echo $codigo_afiliado_kardex; ?></span>
    </div>
    <div class="frente-imagen">
      <div class="frente-bloque">
        <div class="foto-frente" style="border:2px solid black;width:100px;height:100px;text-align: center">
          Fotografia
        </div>
      </div>
      <div class="frente-bloque" style="width:150px">
        <div>No. PUESTO : <span class="caseta_numero_kardex formDato"><?php echo $caseta_numero_kardex; ?></span>  </div>
        <div>Cbba.:........... de ............</div>
        Válida hasta el:.......... de ............... del <?php echo date('Y'); ?>
      </div>
      <div class="frente-bloque" style="border:2px solid black;width:100px;height:125px;text-align: center">
        Pulgar Derecho
      </div>
    </div>
  </div>

  <div class="tarjeta-izq">
    <div class="tarjeta-izq-borde">
      <h3>DATOS PERSONALES DEL AFILIADO</h3>
      <div>
        Apellidos y Nombres <span class="nombres_kardex formDato"><?php echo $nombres_kardex; ?></span>
      </div>      
      <div>
        Nacido el <span class="lugar_nacimiento_kardex formDato"><?php echo $nacimiento_kardex; ?></span>
      </div>
      <div>
        En <span class="lugar_nacimiento_kardex formDato"><?php echo $lugar_nacimiento_kardex; ?></span> Edad ...............
      </div>
      <div>
        Estado Civil<span class="estado_civil_kardex formDato"><?php echo $estado_civil_kardex; ?></span> Profesión.........
      </div>
      <div>
        Conyuge <span class="conyugue_kardex formDato"><?php echo $conyugue_kardex; ?></span>
      </div>
      <div>
        Procedencia .................C.I. No <span class="ci_kardex formDato"><?php echo $ci_kardex; ?></span>
      </div>
      <div>
        Domicilio <span class="domicilio_kardex formDato"><?php echo $domicilio_kardex; ?></span>
      </div>
      <div class="firma1-contenedor">
        <div class="firma1">
          Presidente
        </div>
        <div class="firma1">
          Vice Presidente
        </div>
        <div class="firma1">
          Strio. Actas
        </div>
      </div>
    </div>
  </div>

  <div style="clear:both"></div>
  
  <input type="button" class="oculto-imprimir" value="Imprimir" onClick="window.print()" style="margin-top:15px;font-size: 20px">

</body>
</html>
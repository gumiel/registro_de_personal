<?php $this->load->view('template/header'); ?>

    <?php $this->load->view('complementos/menu_header'); ?>

    <div class="row">
      <div class="large-9 medium-9 columns">

        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">

                <?php if ($this->session->flashdata('mensaje')): ?>
                  <div data-alert class="alert-box success radius">
                    <?php echo $this->session->flashdata('mensaje'); ?>
                    <a href="#" class="close">&times;</a>
                  </div>
                <?php endif ?>


                <h4>Lista de comerciantes</h4>
                  
                  <a href="<?php echo site_url().'/comerciantes/crearComerciante'; ?>" id="link-crear" title="Boton Para crear un nuevo Comerciante">
                    <img src="<?php echo base_url(); ?>/public/img/create.png" width="40" alt="">
                    Crear Comerciante
                  </a>                                    
                 
                  <div style="float:right">
                       <a href="#" data-reveal-id="firstModal" class="radius button small">Exportar a Excel</a>
                  </div>
                 <br> 
                 <br> 
              </div>
              <table id="table_id">
                <thead>
                  
                <tr>
                  <td>Nº</td>
                  <td>Codigo</td>
                  <td>Nombre y Apellido</td>
                  <td>Carnet</td>
                  <!-- <td>Caseta</td> -->
                  <td style="width:125px">Opciones</td>
                </tr>
                </thead>
                <tbody>
                  
                <?php for ($i=0; $i <count($allComer) ; $i++) { ?>
                <tr>
                  <td><?php echo $i+1 ?></td>
                  <td><?php echo $allComer[$i]['codigo_com']; ?></td>
                  <td><?php echo $allComer[$i]['nombres_com'].' '.$allComer[$i]['apellidos_com'] ?></td>
                  <td><?php echo $allComer[$i]['carnet_com']; ?></td>
                  <!-- <td><?php echo $allComer[$i]['numero_caseta_com']; ?></td> -->
                  <td>
                    <a href="<?php echo site_url().'/comerciantes/verComerciante/'.$allComer[$i]['id_com']; ?>" title="Boton para ver los datos del comerciante" class="botones-lista">
                      <img src="<?php echo base_url(); ?>/public/img/view3.png" width="25" alt="">
                    </a>

                    <a href="<?php echo site_url().'/comerciantes/editarComerciante/'.$allComer[$i]['id_com']; ?>"  title="Boton para Editar los datos del comerciante" class="botones-lista">
                      <img src="<?php echo base_url(); ?>/public/img/edit.png" width="25" alt="">                      
                    </a>
                    
                    <a href="javascript:
                              if (confirm('Desea eliminar al comerciante?'))
                              {
                                parent.location='<?php echo site_url('comerciantes/eliminarComerciante/'.$allComer[$i]['id_com']); ?>';
                              };
                              "  title="Boton para Eliminar los datos del comerciante" class="botones-lista">
                    <img src="<?php echo base_url(); ?>/public/img/delete.png" width="25" alt="">
                      <!-- Eliminar -->
                    </a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>




      </div>

      <div class="large-3 medium-3 columns">
			  <hr>
        <h5>Anuncios</h5>
				<div class="panel">
        	<h5>So many components, girl!</h5>
        	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>
    







    <!-- Triggers the modals --> 
    <!-- <a href="#" data-reveal-id="firstModal" class="radius button">Modal in a modal&hellip;</a>  -->
    <!-- Reveal Modals begin --> 
    <div id="firstModal" class="reveal-modal small" data-reveal> 
      <?php echo form_open('comerciantes/exportarExcel', ''); ?>
      <h3>Que datos quisiera exportar a excel?.</h3> 
      
      <div>        
        <div class="row">
          <div class="large-7 columns text-right">
            
          </div>
          <div class="large-5 columns text-left">
            <b>Ordenamiento</b>
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Nombres y Apellidos:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="nombres_com" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="nombres_com" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Numero de Caseta:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="numero_caseta_com" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="numero_caseta_com" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Codigos:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="codigo_com" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="codigo_com" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Carnet:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="carnet_com" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="carnet_com" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Direccion:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="direccion_com" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="direccion_com" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Rubro:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="id_rubro" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="id_rubro" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns text-right">
            <label for="">Observacion:</label>
          </div>
          <div class="large-1 columns text-left">
            <input type="checkbox" checked="checked" name="observaciones_com" value="si">
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" value="observaciones_com" id="orden">
          </div>
        </div>
        <div class="row">
          <div class="large-7 columns text-right">            
          </div>
          <div class="large-5 columns text-left">
            <input type="radio" name="orden" id="orden" value="" checked="checked"> Sin orden
          </div>
        </div>
        <div class="row">
          <div class="large-12 text-center">
            <input type="submit" name="btnExportarExcel" class="small button" value="Exportar a Excel">
          </div>
        </div>
      </div>

      <a class="close-reveal-modal">&#215;</a> 
      <?php echo form_close(); ?>
    </div> 
    <!-- Reveal Modals end -->










    <?php $this->load->view('template/footer'); ?>
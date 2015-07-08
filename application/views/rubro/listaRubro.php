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
                <h4>Lista de Rubro</h4>
                  <a href="<?php echo site_url().'/rubro/crearRubro'; ?>" id="link-crear" title="Boton Para crear un nuevo Comerciante">
                    <img src="<?php echo base_url(); ?>/public/img/create.png" width="40" alt="">
                    Crear Rubro
                  </a>                                    
                 <br> 
                 <br> 
              </div>
              <table id="table_id">
                <thead>
                  <tr>
                    <td>Codigo</td>
                    <td>Nombre</td>
                    <!-- <td>Caseta</td> -->
                    <td style="width:125px">Opciones</td>
                  </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i <count($allRubro) ; $i++) { ?>
                <tr>
                  <td><?php echo $allRubro[$i]['id_rubro']; ?></td>
                  <td><?php echo $allRubro[$i]['nombre_rubro']; ?></td>                
                  <td>
                    <a href="<?php echo site_url().'/rubro/verRubro/'.$allRubro[$i]['id_rubro']; ?>" title="Boton para ver los datos del Rubro" class="botones-lista">
                      <img src="<?php echo base_url(); ?>/public/img/view3.png" width="25" alt="">
                    </a>

                    <a href="<?php echo site_url().'/rubro/editarRubro/'.$allRubro[$i]['id_rubro']; ?>"  title="Boton para Editar los datos del Rubro" class="botones-lista">
                      <img src="<?php echo base_url(); ?>/public/img/edit.png" width="25" alt="">                      
                    </a>
                    
                    <a href="javascript:
                              if (confirm('Desea eliminar el Rubro?'))
                              {
                                parent.location='<?php echo site_url('rubro/eliminarRubro/'.$allRubro[$i]['id_rubro']); ?>';
                              };
                              "  title="Boton para Eliminar los datos del Rubro" class="botones-lista">
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
    <?php $this->load->view('template/footer'); ?>
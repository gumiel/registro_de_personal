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


                <h4>Lista de Usuarios</h4>
                  
                  <a href="<?php echo site_url().'/administracion/crearUsuario'; ?>" id="link-crear" title="Boton Para crear un nuevo Comerciante">
                    <img src="<?php echo base_url(); ?>/public/img/create.png" width="40" alt="">
                    Crear Usuario
                  </a>                                    

                 <br> 
                 <br> 
              </div>
              <table id="table_id">
                <thead>
                  
                <tr>
                  <td>Nº</td>
                  <td>Login</td>
                  <td>Email</td>
                  <td>Tipo</td>
                  <!-- <td>Caseta</td> -->
                  <td style="width:125px">Opciones</td>
                </tr>
                </thead>
                <tbody>
                  
                <?php for ($i=0; $i <count($allUser) ; $i++) { ?>
                <tr>
                  <td><?php echo $i+1 ?></td>
                  <td><?php echo $allUser[$i]['login_usu']; ?></td>
                  <td><?php echo $allUser[$i]['email_usu']; ?></td>
                  <td><?php echo ($allUser[$i]['tipo_usu'] == 1) ? 'Admin' : 'Normal' ; ?></td>                  
                  <td>
                    <a href="<?php echo site_url().'/administracion/verUsuario/'.$allUser[$i]['id_usu']; ?>" title="Boton para ver los datos del usuario" class="botones-lista">
                      <img src="<?php echo base_url(); ?>/public/img/view3.png" width="25" alt="">
                    </a>

                    <a href="<?php echo site_url().'/administracion/editarUsuario/'.$allUser[$i]['id_usu']; ?>"  title="Boton para Editar los datos del comerciante" class="botones-lista">
                      <img src="<?php echo base_url(); ?>/public/img/edit.png" width="25" alt="">                      
                    </a>
                    
                    <a href="javascript:
                              if (confirm('Desea eliminar al usuario?'))
                              {
                                parent.location='<?php echo site_url('administracion/eliminarUsuario/'.$allUser[$i]['id_usu']); ?>';
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
    







    










    <?php $this->load->view('template/footer'); ?>
<?php $this->load->view('template/header'); ?>

    <?php $this->load->view('complementos/menu_header'); ?>

    <div class="row">
      <div class="large-9 medium-9 columns">

        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <i class="fa fa-arrow-circle-left"></i> <?php echo anchor('administracion/listaUsuarios', 'Volver a la lista', 'id="lista-comerciantes"'); ?>
                <h4 style="text-decoration: underline;"><i class="fa fa-file-text-o"></i> Editar nuevo Usuario</h4>
 
              </div>
              <?php echo form_open('administracion/procesarEditarUsuario/'.$id_usu,'id="formNuevoAdmin" name="formNuevoAdmin"'); ?>

                <div class="row">
                  <div class="small-12 large-8">
                    <?php if(validation_errors()){ ?>
                      <div class="row">
                        <div class="columns large-12">
                          <div class="error-general" style="">
                            <?php echo validation_errors(); ?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>

                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Email:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="email_usu" value="<?php echo set_value('email_usu', $email_usu); ?>" type="text" id="email_usu" placeholder="Ingrese su Email">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Cuenta:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="login_usu" value="<?php echo set_value('login_usu', $login_usu); ?>" type="text" id="login_usu" placeholder="Ingrese el nombre de su Cuenta">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Contraseña:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="pass_usu" value="<?php echo set_value('pass_usu', $pass_usu); ?>" type="text" id="pass_usu" placeholder="Ingrese su Contraseña">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Tipo Usuario:</label>
                      </div>
                      <div class="small-8 columns">
                        <select name="tipo_usu" id="tipo_usu">
                          <option value="1" <?php echo ($tipo_usu == 1) ? 'selected="selected"' : '' ; ?>>Normal</option>
                          <option value="2" <?php echo ($tipo_usu == 2) ? 'selected="selected"' : '' ; ?>>Administrador</option>                          
                        </select>
                      </div>
                    </div>
                    

                    <div class="row">
                      <div class="small-4 columns">
                      </div>
                      <div class="small-8 columns">
                        <input type="submit" class="small round button" value="Crear Usuario">
                      </div>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>




      </div>

      <div class="large-3 medium-3 columns">
        <hr>
			  <h4>Anuncios</h4>

				<div class="panel">
        	<h5>So many components, girl!</h5>
        	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>

    <?php $this->load->view('template/footer'); ?>
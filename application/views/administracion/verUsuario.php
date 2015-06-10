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
                <h4 style="text-decoration: underline;"><i class="fa fa-eye"></i> Ver usuario</h4>
              </div>
                <div class="row">
                  <div class="small-8">
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Email:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $email_usu; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Cuenta:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $login_usu; ?>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Contraseña:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $pass_usu; ?>
                      </div>
                    </div>
                    
                  </div>
                </div>

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
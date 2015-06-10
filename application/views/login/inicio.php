<?php $this->load->view('template/header'); ?>
  <div class="row">
    <div class="large-9 columns">
      <h5>Ingrese sus datos de cuenta</h5>
      <div class="small-12 medium-6 medium-centered large-centered columns callout panel">
        <?php echo form_open('login/procesar', ''); ?>
        <div class="errores-login">
          <?php echo validation_errors(); ?>
        </div>            
          <div class="row">
            <div class="large-4 medium-12 small-12 columns">
              <label for="right-label" class="right inline"><b>Cuenta:</b></label>
            </div>
            <div class="large-8 medium-12 small-12 columns">
              <input type="text" name="usuario">
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-12 small-12 columns">
              <label for="right-label" class="right inline"><b>Contraseña:</b></label>
            </div>
            <div class="large-8 medium-12 small-12 columns">
              <input type="password" name="password">
            </div>
          </div>
          <div class="row">
            <div class="large-6 large-centered columns">
              <label for="right-label" class="right inline">
                <input class="round button" type="submit" value="Ingresar" >
              </label>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
    <div class="large-3 columns panel">
      <h5>AYUDA</h5>
      <p>Si no puede ingresar a su cuenta contactece con el administrador del sistema info.devbolivia@gmail.com</p>
    </div>
  </div>
  <div class="row">
    <div class="large-12 medium-4 columns ">
      <div><hr></div>
    </div>
  </div>
<?php $this->load->view('template/footer'); ?>
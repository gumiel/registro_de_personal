<?php $this->load->view('template/header'); ?>
    <?php $this->load->view('complementos/menu_header'); ?>
    <div class="row">
      <div class="large-9 medium-9 columns">
        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <i class="fa fa-arrow-circle-left"></i> <?php echo anchor('comerciantes/listaComerciantes', 'Volver a la lista', 'id="lista-comerciantes"'); ?>
                <h4 style="text-decoration: underline;"><i class="fa fa-edit"></i> Editar comerciante</h4>
              </div>
              <?php echo form_open('comerciantes/procesarEditarComerciante/'.$id,'id="formNuevo" name="formNuevo"'); ?>
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
                        <label for="right-label" class="right">Numero de caseta:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="ncaseta" style="font-weight: bold" value="<?php echo set_value('ncaseta', $numero); ?>" type="text" id="ncaseta" placeholder="Ingrese el numero de caseta">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Nombres y Apellidos:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="nombres" style="font-weight: bold" value="<?php echo set_value('nombres', $nombres); ?>" type="text" id="nombres" placeholder="Ingrese sus nombre">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Codigo:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="codigo" style="font-weight: bold" value="<?php echo set_value('codigo', $codigo); ?>" type="text" id="codigo" placeholder="Ingrese su codigo de afiliado">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Carnet:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="carnet" style="font-weight: bold" value="<?php echo set_value('carnet', $carnet); ?>" type="text" id="carnet" placeholder="Ingrese su carnet">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Direccion:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="direccion" style="font-weight: bold" value="<?php echo set_value('direccion', $direccion); ?>" type="text" id="direccion" placeholder="Ingrese la direccion">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Rubro:</label>
                      </div>
                      <div class="small-8 columns">
                        <select name="rubro" id="rubro">
                          <option value="">Seleccion un rubro</option>
                          <option value="1">rubro 1</option>
                          <option value="2">rubro 2</option>
                          <option value="3">rubro 3</option>
                          <option value="4">rubro 4</option>
                          <option value="5">rubro 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Observacion:</label>
                      </div>
                      <div class="small-8 columns">
                        <textarea name="observacion" id="observacion"><?php echo set_value('observacion', $observaciones); ?></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 large-8 columns">
                      </div>
                      <div class="small-8 large-8 columns">
                        <input type="submit" class="small round button" value="Editar comerciante">
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
        <hr />
			  <h5>Anuncios</h5>
				<div class="panel">
        	<h5>So many components, girl!</h5>
        	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/footer'); ?>
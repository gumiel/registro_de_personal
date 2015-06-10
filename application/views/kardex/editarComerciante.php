<?php $this->load->view('template/header'); ?>
    <?php $this->load->view('complementos/menu_header'); ?>
    <div class="row">
      <?php if ($this->session->flashdata('mensaje')): ?>
        <div data-alert class="alert-box success radius" style="background-color: #ff7d4f;margin-bottom: 0;margin-top: 9px;">
          <?php echo $this->session->flashdata('mensaje'); ?>
          <a href="#" class="close">&times;</a>
        </div>
      <?php endif ?>
              <?php echo form_open('kardex/procesarEditarComerciante','id="formNuevoKardex" name="formNuevoKardex"'); ?>
      <div class="large-6 medium-6 columns">
        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <i class="fa fa-arrow-circle-left"></i> <?php echo anchor('kardex/listaComerciantes', 'Volver a la lista', 'id="lista-comerciantes"'); ?>
                <h4 style="text-decoration: underline;"><i class="fa fa-file-text-o"></i> Editar Kardex</h4>
              </div>
                <div class="row">
                  <div class="small-12 large-12">
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
                        <label for="right-label" class="right">Nombres:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="nombres_kardex" value="<?php echo set_value('nombres_kardex', $nombres_kardex); ?>" type="text" id="nombres_kardex" placeholder="Ingrese su nombre">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Codigo Afiliado:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="codigo_afiliado_kardex" value="<?php echo set_value('codigo_afiliado_kardex',$codigo_afiliado_kardex); ?>" type="text" id="codigo_afiliado_kardex" placeholder="Ingrese Codigo afiliado">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Codigo Licencia:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="codigo_licencia_kardex" value="<?php echo set_value('codigo_licencia_kardex',$codigo_licencia_kardex); ?>" type="text" id="right-label" placeholder="Ingrese su codigo de licencia">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Lugar de nacimiento:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="lugar_nacimiento_kardex" value="<?php echo set_value('lugar_nacimiento_kardex',$lugar_nacimiento_kardex); ?>" type="text" id="lugar_nacimiento_kardex" placeholder="Ingrese su lugar de nacimiento">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Fecha de nacimiento:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="nacimiento_kardex" class="datepicker" value="<?php echo set_value('nacimiento_kardex',$nacimiento_kardex); ?>" type="text" id="nacimiento_kardex" placeholder="Ingrese su fecha de nacimiento">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Carnet:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="ci_kardex" value="<?php echo set_value('ci_kardex',$ci_kardex); ?>" type="text" id="ci_kardex" placeholder="Ingrese su Carnet">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Estado Civil:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="estado_civil_kardex" value="<?php echo set_value('estado_civil_kardex',$estado_civil_kardex); ?>" type="text" id="estado_civil_kardex" placeholder="Ingrese su Estado Civil">
                      </div>
                    </div>


                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Profesion:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="profesion_kardex" value="<?php echo set_value('profesion_kardex',$profesion_kardex); ?>" type="text" id="profesion_kardex" placeholder="Ingrese su Profesion">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Conyugue:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="conyugue_kardex" value="<?php echo set_value('conyugue_kardex',$conyugue_kardex); ?>" type="text" id="conyugue_kardex" placeholder="Ingrese el nombre de su Conyugue">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Cantidad de hijos:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="hijos_kardex" value="<?php echo set_value('hijos_kardex',$hijos_kardex); ?>" type="text" id="hijos_kardex" placeholder="Ingrese la cantidad de hijos">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Procedencia:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="procedencia_kardex" value="<?php echo set_value('procedencia_kardex',$procedencia_kardex); ?>" type="text" id="procedencia_kardex" placeholder="Ingrese su Procedencia">
                      </div>
                    </div>
                    
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
      <div class="large-6 medium-6 columns">
        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <br>
                <br>
                <br>
              </div>
                <div class="row">
                  <div class="small-12 large-12">
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
                        <label for="right-label" class="right">Antiguedad:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="antiguedad_kardex" class="datepicker" value="<?php echo set_value('antiguedad_kardex',$antiguedad_kardex); ?>" type="text" id="antiguedad_kardex" placeholder="Ingrese su Antiguedad">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Domicilio:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="domicilio_kardex" value="<?php echo set_value('domicilio_kardex',$domicilio_kardex); ?>" type="text" id="domicilio_kardex" placeholder="Ingrese su Domicilio">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Telefono:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="telefonos_kardex" value="<?php echo set_value('telefonos_kardex',$telefonos_kardex); ?>" type="text" id="telefonos_kardex" placeholder="Ingrese su Telefono">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Comercializa:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="comercializa_kardex" value="<?php echo set_value('comercializa_kardex',$comercializa_kardex); ?>" type="text" id="comercializa_kardex" placeholder="Ingrese lo que Comercializa">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Ubicacion de su Puesto:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="ubicacion_puesto_kardex" value="<?php echo set_value('ubicacion_puesto_kardex',$ubicacion_puesto_kardex); ?>" type="text" id="ubicacion_puesto_kardex" placeholder="Ingrese la ubicacion de su puesto">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Numero de Caseta:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="caseta_numero_kardex" value="<?php echo set_value('caseta_numero_kardex',$caseta_numero_kardex); ?>" type="text" id="caseta_numero_kardex" placeholder="Ingrese su numero de Caseta">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Numero de Mesa:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="mesa_en_kardex" value="<?php echo set_value('mesa_en_kardex',$mesa_en_kardex); ?>" type="text" id="mesa_en_kardex" placeholder="Ingrese su numero de Mesa">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Fecha:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="fecha_kardex" class="datepicker" value="<?php echo set_value('fecha_kardex',$fecha_kardex); ?>" type="text" id="fecha_kardex" placeholder="Ingrese su fecha">
                      </div>
                    </div>

                    <div class="row">
                      <div class="small-4 columns">
                      </div>
                      <div class="small-8 columns">                        
                        <input type="submit" class="small round button" value="Editar Kardex">
                        <input type="hidden" name="id_kardex" value="<?php echo set_value('id_kardex',$id_kardex); ?>">
                      </div>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
        <?php echo form_close(); ?>
    </div>
    <?php $this->load->view('template/footer'); ?>
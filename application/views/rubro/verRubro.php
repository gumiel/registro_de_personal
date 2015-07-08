<?php $this->load->view('template/header'); ?>
    <?php $this->load->view('complementos/menu_header'); ?>
    <div class="row">
      <div class="large-9 medium-9 columns">
        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <i class="fa fa-arrow-circle-left"></i> <?php echo anchor('rubro/listaRubro', 'Volver a la lista', 'id="lista-comerciantes"'); ?>
                <h4 style="text-decoration: underline;"><i class="fa fa-eye"></i> Ver Rubro</h4>
              </div>
                <div class="row">
                  <div class="small-8">                    
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Nombre de Rubro:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $nombre_rubro; ?>
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
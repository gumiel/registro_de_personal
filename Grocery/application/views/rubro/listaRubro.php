<?php $this->load->view('template/header'); ?>
    <?php $this->load->view('complementos/menu_header'); ?>
    <div class="row">
      <div class="large-9 medium-9 columns">
        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <h4>Lista de Rubros</h4>                 
              </div>
              <div>
                <style>
                .pDiv2{
                  display: none;
                }
                .tDiv3{
                  display: none;
                }
                #quickSearchBox{
                  display: none;
                }
                #field-nombre_rubro{
                  height: 40px;
                }
                </style>
                <?php echo $output; ?>
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
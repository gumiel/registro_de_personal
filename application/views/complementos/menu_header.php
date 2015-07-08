<div class="row">
      <div class="large-12 columns">
      	<nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name">
              <h1><a href="#">INICIO</a>
              </h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon">
              <a href="#">
                <span>Menu</span>
              </a>
            </li>
          </ul>
          <section class="top-bar-section">
            <!-- Left Nav Section -->
            <ul class="left">
              <li>
                <?php 
                $estilo1 = '';
                $estilo2 = '';
                if(uri_string() == "comerciantes/listaComerciantes"){
                  $estilo1  = 'style="background-color:#021D48!important"';                   
                }
                if(uri_string() == "kardex/listaComerciantes"){
                  $estilo2  = 'style="background-color:#021D48!important"';                   
                } 
                ?>
                <?php echo anchor('/comerciantes/listaComerciantes', 'COMERCIANTES',$estilo1); ?>
              </li>
              <li>
                <?php echo anchor('/kardex/listaComerciantes', 'KARDEX',$estilo2); ?>
              </li>
              <li>
                <?php echo anchor('/administracion/listaUsuarios', 'ADMINISTRACION'); ?>
              </li>
              <li>
                <?php echo anchor('/rubro/listaRubro', 'RUBRO'); ?>
              </li>
            </ul>
            <ul class="right">
              <li>
                <a href="<?php echo site_url('login');  ?>"><i class="fa fa-close" style="font-size: 22px"></i> CERRAR</a>
              </li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
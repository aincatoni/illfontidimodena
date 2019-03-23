<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?> 


</head>

<body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        
        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/marca/logo.png" class="img-fluid" alt="" width="200px"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- MENU -->

          <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
          <?php wp_nav_menu( array( 
            'theme_location' 	=> 'header-menu',
            'menu_class'     	=> 'navbar-nav',
            'container_class' => 'ml-auto'
            
            )
            ); ?>
        <?php } ?>
        
          
        </div>
</nav>

<section class="">      
    <div class="container-fluid">
      <div class="row caja_relativa">
        <div class="col-12 text-center centrado_absoluto">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marca/logo.png" class="img-fluid" alt="">
        </div>
        <div class="col-12 cabecera-pizza">
          
        </div>
      </div>
    </div>
  </section>

  </header>
  
  <section>
  <div class="container-fluid">
 
      <div class="row my-3">
        <div class="col-12 menu-carta--bg" id="menu-carta">
          <h1 class="menu-carta centrado_absoluto">MENÚ / CARTA ONLINE</h1>
        </div>

    </div>
  </div>
  </section>


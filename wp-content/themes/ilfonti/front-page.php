<?php get_header();?>



    <!-- Page Content -->
    <div id="content">

       
    </div>
</div>
    
    <!-- Contenido principal -->
    <div id="content">

    <div class="container">
      
      
        
        <!-- ANTIPASTOS -->

        <div class="row my-5">
            <div class="col-12">
              <div>
                <h2>ANTIPASTOS</h2>
              </div>
            </div>
        </div>
        
        <div class="row my-3">

        <?php
        $arg = array(
          'post_type'		 => 'antipasto',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        
            <div class="col-6">
                <div class="img-plato"><img src="<?php the_field('imagen_plato_antipasto') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_antipasto') ?></h4>
                <p><?php the_field('descripcion_plato_antipasto') ?></p>
                <p>$<?php the_field('precio_plato_antipasto') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>

</div>


<!-- ENSALADAS -->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>ENSALADAS</h2>
            </div>
        </div>

        <div class="row my-3" >
        <?php
        $arg = array(
          'post_type'		 => 'ensalada',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        
            <div class="col-6">
            <div class="img-plato"><img src="<?php the_field('imagen_plato_ensalada') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_ensalada') ?></h4>
                <p><?php the_field('descripcion_plato_ensalada') ?></p>
                <p>$<?php the_field('precio_plato_ensalada') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>
</div>

<!-- SOPAS -->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>SOPAS</h2>
            </div>
        </div>

        <div class="row my-3" >

        <?php
        $arg = array(
          'post_type'		 => 'sopa',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
       
            <div class="col-6">
            <div class="img-plato"><img src="<?php the_field('imagen_plato_sopa') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_sopa') ?></h4>
                <p><?php the_field('descripcion_plato_sopa') ?></p>
                <p>$<?php the_field('precio_plato_sopa') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>

</div>

<!-- PIZZA TRADICIONAL -->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>PIZZA TRADICIONAL</h2>
            </div>
        </div>

        <div class="row my-3" >
        <?php
        $arg = array(
          'post_type'		 => 'pizza_tradicional',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        
            <div class="col-6">
            <div class="img-plato"><img src="<?php the_field('imagen_plato_pizza_tradicional') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_pizza_tradicional') ?></h4>
                <p><?php the_field('descripcion_plato_pizza_tradicional') ?></p>
                <p>$<?php the_field('precio_plato_pizza_tradicional') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>
</div>

<!--PIZZA-->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>PIZZA</h2>
            </div>
        </div>

        <div class="row my-3" >

        <?php
        $arg = array(
          'post_type'		 => 'pizza',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
       
            <div class="col-6">
            <div class="img-plato"><img src="<?php the_field('imagen_plato_pizza') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_pizza') ?></h4>
                <p><?php the_field('descripcion_plato_pizza') ?></p>
                <p>$<?php the_field('precio_plato_pizza') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>
</div>
      <!--POSTRES-->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>POSTRES</h2>
            </div>
        </div>

        <div class="row my-3" >

        <?php
        $arg = array(
          'post_type'		 => 'postres',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        
            <div class="col-6">
            <div class="img-plato"><img src="<?php the_field('imagen_plato_postres') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_postres') ?></h4>
                <p><?php the_field('descripcion_plato_postres') ?></p>
                <p>$<?php the_field('precio_plato_postres') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>

</div>

       <!--INFUSIONES-->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>INFUSIONES</h2>
            </div>
        </div>

        <div class="row my-3" >
        <?php
        $arg = array(
          'post_type'		 => 'infusiones',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        
            <div class="col-6">
                <div class="img-plato"><img src="<?php the_field('imagen_plato_infusiones') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_infusiones') ?></h4>
                <p>$<?php the_field('precio_plato_infusiones') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>
</div>
       <!--BEBIDAS-->

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h2>BEBIDAS</h2>
            </div>
        </div>

        <div class="row my-3" >
        <?php
        $arg = array(
          'post_type'		 => 'bebidas',
          'posts_per_page' => 20
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        
            <div class="col-6">
                <div class="img-plato"><img src="<?php the_field('imagen_plato_bebidas') ?>" class="" alt=""></div>
                <h4><?php the_field('nombre_plato_bebidas') ?></h4>
                <p>$<?php the_field('precio_plato_bebidas') ?></p>
            </div>
        
          
  
        <?php } wp_reset_postdata();
      ?>

    </div>


    <section>
      <div class="container-fluid">
  
        <div class="row my-3">
          <div class="col-12 reserva-online--bg" id="reserva">
            <h1 class="reserva-online centrado_absoluto">RESERVA ONLINE</h1>
          </div>
		<?php echo do_shortcode("[booking type=1 nummonths=2 width=100% form_type='standard']"); ?>
        </div>
      </div>
    </section>


    <section>
      <div class="container-fluid">
  
        <div class="row my-3">
          <div class="col-12" id="encuentranos">
            <h1 class="reserva-online">ENCUENTRANOS</h1>
          </div>

		<div class="col-12">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitio/Ilfontidimodena_mapa.png" class="img-fluid">
    </div>

        </div>
      </div>
    </section>
    






    </div>
    </div>

    
  </div>

  <?php get_footer();?>

    


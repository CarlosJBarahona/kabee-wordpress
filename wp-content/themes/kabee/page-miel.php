<?php get_header(); ?>
   <div class="headermsmiel">

      <div class="contmensajemiel col-xs-push-1 col-xs-10 col-sm-push-3 col-sm-6   col-md-push-3 col-lg-push-3 col-md-6 col-lg-6 ">

        <div class="mensajeproductos col-md-12 col-lg-12">

          <h5 class="titulomensaje">MIEL</h5>
          <h5 class="infomensaje">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
          . Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et </h5>

        </div>

      </div>

    </div>
   <div class="contenedorpro">

      <div class="contproductossecciones item"><!--contpro-->


    <?php 
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
      'post_type'         => 'post',
      'posts_per_page' => 9,
      'cat'    => 11,
      'paged'  => $paged,
      );
    $loop_miel = new WP_Query($args);
    if( $loop_miel->have_posts() ):
      while( $loop_miel->have_posts() ): $loop_miel->the_post(); ?>

        <div class="contenedordeproducto">


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 productossecciones"><!--cont-->
          <div class="productoscontainer hoverarriba">
            <span class="visible-md visible-lg">
              <div class="derecha">
                <div class="informacionproducto">
                  <h3 class="tituloproductos"><?php the_title(); ?></h3>
                  <h5 class="h5proinfo"><?php the_content();?></h5>
                </div>
              </div>
            </span>
           <div ><a class="imgartesanoshome" href="<?php the_permalink(); ?>">
     
            <?php if (has_post_thumbnail() ) { the_post_thumbnail('imgagenproducto'); }?>
      
           </a></div>
            <div class="vermasprod visible-xs visible-sm">
              <div class="vermasproductos"><h4>VER MAS</h4></div>
            </div>   
          </div>
        </div><!--cont-->

        </div>




<?php    endwhile; endif;
global $wp_query;
$wp_query = $loop_miel ;
if (function_exists( 'wp_pagenavi' )) {
  //wp_pagenavi( array( 'query' => $loop_miel ) );
}

wp_reset_postdata(); ?>

      <div class="paginacionproductos "><!--paginacion-->
        <?php include('parts/paginacion.php') ?>
      </div><!--paginacion-->


</div><!--container-->


<?php get_footer(); ?>
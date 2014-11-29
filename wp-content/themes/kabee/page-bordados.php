<?php get_header(); ?>

<div class="headermsbordados">

  <div class="contmensajebordados col-xs-push-1 col-xs-10 col-sm-push-3 col-sm-6   col-md-push-3 col-lg-push-3 col-md-6 col-lg-6 ">

    <div class="mensajeproductos col-md-12 col-lg-12">

      <h5 class="titulomensaje">BORDADOS</h5>
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
    'cat'    => 5,
    'paged'  => $paged,
    'orderby' => 'rand'
    );
  $loop_alternativo = new WP_Query($args);
  $micontador=1;
  if( $loop_alternativo->have_posts() ):
    while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>

  <?php if ($micontador==1) { ?>

        <div class="contenedordeproducto">


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 productossecciones"><!--cont-->
          <div class="productoscontainer hoverizquierda">
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


  <?php $micontador++; ?>
  <?php  }elseif ($micontador==2) { ?>
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
   <?php $micontador++; ?>
   <?php }else{ ?>
        <div class="contenedordeproducto">


        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 productossecciones"><!--cont-->
          <div class="productoscontainer hoverderecha">
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


<?php $micontador=$micontador - 2; ?>
 <?php   } ?>

<?php    endwhile; endif;
global $wp_query;
$wp_query = $loop_alternativo ;
if (function_exists( 'wp_pagenavi' )) {
  //wp_pagenavi( array( 'query' => $loop_alternativo ) );
}

wp_reset_postdata(); ?>


      <div class="paginacionproductos "><!--paginacion-->
        <?php include('parts/paginacion.php') ?>
      </div><!--paginacion-->


</div><!--container-->


<?php get_footer(); ?>
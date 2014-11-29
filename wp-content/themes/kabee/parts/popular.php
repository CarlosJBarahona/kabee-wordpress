<div class="col-xs-12 col-sm-push-1 col-sm-4 col-md-push-1 col-md-4 col-lg-push-1 col-lg-4 contderpre">

<?php get_sidebar(); ?>



  
  <div class="popular col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <h4 class="h4popular">POPULAR POST</h4>

  </div><!--popular-->



  <?php 
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args = array(
    'post_type'         => 'post',
    'posts_per_page' => 3,
    'cat'    => 2,
    'paged'  => $paged,
    'orderby' => 'rand'
    );
  $loop_alternativo = new WP_Query($args);
  $micontador=1;
  if( $loop_alternativo->have_posts() ):
    while( $loop_alternativo->have_posts() ): $loop_alternativo->the_post(); ?>

  <?php if ($micontador==1) { ?>

  <div class="thumb imagepopularpost visible-sm visible-md visible-lg"><a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail() ) { the_post_thumbnail('imgprensa'); }?>
  </a></div>  

  <div class="infopopular visible-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <h4><a  class="h4infopo" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <h6 class="fecha"> <?php the_date();?>/ Autor: <?php the_author(); ?></h6>
    <p class="parrafoinfpo"><?php the_excerpt();?></p>

  </div><!--infopopular-->
  <?php $micontador++; ?>
  <?php  }else{ ?>

 <div class="thumb imagepopularpost visible-sm visible-md visible-lg"><a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail() ) { the_post_thumbnail('imgprensa'); }?>
  </a></div>  
  <div class="infopopular2 visible-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <h4><a  class="h4infopo2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <h6 class="fecha2"> <?php the_date();?>/ Autor: <?php the_author(); ?></h6>
    <p class="parrafoinfpo2"><?php the_excerpt();?></p>

  </div><!--infopopular-->

  <?php $micontador--; } ?>

<?php    endwhile; endif;
global $wp_query;
$wp_query = $loop_alternativo ;
if (function_exists( 'wp_pagenavi' )) {
  //wp_pagenavi( array( 'query' => $loop_alternativo ) );
}

//wp_reset_postdata(); ?>






<!--
<img class="img-responsive imgprensa visible-sm visible-md visible-lg" src="<?=get_bloginfo('template_directory')?>/img/prensa/2.jpg">

<div class="infopopular2 visible-sm visible-md visible-lg col-sm-12 col-md-12 col-lg-12">

  <h4 class="h4infopo2">LOREM IMPSUM</h4>
  <h6 class="fecha2"> January 30, 2014 / Autor Daniel Yañez</h6>
  <p class="parrafoinfpo2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
   Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

 </div>
-->

<?php include('tags.php') ?>

<div class="facekabee visible-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12">

 <h4 class="h4facekabee">FACEBOOK KABEE</h4>

</div><!--facekabee-->

<div class="twikabee  visible-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12">

 <h4 class="h4twikabee">TWITTER KABEE</h4>

</div><!--facekabee-->

</div><!--CONTDERPRE-->
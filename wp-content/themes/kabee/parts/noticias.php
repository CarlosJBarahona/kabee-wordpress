<div class=" col-xs-12 col-sm-push-1 col-sm-6 col-md-push-1 col-md-6 col-lg-push-1 col-lg-6 contizqblog">


  <!-- #content -->

  <section id="content"role="main">



    <?php 
    $args = array(
      'post_type'         => 'post',
      'posts_per_page' => 3,
      'cat'    => 2,
      'paged'  => $paged
      );
    if( isset($_GET['s']) && $_GET['s'] != '' ){
      $args = array_merge($args,array( 's'=> mysql_real_escape_string(trim($_GET['s'])) ));
    }
    var_dump($args);
    $loop_noticias = new WP_Query($args);
    if( $loop_noticias->have_posts() ):
      while( $loop_noticias->have_posts() ): $loop_noticias->the_post(); ?>

    <!-- .Posts -->
    <article>
     <div class="thumb"><a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail() ) { the_post_thumbnail('imgprensa'); }?>
    </a></div>     
    <div class="post col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
      <!-- .entry-header -->
      <div class=" col-sm-push-1 col-md-push-1 col-lg-push-1 col-xs-12 col-sm-10 col-md-10 col-lg-10">
        <h4><a class="h4post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <h6 class="fechablog"> <?php the_date();?>/ Autor: <?php the_author();?></h6>
        <!-- Final .entry-header -->

        <!-- .entry-content -->
        <div class="parrapost"><?php the_excerpt();?></div>
        <!-- Final .entry-content -->

        <form metod="POST" action="<?php the_permalink(); ?>">
          <input class="vermasbtn" type="submit" value="VER MAS" id="vermas">
        </form>
      </div>
    </div><!--post-->
  </article>
  <!-- Final .posts -->



<?php    endwhile; endif;
global $wp_query;
$wp_query = $loop_noticias ;
if (function_exists( 'wp_pagenavi' )) {
  //wp_pagenavi( array( 'query' => $loop_noticias ) );
}

//wp_reset_postdata(); ?>


</section>

<div class="paginacionproductos pagprensa"><!--paginacion-->
  <?php include('paginacion.php') ?>
</div><!--paginacion-->
<!-- final #content -->
</div><!--contizqpre-->
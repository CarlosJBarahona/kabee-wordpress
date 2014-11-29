<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <!-- .Posts -->
   <article>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mensajeprensa"><!--mensajeprensa-->

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contmjprensa">
    <h4 ><a class="tituloprensa1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <h6> <?php the_date();?>/ Autor: <?php the_author(); ?></h6>
    </div> 
  </div><!--mensajeprensa-->  
  <div class="imgallnoticia"> 
       <div class="thumb"><a href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail() ) { the_post_thumbnail('img_thumb'); }?>
    </a></div>  
  </div><!--imgallnoticia-->
    <div class="post col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
      <!-- .entry-header -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- Final .entry-header -->

        <!-- .entry-content -->
        <div class="parrapostpre"><?php the_content();?></div>
        <!-- Final .entry-content -->

      </div>
    </div><!--post-->
  </article>
  <!-- Final .posts -->
  
<?php endwhile; else:  ?>

 <article class="posts">
  <p><h2><?php _e('Ha ocurrido un error.'); ?></h2></p>
  <p><?php _e('Disculpe, no existen post relacionados con su criterio de busqueda'); ?></p>
  <?php get_search_form();?>
</article>
<?php endif; ?>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>

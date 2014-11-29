<div class=" col-sm-push-1 col-sm-6 col-md-push-1 col-md-6 col-lg-push-1 col-lg-6 contizqpre">


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


<div class="botonespre col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <div class="redespre  col-xs-12 col-sm-8 col-md-6 col-lg-6">

    <h6 class="comprtirpre">COMPARTIR</h6>
    <img class="imgredespre" src="<?=get_bloginfo('template_directory')?>/img/prensa/facebook.png">
    <img class="imgredespre" src="<?=get_bloginfo('template_directory')?>/img/prensa/twitter.png">

  </div><!--redespre-->
  
  <div class="flechsspren col-lg-push-4 col-sm-4 col-md-4 col-lg-3">
    <?php include('paginacion.php') ?>
  </div><!--flechaspren-->

</div><!--botonespre-->

<div class="barrabuscar visible-xs">

  <input class="buscarprensa" type="text" name="buscar" id="buscar">
  <div class="buscarimg"><span class="glyphicon glyphicon-search misearch" aria-hidden="true"></span></div>

</div>

</div><!--contizqpre-->
  <div id="owl-demo" class="owl-carousel owl-theme fondo"><!--Slider-->

<?php query_posts('&cat=4'); //categoria del slider ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="contartesanos item">
     <div class="artesanoshome">
    
     <div ><a class="imgartesanoshome" href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail() ) { the_post_thumbnail('imgartesanoshome'); }?>
     </a></div> 

      <div class="infoartesano">
       <h3 class="nombreartesano"><?php the_title(); ?></h3>
       <p class="leyendartesano" ><?php the_content();?></p>
       </div>
     </div><!--artesanoshome-->
     <div class="leyendaartesanos visible-xs visible-sm">
      <h3 class="tituloartleyenda"><?php the_title(); ?></h3>
      <p class="parrafoleyendaart"><?php the_excerpt();?></p>
     </div>
   </div><!--contartesanos-->
<?php endwhile; else:  ?>

 <article class="posts">
 <h3 class="nohaymas" >Lo sentimos por el momento no hay mas noticias vuelve despues</h3>
</article>
<?php endif; ?>


 </div><!--Slider-->


 <div class="contbotoneshome"><!--contbotones-->
  <div class="botones">
    <div class="bizq prev">
      <img class="imgbizq " src="<?=get_bloginfo('template_directory')?>/img/home/flecha_naranja_1.png">
    </div>
    <div class="bder next">
      <img class="imgbder" src="<?=get_bloginfo('template_directory')?>/img/home/flecha_naranja_2.png">
    </div>
  </div>   
</div><!--botones--> 



<!--
    <div class="contartesanos ">
     <div class="artesanoshome">
      <img class=" imgartesanoshome"  src="<?=get_bloginfo('template_directory')?>/img/home/artesano1.jpg" >
      <div class="infoartesano">
       <h3 class="nombreartesano">NOMBRE</h3>
       <p class="leyendartesano" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
         Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>
       </div>
     </div><!--artesanoshome-->
  <!--   <div class="leyendaartesanos visible-xs visible-sm">
      <h3 class="tituloartleyenda">THIS IS PHOTOSHOPS</h3>
      <p class="parrafoleyendaart">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
       Aenean massa. Cum sociis natoque penatibus et.Aenean commodo ligula eget dolor.</p>
     </div>
   </div><!--contartesanos-->



<!--   <div class="contartesanos ">
     <div class="artesanoshome">
      <img class=" imgartesanoshome"  src="<?=get_bloginfo('template_directory')?>/img/home/artesano2.jpg" >
      <div class="infoartesano">
       <h3 class="nombreartesano">NOMBRE</h3>
       <p class="leyendartesano" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
         Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>
       </div>
     </div><!--artesanoshome-->
 <!--    <div class="leyendaartesanos visible-xs visible-sm">
      <h3 class="tituloartleyenda">THIS IS PHOTOSHOPS</h3>
      <p class="parrafoleyendaart">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
       Aenean massa. Cum sociis natoque penatibus et.Aenean commodo ligula eget dolor.</p>
     </div>
   </div><!--contartesanos-->

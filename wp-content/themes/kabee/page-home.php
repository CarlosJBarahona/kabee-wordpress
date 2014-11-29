<?php
/* 
Template Name: Home
*/ 
?>

<?php get_header(); ?>

  <div id="home">
   <div class="imagenhomexs">
   <img class="imagenhomexs img-responsive" src="<?=get_bloginfo('template_directory')?>/img/home/foto_header.jpg">
   <div class="texthead visible-xs">"Texto This is Phothosop version of lorem impsum.Proin gravida"</div>
   <div class="linetriangulosxs"></div>
   </div>

   <div class="artesanos"><!--artesanos-->
    <div class="flechaart visible-sm visible-md visible-lg"><img class="artflecha" src="<?=get_bloginfo('template_directory')?>/img/home/flecha.png"></div>
    <div class="textartg"><h3>ARTESANOS</h3></div>
    <div class="lineart"></div>
    <div class="textart"><h5>THIS PHOTOSHOP VERSION</h5></div>
  </div><!--artesanos-->


<?php include('parts/artesanos.php') ?>


<div class="visible-xs">
  <div class="linetriangulosrosaxs"></div>
  <div class="productoshomexs">
    <div class="todosxs">TODOS LOS PRODUCTOS</div>
  </div><!--productoshomexs-->
  <div class="linetriangulosrosaxs2"></div>
</div>

<?php include('parts/productoshome.php') ?>

</div><!--home-->

<?php get_footer(); ?>
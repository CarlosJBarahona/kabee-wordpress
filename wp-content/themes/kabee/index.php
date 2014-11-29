<?php
/*
Template Name: Blog
*/
?> 
<?php get_header(); ?>


    <div class="headermsblog">

      <div class="contmensajeblog col-xs-push-1 col-xs-10 col-sm-push-3 col-sm-6   col-md-push-3 col-lg-push-3 col-md-6 col-lg-6 ">

        <div class="mensajeheader col-md-12 col-lg-12">

          <h5 class="titulomensaje">BLOG</h5>
          <h5 class="infomensaje">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
          . Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et </h5>

        </div>

      </div>

    </div>

 <div class="container contprensa"> 

<?php include('parts/noticias.php') ?>


<?php include('parts/popular.php') ?>







</div><!--contprensa-->



<?php get_footer(); ?>
  <div class="popular col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
    <h4 class="h4popular">TAGS</h4>
  
  </div><!--tags-->

  <div class="conttags col-xs-12 col-sm-12 col-md-12 col-lg-12">

<?php
$posttags = get_tags();
//var_dump($posttags);
if ($posttags) {
  foreach($posttags as $tag) { ?>
  

<div class="listtags"><h5 class="h5listtags"> <?php echo $tag->name . ' '; ?> </h5></div>
    
  


 <?php }
}
?>

  </div>
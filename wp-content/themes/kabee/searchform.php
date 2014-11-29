<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Shape
 * @since Shape 1.0
 */
?>
    <form  class="serachcont" method="get" id="searchform" action="/blog" role="search">
        
<div>
        <label for="s" class="assistive-text"><?php _e( 'Search', 'shape' ); ?></label>
        <button type="submit" class="submit botonlupa" name="submit" id="searchsubmit" ><span class="glyphicon glyphicon-search misearch" aria-hidden="true"></span></button>
       
</div>

<div>
      <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search …', 'shape' ); ?>" />   
   
</div>
    </form>



<!--
<div>
  <div class="serachcont id="searchsubmit" type="submit"">

    <h3 class="search">SEARCH</h3>
    <div class="buscarimgseaerch"><span class="glyphicon glyphicon-search misearch" aria-hidden="true"></span></div>
  </div>
  <div class="formsearch1">
    <input class="buscarsearchpren" type="text" name="s" id="s">
  </div>

</div> 
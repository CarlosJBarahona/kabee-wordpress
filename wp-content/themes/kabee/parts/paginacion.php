<div class="pager">
		<?php 
		global $wp_query;
		$big = 999999999;
		$pagination = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'prev_text'    => __('<'),
			'next_text'    => __('>'),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		if( $pagination != '' ){
			echo "<div class='row-fluid row-center pages'>{$pagination}</div>";
		}
		?>
		<!--<span class="arrows previous"><</span><span class="arrows next">></span><span class="pages">1 2 3 4</span>-->
</div>
<div class="clear"></div>
<?php get_header(); ?>
<div class="container">
  <div class="row">
<?php 
// Example argument that defines three posts per page. 
$args = array( 
  'posts_per_page' => 3,
  'order'   => 'ASC' 
); 
 
// Variable to call WP_Query. 
$the_query = new WP_Query( $args ); 
 
if ( $the_query->have_posts() ) : 
    // Start the Loop 
    while ( $the_query->have_posts() ) : $the_query->the_post();?>
  <div class="col-3">
      <div class="card">
  <div class="card-body">
    <h5><?php the_title(); ?></h5>
    <?php the_excerpt(); ?>
    <a href="<?php echo get_permalink();?>">link</a>
  </div>
</div>
</div>
      <?php
  endwhile;
else :
  _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
</div>
</div>
<?php get_footer(); ?>



    

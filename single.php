<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>

      <?php
        endwhile;
      else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
      endif;
      ?>
      <a href="<?php echo get_home_url(); ?>">Home</a>




      <div class="row row-cols-1 row-cols-md-2">
        <?php
        // Example argument that defines three posts per page. 
        $args = array(
          'posts_per_page' => 3,
          'order'   => 'ASC'
        );

        // Variable to call WP_Query. 
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :
          // Start the Loop 
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col mb-4">
              <div class="card">
                <?php the_post_thumbnail('anteprima', ['class' => 'card-img-top', 'title' => 'Feature image']); ?>

                <div class="card-body">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <a href="<?php echo get_permalink(); ?>">link</a>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
    <div class="col-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

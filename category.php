<?php
/**
 * The template for displaying Category pages
 */

get_header(); ?>

<div class="row" id="porady_">
  <div class="container">
    <div class="col-lg-8 col-sm-12 span8">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
        ?>
      </div>

      <h2>Porady</h2>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-thumbnail">
          <a href="<?php the_permalink(); ?>">
          <span id="thumbnail"><?php if ( has_post_thumbnail() ) {the_post_thumbnail(medium);}?></span></a>
          <a href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
          </a>
          <p id="excerpt"><?php the_excerpt(); ?></p>
          <p class="homedate">
            <em><?php the_time('l, j-m-Y'); ?></em>
          </p>   
          <p><?php the_category( $separator, $parents, $post_id ); ?></p>
          <br/>
        </div>
        <hr>
        <?php endwhile; else: ?>
          <p><?php _e('Przepraszamy, nie ma wpisów.'); ?></p>
        <?php endif; ?>

        <?php pagination();?>
    </div>
    <div class="col-lg-4 col-sm-12 span4">
      <?php get_sidebar(); ?>   
    </div>
</div>
<?php get_footer(); ?>
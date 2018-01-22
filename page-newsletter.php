<?php /* Template Name: Newsletter */ ?>

<?php get_header(); ?>

<div class="row">
  <div class="span8 container">
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
   			 </div>
	<div class="letter">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Przepraszamy, taka strona nie istnieje'); ?></p>
	<?php endif; ?>
	</div>
  </div>
</div>

<?php get_footer(); ?>
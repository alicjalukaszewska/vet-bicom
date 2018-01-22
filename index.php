<?php get_header(); ?>
<div class="entry container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<article>
    <?php the_content('czytaj dalej'); ?>
</article>
 
<?php endwhile; else: ?>
 
<p><?php _e('Przepraszamy, nie ma postów spełniających twoje kryteria.'); ?></p>
 
<?php endif; ?>
</div>

<?php get_footer(); ?>
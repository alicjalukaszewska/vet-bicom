<?php get_header(); ?>

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

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<p><em><?php the_time('l, j-m-Y'); ?></em></p>
	  	<?php the_content(); ?>
        <br/>
        <p><?php the_category( $separator, $parents, $post_id ); ?></p>
        <br/>
	  	<hr>

		<?php the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Następny: ', 'weterynarz' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Następny artykuł: ', 'weterynarz' ) . '</span> ' .
			'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Poprzedni: ', 'weterynarz' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Poprzedni artykuł: :', 'weterynarz' ) . '</span> ' .
			'<span class="post-title">%title</span>',
			) );
		?>
        <hr />
		<?php if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; ?>

		<?php endwhile; else: ?>
			<p><?php _e('Przepraszamy, ta strona nie istnieje.'); ?></p>
		<?php endif; ?>
	</div>

    <div class="col-lg-4 col-sm-12 span4">
    	<?php get_sidebar(); ?>  	
    </div>
  </div>
</div>
<?php get_footer(); ?>
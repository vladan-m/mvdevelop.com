<?php get_header(); ?>

  <section class="fluid">
    <main role="main" class="content">

  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  		<article class="entry">
  			<h2>
  				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br>
          <span>
            By: <?php the_author_posts_link(); ?> | <?php _e("Category:"); ?> <?php the_category(',') ?> | <?php the_time('F j, Y'); ?> | <?php _e('Tags: '); ?> <?php the_tags('', ', ', ''); ?> | <?php comments_popup_link(__('No Comments'), __('Comment (1)'), __('Comments (%)')); ?>
          </span>
  			</h2>

  			<?php the_excerpt(); ?>

        <?php if ( has_post_thumbnail()) : ?>
    		  <a class="feature-image" href="<?php the_permalink() ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>
        <div class="read-more-btn">
          <a class="btn btn-info btn-custom" href="<?php the_permalink() ?>">
            <strong>Read More</strong>
          </a>
        </div>
  			<div class="main-divider"></div>
  		</article><!-- entry end -->

  		<?php endwhile; else: ?>

  		<article class="entry">
  			<h3 class="main-title"><?php _e('Sorry, no posts matched your criteria.'); ?></h3>
  		</article>

  		<?php endif; ?>

  		<section class="post_nav">
  			<?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
  		</section>

    </main><!-- content end-->
	</section>

	<section class="fixed">
  	<?php include(TEMPLATEPATH."/sidebar_r.php");?>
	</section>

<?php get_footer(); ?>

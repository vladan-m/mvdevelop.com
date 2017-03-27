<?php get_header(); ?>

	<section class="fluid">
    <main role="main" class="content">

		  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  		<article class="single-entry">
  			<h2>
  				<?php the_title(); ?><br>
          <span>
            By: <?php the_author_posts_link(); ?> | <?php _e("Category:"); ?> <?php the_category(',') ?> | <?php the_time('F j, Y'); ?> | <?php _e('Tags: '); ?> <?php the_tags('', ', ', ''); ?> | <?php comments_popup_link(__('No Comments'), __('Comment (1)'), __('Comments (%)')); ?>
          </span>
  			</h2>

  			<?php the_content(); ?>
  		</article><!-- entry end -->

      <section class="author">
  			<div class="clearfix">
  				<div class="author-image">
  				  <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
          </div>
  				<div class="author-text">
    				<h3><?php the_author_posts_link(); ?></h3>
            <p><?php the_author_description(); ?></p>
            <p class="social-links">
              <a target="_blank" href="<?php the_author_url(); ?>"><i class="icon-web"></i></a>
              &nbsp;&nbsp;
              <a target="_blank" href="<?php the_author_meta( twitter, get_the_author_meta( 'ID' )); ?>"><i class="icon-twitter-color"></i></a>
              &nbsp;&nbsp;
              <a target="_blank" href="<?php the_author_meta( facebook, get_the_author_meta( 'ID' )); ?>"><i class="icon-face-color"></i></a>
            </p>
  				</div>
  			</div>
      </section>

      <section class="cta-wrap">
        <div class="cta-box">
          <h5>Stay connected with us</h5>
          <div class="cta-content social">
            <a href="https://www.facebook.com/superiordevelop" target="_blank" title="Join us on Facebook"><i class="icon-face-color"></i>Join us on <strong>Facebook</strong></a>
            <a href="https://twitter.com/superior_dev" target="_blank" title="Follow us on Twitter"><i class="icon-twitter-color"></i>Follow us on <strong>Twitter</strong></a>
            <a href="<?php bloginfo('url'); ?>/feed/rss2/" target="_blank" title="Subscribe to our RSS"><i class="icon-rss-color"></i>Subscribe to our <strong>RSS</strong></a>
            <a href="https://github.com/superior-develop" target="_blank" title="Fork us on GitHub"><i class="icon-github-color"></i>Fork us on <strong>Github</strong></a>
          </div>
        </div>

        <div class="cta-box">
          <h5>Become valuable member</h5>
          <div class="cta-content">
            <p>
              We are always looking for writers, web developers and web designers who are passionate
              about their job and would like to contribute to Superior Develop. If you are one of the above
              and want to tell us how would you like to contribute, please do not hesitate to
              <a href="<?php bloginfo('url'); ?>/contact-us/">contact us</a>.
            </p>
          </div>
        </div>
      </section>

      <?php comments_template(); ?>

      <?php endwhile; else: ?>
      <?php endif; ?>

    </main><!-- content end -->
	</section>

  <section class="fixed">
  	<?php include(TEMPLATEPATH."/sidebar_r.php");?>
	</section>

<?php get_footer(); ?>

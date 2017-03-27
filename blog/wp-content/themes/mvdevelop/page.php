<?php get_header(); ?>

	<section class="fluid">
    <main role="main" class="content">

  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  		<article class="page-entry">
  			<h2>
  				<?php the_title(); ?><br />
  			</h2>

  			<?php the_content();?>

  		</article><!-- entry end -->

  		<?php endwhile; else: ?>

  		<article class="entry">
  			<h3 class="main-title"><?php _e('Sorry, no pages matched your criteria.'); ?></h3>
  		</article>

  		<?php endif; ?>

  		<section class="cta-wrap">
        <section class="cta-box">
          <h5>Stay connected with us</h5>
          <div class="cta-content social">
            <a href="https://www.facebook.com/superiordevelop" target="_blank" title="Join us on Facebook"><i class="icon-face-color"></i>Join us on <strong>Facebook</strong></a>
            <a href="https://twitter.com/superior_dev" target="_blank" title="Follow us on Twitter"><i class="icon-twitter-color"></i>Follow us on <strong>Twitter</strong></a>
            <a href="<?php bloginfo('url'); ?>/feed/rss2/" target="_blank" title="Subscribe to our RSS"><i class="icon-rss-color"></i>Subscribe to our <strong>RSS</strong></a>
            <a href="https://github.com/superior-develop" target="_blank" title="Fork us on GitHub"><i class="icon-github-color"></i>Fork us on <strong>Github</strong></a>
          </div>
        </section>

        <section class="cta-box">
          <?php if (is_page('contact-us')) : ?>
    				<h5>Check out all of our articles</h5>
            <div class="cta-content">
              <p>
                If you like our articles and tutorials, and would like to read more quality articles and
                learn something new related to web development and web design you can always visit our
                <a href="<?php bloginfo('url'); ?>/archive/">archive</a>.
              </p>
            </div>
          <?php else: ?>
            <h5>Become valuable member</h5>
            <div class="cta-content">
              <p>
                We are always looking for writers, web developers and web designers who are passionate
                about their job and would like to contribute to Superior Develop. If you are one of the above
                and want to tell us how would you like to contribute, please do not hesitate to
                <a href="<?php bloginfo('url'); ?>/contact-us/">contact us</a>.
              </p>
            </div>
          <?php endif; ?>
        </section>
      </section>

    </main><!-- content end-->
	</section>

	<section class="fixed">
  	<?php include(TEMPLATEPATH."/sidebar_r.php");?>
	</section>

<?php get_footer(); ?>

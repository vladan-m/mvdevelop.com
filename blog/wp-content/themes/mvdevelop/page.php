<?php get_header(); ?>

  <main role="main" class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="entry">
            <h2>
              <?php the_title(); ?>
            </h2>

            <?php the_content();?>

          </article><!-- entry end -->

          <?php endwhile; else: ?>

          <article class="entry">
            <h3 class="main-title"><?php _e('Sorry, no pages matched your criteria.'); ?></h3>
          </article>

          <?php endif; ?>

        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

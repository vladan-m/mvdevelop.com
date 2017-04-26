<?php get_header(); ?>

  <main role="main" class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="entry single-entry">
            <h2>
              <?php the_title(); ?>
              <span>
                Wrote by <?php the_author_posts_link(); ?> in <?php the_category(',') ?> on <?php the_time('F j, Y'); ?><br>
                <?php _e('Tags: '); ?> <?php the_tags('', ', ', ''); ?>
              </span>
            </h2>

            <?php the_content(); ?>

            <?php if ( in_category( 'Lab' ) ) : ?>
              <div class="lab-cta">
                <a href="<?php the_field('view_demo'); ?>" class="btn btn-info btn-custom btn-lg" title="View Demo">
                  View Demo
                </a>
                <a href="<?php the_field('fork_on_github'); ?>" target="_blank" class="btn btn-info btn-custom btn-lg" title="Fork on Github">
                  Fork on Github
                </a>
              </div>
            <?php endif; ?>

          </article><!-- entry end -->

          <?php comments_template(); ?>

          <?php endwhile; else: ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

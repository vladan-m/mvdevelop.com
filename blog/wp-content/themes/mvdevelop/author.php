<?php get_header(); ?>

  <main role="main" class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <!-- <section class="category-description">
            <div class="clearfix">
              <div class="author-image">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
              </div>
              <div class="author-text">
                <h3><?php the_author_meta('display_name'); ?></h3>
                <p><?php the_author_description(); ?></p>
                <p>
                  <a target="_blank" href="<?php the_author_url(); ?>"><i class="icon-web"></i></a>
                  &nbsp;&nbsp;
                  <a target="_blank" href="<?php the_author_meta( twitter, get_the_author_meta( 'ID' )); ?>"><i class="icon-twitter-color"></i></a>
                  &nbsp;&nbsp;
                  <a target="_blank" href="<?php the_author_meta( facebook, get_the_author_meta( 'ID' )); ?>"><i class="icon-face-color"></i></a>
                </p>
              </div>
            </div>
          </section> -->

          <h3 class="main-title author-posts-title"><?php the_author_firstname(); ?>'s Latest Posts (<?php echo count_user_posts( get_the_author_meta( 'ID' )); ?>)</h3>

          <ul class="grid-view">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <li class="grid-item">
                <article class="entry">
                  <?php if ( has_post_thumbnail()) : ?>
                    <a class="feature-image" href="<?php the_permalink() ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                  <h2>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br />
                    <span><?php the_category(',') ?> | <?php the_time('F j, Y'); ?></span>
                  </h2>
                  <div class="trimmed-content">
                    <?php
                      $content = get_the_content();
                      $trimmed_content = wp_trim_words( $content, 14 );
                      echo $trimmed_content;
                    ?>
                  </div>
                </article>
              </li>

            <?php endwhile; else: ?>

              <li>
                <article class="entry">
                  <h3 class="main-title"><?php _e('No posts found by this author.'); ?></h3>
                </article>
              </li>

            <?php endif; ?>

          </ul>

          <section class="post_nav">
            <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
          </section>

        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

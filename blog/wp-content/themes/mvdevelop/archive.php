<?php get_header(); ?>

  <main role="main" class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
              <section class="category-description">
                <h3 class="main-title">Category <span><?php single_cat_title(); ?></span></h3>
                <?php echo category_description(); ?>
              </section>
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
              <section class="category-description">
                <h3 class="main-title">Tag <span><?php single_tag_title(); ?></span></h3>
              </section>
          <?php } ?>

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
                    <span><?php the_author_posts_link(); ?> | <?php the_time('F j, Y'); ?></span>
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

<?php get_header(); ?>

  <main role="main" class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <?php if (have_posts()) {?>
            <section class="category-description">
              <h3 class="main-title"><?php _e("Search Results for");?> <span><?php the_search_query(); ?></span></h3>
            </section>
          <?php } ?>

          <?php $posts = query_posts($query_string . '&post_type=post'); ?>

          <ul class="grid-view">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <li class="grid-item">
                <article class="entry">
                  <?php if ( has_post_thumbnail()) : ?>
                    <a class="feature-image" href="<?php the_permalink() ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                  <h2>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                    <span>
                      Written in <?php the_category(',') ?> on <?php the_time('F j, Y'); ?>
                    </span>
                  </h2>
                  <!-- <div class="trimmed-content">
                    <?php
                      $content = get_the_content();
                      $trimmed_content = wp_trim_words( $content, 14 );
                      echo $trimmed_content;
                    ?>
                  </div> -->
                </article>
              </li>

            <?php endwhile; else: ?>

              <li>
                <article class="entry">
                  <div class="try-search">
                    <h3 class="main-title">Sorry, no posts found. Wanna try again?</h3>
                    <div class="search search-wide main-search">
                      <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" class="form-search">
                        <div class="input-prepend">
                          <button type="submit" id="searchsubmit" class="btn">
                            <i class="fa fa-search"></i>
                          </button>
                          <input type="text" class="search-query" name="s" id="s" placeholder="Search Superior Develop">
                        </div>
                      </form>
                    </div>
                  </div>
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

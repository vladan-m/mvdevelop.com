<?php get_header(); ?>

  <main role="main" class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <article class="entry">
            <div class="try-search">
              <h3 class="main-title">WOW! You've found 404 page.</h3>
              <p>The content you are looking for does not exist. Wanna try again?</p>
              <div class="search search-wide main-search">
                <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" class="form-search">
                  <div class="input-prepend">
                    <button type="submit" id="searchsubmit" class="btn">Search</button>
                    <input type="text" class="search-query" name="s" id="s" placeholder="Search Superior Develop">
                  </div>
                </form>
              </div>
              <br>
              <p>Or, go to <a href="<?php bloginfo('url'); ?>">home page</a></p>
            </div>
          </article>

        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

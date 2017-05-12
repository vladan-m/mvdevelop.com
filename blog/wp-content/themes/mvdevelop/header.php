<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="<?php bloginfo('charset'); ?>">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php if (is_home () ) { bloginfo('name'); echo ' - '; bloginfo('description'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); } elseif (is_single() ) { single_post_title();} elseif (is_page() ) { single_post_title();} elseif (is_search()) { _e("Search Result");} else { wp_title('',true); } ?></title>

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.min.css"> -->

  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/../css/styles.min.css">

  <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/bower_components/html5shiv/dist/html5shiv.min.js"></script>
  <![endif]-->

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- For everything else. Regular 16x16 px favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url'); ?>/../favicon.ico">
  <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152-precomposed.png">
  <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
  <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120-precomposed.png">
  <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
  <!-- For the iPad mini and the first- and second-generation iPad on iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76-precomposed.png">
  <!-- For the iPad mini and the first- and second-generation iPad on iOS ≤ 6: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png">
  <!-- For Android with high-resolution display -->
  <link rel="shortcut icon" sizes="196x196" href="<?php bloginfo('url'); ?>/../icon.png">

  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12319039-5', 'mvdevelop.com');
  ga('send', 'pageview');

</script>
</head>

<body class="mob-menu">


  <header id="header" class="header">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-4">
          <div class="logo">
            <h2>
              <a title="MV Develop - Web Development Company" href="index.html"><img src="<?php bloginfo('url'); ?>/../images/mv-develop-logo.png" alt="MV Develop - Web Development Company" title="MV Develop - Web Development Company" width="200" height="40"></a>
            </h2>
          </div>
        </div>

        <div class="col-sm-8">
          <div class="navbar-header">
            <button class="mob-menu-trigger btn" type="button">
              <span class="icon-bar"></span>
            </button>
          </div>

          <nav id="nav" class="nav-holder mob-menu-nav mob-menu-vertical mob-menu-right">
            <?php wp_nav_menu( array( 'menu' => 'Main nav', 'menu_class' => 'nav navbar-nav pull-right', 'theme_location' => 'primary' ) ); ?>
          </nav>
        </div>

      </div>
    </div>
  </header>

  <div class="convincer convincer-blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1>MV Develop Blog</h1>
          <h5>
            MV Develop builds cutting-edge websites using only latest techniques such as HTML5 and CSS3 to deliver better websites compliant to Web standards
          </h5>
        </div>
      </div>
    </div>
    <div class="blog-nav-wrap">
      <div class="blog-nav">
        <nav id="nav" class="nav-holder">
          <?php wp_nav_menu( array( 'menu' => 'Secondary nav', 'menu_class' => 'nav navbar-nav', 'theme_location' => 'secondary' ) ); ?>
        </nav>
      </div>
    </div>
  </div>

    <!-- <nav class="mob-menu-nav mob-menu-vertical mob-menu-left">
      <ul>
        <li class="main-search">
          <form role="search" method="get" id="searchformheader" action="<?php bloginfo('url'); ?>" class="form-search">
            <div class="input-prepend">
              <button type="submit" id="searchsubmitheader" class="btn">
                <i class="fa fa-search"></i>
              </button>
              <input type="text" class="search-query" name="s" id="sheader" placeholder="Search Superior Develop">
            </div>
          </form>
        </li>
        <li class="nav-title">Topics</li>
        <li>
          <?php wp_nav_menu( array( 'menu' => 'Main nav', 'theme_location' => 'primary' ) ); ?>
        </li>
        <li class="nav-title">Pages</li>
        <li class="about">
          <a href="<?php bloginfo('url'); ?>/about-us/"><i class="fa fa-info-circle"></i> About</a>
        </li>
        <li class="archive">
          <a href="<?php bloginfo('url'); ?>/archive/"><i class="fa fa-folder-open-o"></i> Archive</a>
        </li>
        <li class="contact">
          <a href="<?php bloginfo('url'); ?>/contact-us/"><i class="icontopics-contact"></i> Contact Us</a>
        </li>
      </ul>
    </nav> -->

    <!-- <header class="header">
      <section class="top-header">

        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
              <div class="logo">
                <h1><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Superior Develop" title="Superior Develop" width="136" height="83"></a></h1>
              </div>
            </div>
            <div class="col-md-8">
              <div class="social-list">
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>/feed/rss2/" target="_blank" title="Subscribe to our RSS"><i class="fa fa-rss"></i></a></li>
                  <li><a href="http://newsletter" target="_blank" title="Subscribe to our Email Newsletter"><i class="icon-mail"></i></a></li>
                  <li><a href="https://twitter.com/superior_dev" target="_blank" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/superiordevelop" target="_blank" title="Join us on Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://github.com/superior-develop" target="_blank" title="Fork us on GitHub"><i class="fa fa-github"></i></a></li>
                </ul>
              </div>

              <div class="main-search">
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
          </div>
        </div>

      </section>

      <div class="topics-list">
        <?php wp_nav_menu( array( 'menu' => 'Main nav', 'menu_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
      </div>
    </header> -->

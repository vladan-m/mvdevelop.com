<div id="subcontent">

  <div class="sideboxintro">

    <div class="subscribe section">
      <form  action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=1983007', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
              <p>
          <label align="center">Sign up for our <strong>Free Daily Email Newsletter</strong></label>
        </p>
        <p>
          <img src="http://127.0.0.1/wp-content/themes/blogsdna/images/letter.png" width="22" height="22" style="float:left; margin:0px 15px 0 5px" />
          <input type="text" style="background:#FFFF99;" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Address';}" maxlength="100" size="25" value="Enter Your Email Address" name="email" id="email" />
          <input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1983007" name="url"/>
          <input type="hidden" value="BlogsDNA" name="title"/>
          <input type="hidden" name="loc" value="en_US"/>
          <input type="submit" value="Sign Up" name="Subscribe" id="feed-submit" />
        </p>
      </form>
    </div><!-- subscribe section end -->

    <div id="addrss">
      <p>
        <a href="http://feeds.feedburner.com/BlogsDna" rel="nofollow">
          <img src="http://127.0.0.1/wp-content/themes/blogsdna/images/feed-icon.png" width="22" height="22" style="float:left; margin:0px 15px 0 5px" />
        </a>
        <label>Subscribe To Our <strong>RSS Feeds</strong></label>
      </p>
            <p>Add Our Headlines To Your Online News Reader</p>
            <p>
              <a href="http://feeds.feedburner.com/BlogsDna" rel="nofollow" /><img src="http://127.0.0.1/wp-content/themes/blogsdna/images/rss.gif"/></a>
        <a href="http://fusion.google.com/add?source=atgs&feedurl=http://feeds.feedburner.com/BlogsDna" rel="nofollow"/><img src="http://127.0.0.1/wp-content/themes/blogsdna/images/google.gif"/></a>
        <a href="http://www.netvibes.com/subscribe.php?type=rss&url=http://feeds.feedburner.com/BlogsDna" rel="nofollow" /><img src="http://127.0.0.1/wp-content/themes/blogsdna/images/netvibes.gif"/></a>
        <a href="http://www.bloglines.com/sub/http://feeds.feedburner.com/BlogsDna" rel="nofollow" /><img src="http://127.0.0.1/wp-content/themes/blogsdna/images/bloglines.gif"/></a>
        <a href="http://add.my.yahoo.com/rss?url=http://feeds.feedburner.com/BlogsDna" rel="nofollow" /><img src="http://127.0.0.1/wp-content/themes/blogsdna/images/yahoo.gif"/></a>
      </p>
    </div><!-- addrss end -->

  </div><!-- subscribe end -->

  <div class="connect">
    <h4>GET CONNECTED</h4>
    <ul>
      <li>Twitter</li>
      <li>StumbleUpon</li>
      <li>Digg</li>
    </ul>
  </div>

  <div class="popular_post">
    <h4>MOST POPULAR POSTS</h4>
    <ul><?php get_archives('postbypost', 10); ?></ul>
  </div>

  <div class="popular_post">
    <h4>MOST RECENT POSTS</h4>
    <ul><?php get_archives('postbypost', 10); ?></ul>
  </div>

  <div class="sub_sec"><!--sub section-->
    <div class="xeiro">
      <h4>XEIRO WORDPRESS THEME</h4>
    </div>
  </div>

</div>

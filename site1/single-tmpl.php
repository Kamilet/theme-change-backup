<?php while ( have_posts() ): the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="post-inner group">

      <?php hu_get_template_part('parts/single-heading'); ?>
		
      <?php if( get_post_format() ) { get_template_part('parts/post-formats'); } ?>

      <div class="clear"></div>

      <div class="<?php echo implode( ' ', apply_filters( 'hu_single_entry_class', array('entry','themeform') ) ) ?>">
        <div class="entry-inner">
          <?php the_content(); ?>
          <nav class="pagination group">
            <?php
              //Checks for and uses wp_pagenavi to display page navigation for multi-page posts.
              if ( function_exists('wp_pagenavi') )
                wp_pagenavi( array( 'type' => 'multipart' ) );
              else
                wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','hueman'),'after'=>'</div>'));
            ?>
          </nav><!--/.pagination-->
        </div>

        <?php do_action( 'hu_after_single_entry_inner' ); ?>

        <div class="clear"></div>
      </div><!--/.entry-->

    </div><!--/.post-inner-->
  </article><!--/.post-->
<?php endwhile; ?>

<div class="clear"></div>

<!-- 打赏模块 -->
<div class="reward">
	<div class="reward-button">
		赏 <span class="reward-code"><span class="alipay-code"><img class="alipay-img" src="http://www.kamilet.cn/wp-content/uploads/2017/09/r-weixin.jpg"><b>微信打赏</b></span><span class="wechat-code"><img class="wechat-img" src="http://www.kamilet.cn/wp-content/uploads/2017/09/r-zhifubao.jpg"><b>支付宝打赏</b></span></span>
	</div>
	<p class="reward-notice">
		感谢您的支持！<br/><br/>文章来源：<a href="http://www.kamilet.cn/">卡米雷特的小站</a>（<a href="http://www.kamilet.cn/">www.kamilet.cn</a>）转载请注明出处。
	</p>
</div>

<?php the_tags('<p class="post-tags"><span>'.__('Tags:','hueman').'</span> ','','</p>'); ?>

<?php if ( ( hu_is_checked( 'author-bio' ) ) && get_the_author_meta( 'description' ) ): ?>
  <div class="author-bio">
    <div class="bio-avatar"><?php echo get_avatar( get_the_author_meta('user_email'),'128' ); ?></div>
    <p class="bio-name"><?php the_author_meta('display_name'); ?></p>
    <p class="bio-desc"><?php the_author_meta('description'); ?></p>
    <div class="clear"></div>
  </div>
<?php endif; ?>

<?php if ( 'content' == hu_get_option( 'post-nav' ) ) { get_template_part( 'parts/post-nav' ); } ?>
<script>cambrian.render('body')</script><br/><!--百度熊掌号-->
<?php if ( apply_filters( 'hu_is_related_posts_enabled', '1' != hu_get_option( 'related-posts' ) ) ) { hu_get_template_part( 'parts/related-posts' ); } ?>

<?php if ( hu_is_checked('post-comments') ) { comments_template('/comments.php',true); } ?>

<div class="hideonpc">

</div>
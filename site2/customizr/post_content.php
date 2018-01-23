<?php
/**
 * The template for displaying the single post content
 *
 * In WP loop
 */
?>
<article <?php echo czr_fn_get_the_singular_article_selectors() ?> <?php czr_fn_echo( 'element_attributes' ) ?>>
  <?php do_action( '__before_content' ) ?>
  <?php
  /* heading */
  czr_fn_render_template( 'content/singular/headings/regular_post_heading' );
  ?>
  <div class="post-entry tc-content-inner">
    <section class="post-content entry-content <?php czr_fn_echo( 'element_class' ) ?>" >
      <?php
      czr_post_format_part();
      the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' , 'customizr' ) );
      ?>
      <footer class="post-footer clearfix">
        <?php
          czr_fn_link_pages();
        ?>
        <div class="row entry-meta justify-content-between align-items-center">
          <?php if ( czr_fn_is_registered_or_possible('post_metas') && czr_fn_get_property( 'tag_list', 'post_metas' ) ) : ?>
          <div class="post-tags col-xs-12 col-sm-auto col-sm">
            <ul class="tags">
              <?php czr_fn_echo( 'tag_list', 'post_metas' ) ?>
				<img class="alignnone size-full wp-image-149 tc-smart-load-skip tc-smart-loaded" src="http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01.jpg" alt="安利网购" title="安利网购" style="display: inline;" sizes="(max-width: 1280px) 100vw, 1280px" srcset="http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01.jpg 1280w, http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01-300x169.jpg 300w, http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01-768x432.jpg 768w, http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01-1024x576.jpg 1024w, http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01-1110x624.jpg 1110w, http://www.grucy.cn/wp-content/uploads/2017/08/index-main-01-528x297.jpg 528w" width="1280" height="720">
            </ul>
          </div>
          <?php endif; ?>
        <?php
          if ( czr_fn_is_registered_or_possible('social_share') ) :
        ?>
          <div class="post-share col-xs-12 col-sm-auto col-sm">
              <!-- fake need to have social links somewhere -->
              <?php czr_fn_render_template( 'modules/common/social_block', array( 'model_id' => 'social_share' ) ) ?>
          </div>
        <?php
          endif
        ?>
        </div>
      </footer>
    </section><!-- .entry-content -->
  </div><!-- .post-entry -->
  <?php do_action( '__after_content' ) ?>
</article>
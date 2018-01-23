		<?php
		/**
		 *  The template for displaying Single.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		?>
			<section class="wide-nav">
				<div class="wrapper">
					<a name="main" id="main"><h3>
						<?php the_title(); ?>
					</h3></a><!--/h3-->
				</div><!--/div .wrapper-->
			</section><!--/section .wide-nav-->
		</header>
		<section id="content">
			<div class="wrapper cf">
				<div id="posts">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					?>
					<div class="post">
						<div class="post-meta">
							<span>
								<?php echo get_the_date(); ?> - <?php _e('Posted by:','lawyeria-lite'); ?> <?php the_author_posts_link(); ?> - <?php _e('In category:','lawyeria-lite'); ?> <?php the_category(', '); ?> - <a href="#comments-template" title="<?php comments_number( __('暂无评论','lawyeria-lite'), __('1条评论','lawyeria-lite'), __('%条评论','lawyeria-lite') ); ?>"><?php comments_number( '暂无评论', '1条评论', '%条评论' ); ?></a>
							</span><!--/span-->
						</div><!--/div .post-meta-->
						<?php
							if ( $feat_image != NULL ) { ?>
								<div class="post-image">
									<img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
								</div><!--/div .post-image-->
							<?php } ?>
						<div class="post-excerpt">
							<?php the_content(); ?>
						</div><!--/div .post-excerpt-->
						<?php
							wp_link_pages( array(
								'before'      => '<div class="post-links"><span class="post-links-title">' . __( 'Pages:', 'lawyeria-lite' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
						?>
<span style="color: rgb(38, 38, 38);"></br>更多精彩文章请关注</span><a href="http://www.51huidu.com/" target="_self" _href="http://www.51huidu.com/" style="color: rgb(38, 38, 38); text-decoration: underline;"><span style="color: rgb(38, 38, 38);">慧读国际青少儿英语成都校区</span></a><span style="color: rgb(38, 38, 38);">，</span><a href="http://www.51huidu.com/" target="_self" _href="http://www.51huidu.com/" style="color: rgb(38, 38, 38); text-decoration: underline;"><span style="color: rgb(38, 38, 38);">成都少儿英语</span></a><span style="color: rgb(38, 38, 38);">高端品牌。<br></span>
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
						<div class="post-tags">
							<?php the_tags('<span>标签：</span> '); ?>
						</div><!--/div .post-tags-->
<hr>
						<div class="single-navigation cf">
							<?php next_post_link('%link', '下一篇', true); ?>
							<?php previous_post_link('%link', '上一篇', true); ?>
						</div><!--/div .single-navigation .cf-->
						<?php comments_template(); ?>
					</div><!--/div .post-->
					<?php endwhile; else: ?>
                    	<p><?php _e('抱歉，您查找的内容不存在。', 'lawyeria-lite'); ?></p>
                	<?php endif; ?>
				</div><!--/div #posts-->
				<?php get_sidebar(); ?>
			</div><!--/div .wrapper-->
		</section><!--/section #content-->
		<?php get_footer(); ?>
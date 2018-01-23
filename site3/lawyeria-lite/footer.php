		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package lawyeria-lite
		 */
		?>
		
<style>
.submenufooter {
    background-color:#f5f4f9
}
</style>
<div class="submenufooter">
			<div class="wrapper cf">
			    <nav>
    				<div class="openresponsivemenu">
    					<?php _e('Open Menu','lawyeria-lite'); ?>
    				</div><!--/div .openresponsivemenu-->
    				<div class="container-menu cf">
        				<?php
        					wp_nav_menu(
        					    array(
        						        'theme_location' => 'header-menu',
        							)
        						);
        					?>
    				</div><!--/div .container-menu .cf-->
    			</nav><!--/nav .navigation-->
		    </div>
</div>

<footer id="footer">


			<div class="wrapper cf">
				<div class="footer-margin-left cf">
					<?php
						if ( is_active_sidebar( 'footer-sidebar' ) ) {
							dynamic_sidebar( 'footer-sidebar' );
						} else {
							echo '<div class="footer-box">'.__('The sidebar is not active.','lawyeria-lite').'</div>';
						}
					?>
				</div><!--/div .footer-margin-left .cf-->
			</div><!--/div .wrapper .cf-->
    </div>
</div>
</footer><!--/footer #footer-->
		<?php wp_footer(); ?>

<style>
.cpbg {
    background-color:#282828
}
</style>
<div class="cpbg">
<p style="text-align: center;">
    <span style="font-size: 12px; color: rgb(165, 165, 165);"><br/><a href="http://www.51huidu.com/links/" target="_self" style="text-decoration: none; font-size: 12px; color: rgb(165, 165, 165);">友情链接</a> ｜ </span><span style="font-size: 12px; color: rgb(165, 165, 165);"><a href="http://www.huiduguoji.com.cn/" target="_self" style="text-decoration: none; font-size: 12px; color: rgb(165, 165, 165);">慧读国际少儿英语北京总部</a> ｜ </span><span style="font-size: 12px; color: rgb(165, 165, 165);"><a href="http://www.kamilet.cn/" target="_blank" style="text-decoration: none; font-size: 12px; color: rgb(165, 165, 165);">设计师交流</a></span>
</p>
<p style="text-align: center;">
    <a href="http://www.miitbeian.gov.cn/" rel="nofollow" target="_blank" style="font-size: 12px; color: rgb(165, 165, 165); text-decoration: underline;"><br/><span style="font-size: 12px; color: rgb(165, 165, 165);">蜀ICP备17036073号</span></a><span style="font-size: 12px; color: rgb(165, 165, 165);"><br/></span><br/>
</p>
<p style="text-align: center;">
    <span style="text-decoration: none; font-size: 12px; color: rgb(165, 165, 165);">Copyright 2017 © 成都慧读英才教育咨询有限公司<br/></span><br/>
</p>
</div>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ccc31e56704fe838eca44627905d0dc1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script><!--百度商桥-->

	</body>
</html>
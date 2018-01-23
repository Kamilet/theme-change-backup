<?php
/**
 *  The template for displaying Header.
 *
 *  @package lawyeria-lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="<?php echo get_template_directory_uri();?>/content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta charset="UTF-8">
		<title><?php wp_title('|', true, 'right'); ?></title>

		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
		<![endif]-->	

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wide-header">
				<div class="wrapper cf">
					<div class="header-left cf">
						
                            <?php
                            if ( get_theme_mod( 'lawyeria_lite_header_logo', get_template_directory_uri() .'/images/header-logo.png' ) ) {
								echo '<a class="logo" href="'.home_url().'" title="'.esc_attr( get_bloginfo( 'name' ) ).'">';
									echo '<img src="'. get_theme_mod( 'lawyeria_lite_header_logo', get_template_directory_uri() .'/images/header-logo.png' ) .'" alt="'. get_bloginfo( 'name' ) .'" title="'. get_bloginfo( 'name' ) .'" />';
								echo '</a>';	
                            }
							else {

								echo '<h1 class="site-title">';
									echo '<a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a>';
								echo '</h1>';
								echo '<h2 class="site-description">'.get_bloginfo( 'description' ).'</h2>';
									

							}
                            ?>
					</div><!--/div .header-left .cf-->
					<div class="header-contact">
    					<?php
    						if ( get_theme_mod( 'lawyeria_lite_header_title','Contact us now' ) ) {
    							echo get_theme_mod( 'lawyeria_lite_header_title','Contact us now' );
    						}
    					?>
    					<br />
    					<span>
    						<?php
    							if ( get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' )) { ?>
                                    <a href="http://www.51huidu.com/contact/#main" title="<?php echo get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' ); ?>"><?php echo get_theme_mod( 'lawyeria_lite_header_subtitle','+1-888-846-1732' ); ?></a>
    							<?php }
    						?>
    					</span><!--/span-->
					</div><!--/.header-contact-->
				</div><!--/div .wrapper-->
			</div><!--/div .wide-header-->
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
			<div class="wrapper">
			<?php 
					$has_header = get_header_image(); 
					if( $has_header ) :
					?>
						<img src="<?php header_image(); ?>" alt="" class="lawyeria-lite-header-image" />
				<?php endif; ?>
			</div>	


<script src="http://www.51huidu.com/js/jquery-1.11.3.min.js"></script>

<style type="text/css">
	*{margin:0;padding:0;}
	img{display:block;}
	.banner {width:1350px;height:450px;margin:0% auto;background:#cccccc;overflow:hidden;position:relative;}
	.banner ul { position:absolute;left:0;top:0;z-index:100;}
	.banner ul li { display:block;width:1350px;height:450px;float:left;}
	.banner .con { position:absolute; left:48%; bottom:3%;z-index:101; }
	.banner .con a { float:left; margin-right:8px; display:block; width:8px; height:8px; border-radius:100%; background:#000;z-index:101;}
	.banner .con a.active { background:#fff;}
	.banner .u { width:0px;height:0px;background:rgba(255,255,255,0.5); display:none;}
	.banner .left { position:absolute; top:50%;left:3%;z-index:200;}
	.banner .right { position:absolute; top:50%;right:3%;z-index:200;}
</style>
</head>
<body>

<div class="hideonphone">
<div class="banner">
	<ul>
    	<li><img src="http://outb2o3fz.bkt.clouddn.com/17-10-24/73930247.jpg" /></li>
        <li><img src="http://outb2o3fz.bkt.clouddn.com/17-10-24/20198233.jpg" /></li>
        <li><img src="http://outb2o3fz.bkt.clouddn.com/17-10-24/75035579.jpg" /></li>
        <li><a href="http://www.51huidu.com/demo/#main"><img src="http://outb2o3fz.bkt.clouddn.com/17-10-24/94757713.jpg" /></a></li>
		<li><a href="http://www.51huidu.com/event-2017-time-management/#main"><img src="http://outb2o3fz.bkt.clouddn.com/17-10-24/46969519.jpg" /></a></li>

    </ul>
    
    <div class="con"></div>
    <div class="u left">◁</div>
    <div class="u right">▷</div>
    
</div>
</div>


<script type="text/javascript">
	var index = 0;
	var imgnum = $('.banner ul li').length;
	var nmun='';
	var imgwidth = $('.banner ul li').width();
	var allimgwidth = imgwidth*imgnum;
	$('.banner ul').css('width',allimgwidth);
	
	
	$('.banner').hover(function(){
		clearInterval(p);
		$('.banner .u').fadeIn();
	},function(){
		pic();
		$('.banner .u').fadeOut();
		});
	
	function pic(){
		
		p=setInterval(function(){
			index++;
			
			if(index>=imgnum){
				index=0;
			}
			
			selectimg(index);
	
		},2000);
		
	}
	
	function selectimg(index){
		$('.banner ul').animate({'margin-left':'-' + imgwidth*index + 'px'},600);
		$('.con a').eq(index).addClass('active').siblings('a').removeClass('active');
	}
	
	
	$('.banner .left').click(function(){
		index-=1;
		if(index<0){
				index=imgnum-1;
			}
		selectimg(index);
		
	});
	
	$('.banner .right').click(function(){
		index+=1;
		if(index>imgnum-1){
				index=0;
			}
		selectimg(index);
		
	});
	
	for(var ni=0;ni<imgnum;ni++){
		nmun +="<a href='javascript:;'></a>";
	}
	$('.banner .con').html(nmun);
	$('.banner .con a').eq(0).addClass('active');
	
	$('.con a').each(function(index){
		$(this).click(function(){
			$('.banner ul').animate({'margin-left':'-' + imgwidth*index + 'px'},600);
			$('.con a').eq(index).addClass('active').siblings('a').removeClass('active');
		});
	});	
	
	pic();
</script><!--banner-->

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script><!--百度推送-->

<script>(function(){
var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?8ba7bc3a0437c4363c79e33fd0c1b4fd":"https://jspassport.ssl.qhimg.com/11.0.1.js?8ba7bc3a0437c4363c79e33fd0c1b4fd";
document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script><!--360推送-->
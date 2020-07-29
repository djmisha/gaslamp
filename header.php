<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>
	<?php do_action('et_head_meta'); ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php $template_directory_uri = get_template_directory_uri(); ?>


<?php wp_head(); ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2343863-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-2343863-1');
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NZV7CNN');</script>
<!-- End Google Tag Manager -->

<!-- Google Ads -->

<script data-ad-client="ca-pub-4112974522007286" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- // Google Ads -->

<!-- MAIL CHIMP POP UP FORMS -->

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/364b92d0aa2995bc92b5c9ddc/3638ac1cefdb04742f40f67f8.js");</script>

<!-- // MAIL CHIMP POP UP FORMS -->


<script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<?php  if (is_page(21766)) {
    /* PROMENADE PAGE - ADD SLIDESHOWS*/
    echo '<!-- Prom Slideshow -->';
    echo '<link rel=\'stylesheet\' id=\'twenty-css\'  href=\'https://www.gaslamp.org/wp-content/themes/Gaslampnew/js/twenty/twentytwenty.css?ver=5.2.4\' type=\'text/css\' media=\'all\' />';
    echo '<script type=\'text/javascript\' src=\'https://www.gaslamp.org/wp-content/themes/Gaslampnew/js/twenty/jquery.twentytwenty.js?ver=1.0\'></script>';
    echo '<script type=\'text/javascript\' src=\'https://www.gaslamp.org/wp-content/themes/Gaslampnew/js/twenty/jquery.event.move.js?ver=1.0\'></script>';
    echo '<script>(function($) {$(function() {$(".twentytwenty-container").twentytwenty(); }); })(jQuery);</script>';
}
?>

<?php  if (is_page(22409)) : // Parking Page Tracker?>
	<script>for(var params={tagId:"bdd44beb2fb3b0b0402dd57b4fe5db8c",pings:6,interval:10,partners:true},defaults={key:encodeURIComponent(window.location.origin+window.location.pathname),origin:encodeURIComponent(window.location.origin+window.location.pathname),pings:1,interval:10,amount:1},i=0;i<Object.keys(defaults).length;i++){var key=Object.keys(defaults)[i];void 0===params[key]&&(params[key]=defaults[key])}var getQParam=function(t){var e=t.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]"),n=new RegExp("[\\?&]"+e+"=([^&#]*)").exec(location.search);return null===n?"":decodeURIComponent(n[1].replace(/\+/g," "))};params.tr=getQParam("tr");var f=document.createElement("iframe"),args=Object.keys(params).filter(function(t){return params[t]}).map(function(t){return t+"="+params[t]}),queryString="?"+args.join("&");f.setAttribute("src","https://analytics.rtbiq.com/opq3.html"+queryString),f.setAttribute("style","visibility:hidden;position:absolute;width:0;height:0"),document.body.appendChild(f);var displayMessage=function(t){t.data&&"trigger-1p"===t.data&&hostOpq(params)};window.addEventListener("message",displayMessage);var getCookieData=function(t){try{for(var e=document.cookie.split(";"),n=0;n<e.length;n++){for(var i=e[n];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(t))return i.substring(t.length+1,i.length)}return null}catch(t){return null}},getSessionData=function(t){try{return sessionStorage.getItem(t)}catch(t){return null}},ping=function(t){void 0===window.optiqCount&&(window.optiqCount=0);var e=Object.assign({},t);if(0<window.optiqCount){var n=parseInt(window.optiqCount*t.interval,10);e.key+="-"+n+"seconds"}e.c=e.iq_s,e.ev=e.key;var i="?"+Object.keys(e).filter(function(t){return e[t]}).map(function(t){return t+"="+e[t]}).join("&"),a=new XMLHttpRequest;a.open("GET","//platform.rtbiq.com/events/"+i,!0),a.send(),1<t.pings&&t.tr&&(window.optiqCount+=1,window.optiqCount<t.pings&&setTimeout(ping,1e3*t.interval,t))},hostOpq=function(t){if(getQParam("tr")){var e=getQParam("tr");try{sessionStorage.setItem("tr",e)}catch(t){}try{var n=new Date;attributionPeriod=3,n.setTime(n.getTime()+24*attributionPeriod*60*60*1e3);var i="expires="+n.toUTCString();document.cookie="iq_p="+e+"; path=/;"+i}catch(t){}}else if(getSessionData("tr"))e=sessionStorage.getItem("tr");else e=getCookieData("iq_p");var a=getCookieData("iq_s")||"";if(!a)for(var r="abcdef0123456789",o=0;o<20;o++)a+=r.charAt(Math.floor(Math.random()*r.length)),document.cookie="iq_s="+a+"; path=/";t.iq_s=a,t.tr=e,ping(t)};</script>
<?php endif; ?>






</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZV7CNN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


	<a href="#skiptomaincontent" style="display:none;">Skip to main content</a>
	<div id="page-container">
<?php
    if (is_page_template('page-template-blank.php')) {
        return;
    }

    $et_secondary_nav_items = et_divi_get_top_nav_items();

    $et_phone_number = $et_secondary_nav_items->phone_number;

    $et_email = $et_secondary_nav_items->email;

    $et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;

    $show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;

    $et_secondary_nav = $et_secondary_nav_items->secondary_nav;

    $et_top_info_defined = $et_secondary_nav_items->top_info_defined;

    $et_slide_header = 'slide' === et_get_option('header_style', 'left') || 'fullscreen' === et_get_option('header_style', 'left') ? true : false;
?>

	<?php if ($et_top_info_defined && ! $et_slide_header || is_customize_preview()) : ?>
		<div id="top-header"<?php echo $et_top_info_defined ? '' : 'style="display: none;"'; ?>>
			<div class="container clearfix">

			<?php if ($et_contact_info_defined) : ?>

				<div id="et-info">
				<?php if ('' !== ($et_phone_number = et_get_option('phone_number'))) : ?>
					<span id="et-info-phone"><?php echo et_sanitize_html_input_text($et_phone_number); ?></span>
				<?php endif; ?>

				<?php if ('' !== ($et_email = et_get_option('header_email'))) : ?>
					<a href="<?php echo esc_attr('mailto:' . $et_email); ?>"><span id="et-info-email"><?php echo esc_html($et_email); ?></span></a>
				<?php endif; ?>

				<?php
                if (true === $show_header_social_icons) {
                    get_template_part('includes/social_icons', 'header');
                } ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined?>

				<div id="et-secondary-menu">
				<?php
                    if (! $et_contact_info_defined && true === $show_header_social_icons) {
                        get_template_part('includes/social_icons', 'header');
                    } elseif ($et_contact_info_defined && true === $show_header_social_icons) {
                        ob_start();

                        get_template_part('includes/social_icons', 'header');

                        $duplicate_social_icons = ob_get_contents();

                        ob_end_clean();

                        printf(
                            '<div class="et_duplicate_social_icons">
								%1$s
							</div>',
                            $duplicate_social_icons
                        );
                    }

                    if ('' !== $et_secondary_nav) {
                        echo $et_secondary_nav;
                    }

                    et_show_cart_total();
                ?>
				</div> <!-- #et-secondary-menu -->

			</div> <!-- .container -->
		</div> <!-- #top-header -->
	<?php endif; // true ==== $et_top_info_defined?>

	<?php if ($et_slide_header || is_customize_preview()) : ?>
		<div class="et_slide_in_menu_container">
			<?php if ('fullscreen' === et_get_option('header_style', 'left') || is_customize_preview()) { ?>
				<span class="mobile_menu_bar et_toggle_fullscreen_menu"></span>
			<?php } ?>

			<?php
                if ($et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option('show_search_icon', true) || class_exists('woocommerce') || is_customize_preview()) { ?>
					<div class="et_slide_menu_top">

					<?php if ('fullscreen' === et_get_option('header_style', 'left')) { ?>
						<div class="et_pb_top_menu_inner">
					<?php } ?>
			<?php }

                if (true === $show_header_social_icons) {
                    get_template_part('includes/social_icons', 'header');
                }

                et_show_cart_total();
            ?>
			<?php if (false !== et_get_option('show_search_icon', true) || is_customize_preview()) : ?>
				<?php if ('fullscreen' !== et_get_option('header_style', 'left')) { ?>
					<div class="clear"></div>
				<?php } ?>
				<form role="search" method="get" class="et-search-form" action="<?php echo esc_url(home_url('/')); ?>">
					<?php
                        printf(
                '<input type="search" class="et-search-field" placeholder="%1$s" placeholder="%2$s" name="s" title="%3$s" />',
                esc_attr__('Search &hellip;', 'Divi'),
                get_search_query(),
                esc_attr__('Search for:', 'Divi')
            );
                    ?>
					<button type="submit" id="searchsubmit_header"></button>
				</form>
			<?php endif; // true === et_get_option( 'show_search_icon', false )?>

			<?php if ($et_contact_info_defined) : ?>

				<div id="et-info">
				<?php if ('' !== ($et_phone_number = et_get_option('phone_number'))) : ?>
					<span id="et-info-phone"><?php echo et_sanitize_html_input_text($et_phone_number); ?></span>
				<?php endif; ?>

				<?php if ('' !== ($et_email = et_get_option('header_email'))) : ?>
					<a href="<?php echo esc_attr('mailto:' . $et_email); ?>"><span id="et-info-email"><?php echo esc_html($et_email); ?></span></a>
				<?php endif; ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined?>
			<?php if ($et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option('show_search_icon', true) || class_exists('woocommerce') || is_customize_preview()) { ?>
				<?php if ('fullscreen' === et_get_option('header_style', 'left')) { ?>
					</div> <!-- .et_pb_top_menu_inner -->
				<?php } ?>

				</div> <!-- .et_slide_menu_top -->
			<?php } ?>

			<div class="et_pb_fullscreen_nav_container">
				<?php
                    $slide_nav = '';
                    $slide_menu_class = 'et_mobile_menu';

                    $slide_nav = wp_nav_menu(array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ));
                    $slide_nav .= wp_nav_menu(array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ));
                ?>

				<ul id="mobile_menu_slide" class="<?php echo esc_attr($slide_menu_class); ?>">

				<?php
                    if ('' == $slide_nav) :
                ?>
						<?php if ('on' == et_get_option('divi_home_link')) { ?>
							<li <?php if (is_home()) {
                    echo('class="current_page_item"');
                } ?>><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'Divi'); ?></a></li>
						<?php }; ?>

						<?php show_page_menu($slide_menu_class, false, false); ?>
						<?php show_categories_menu($slide_menu_class, false); ?>
				<?php
                    else :
                        echo($slide_nav);
                    endif;
                ?>

				</ul>
			</div>
		</div>
	<?php endif; // true ==== $et_slide_header?>

		<header id="main-header" data-height-onload="<?php echo esc_attr(et_get_option('menu_height', '66')); ?>">
			<div class="container clearfix et_menu_container">
			<?php
                $logo = ($user_logo = et_get_option('divi_logo')) && '' != $user_logo
                    ? $user_logo
                    : $template_directory_uri . '/images/logo.png';
            ?>
				<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" id="logo" data-height-percentage="<?php echo esc_attr(et_get_option('logo_height', '54')); ?>" />
					</a>
				</div>
				<div id="et-top-navigation" data-height="<?php echo esc_attr(et_get_option('menu_height', '66')); ?>" data-fixed-height="<?php echo esc_attr(et_get_option('minimized_menu_height', '40')); ?>">
					<?php if (! $et_slide_header || is_customize_preview()) : ?>
						<nav id="top-menu-nav">
						<?php
                            $menuClass = 'nav';
                            if ('on' == et_get_option('divi_disable_toptier')) {
                                $menuClass .= ' et_disable_top_tier';
                            }
                            $primaryNav = '';

                            $primaryNav = wp_nav_menu(array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ));

                            if ('' == $primaryNav) :
                        ?>
							<ul id="top-menu" class="<?php echo esc_attr($menuClass); ?>">
								<?php if ('on' == et_get_option('divi_home_link')) { ?>
									<li <?php if (is_home()) {
                            echo('class="current_page_item"');
                        } ?>><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'Divi'); ?></a></li>
								<?php }; ?>

								<?php show_page_menu($menuClass, false, false); ?>
								<?php show_categories_menu($menuClass, false); ?>
							</ul>
						<?php
                            else :
                                echo($primaryNav);
                            endif;
                        ?>
						</nav>
					<?php endif; ?>

					<?php
                    if (! $et_top_info_defined && (! $et_slide_header || is_customize_preview())) {
                        et_show_cart_total(array(
                            'no_text' => true,
                        ));
                    }
                    ?>

					<?php if ($et_slide_header || is_customize_preview()) : ?>
						<span class="mobile_menu_bar et_pb_header_toggle et_toggle_<?php echo esc_attr(et_get_option('header_style', 'left')); ?>_menu"></span>
					<?php endif; ?>

					<?php if ((false !== et_get_option('show_search_icon', true) && ! $et_slide_header) || is_customize_preview()) : ?>
					<div id="et_top_search">
						<span id="et_search_icon"></span>
					</div>
					<?php endif; // true === et_get_option( 'show_search_icon', false )?>

					<?php do_action('et_header_top'); ?>
				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="<?php echo esc_url(home_url('/')); ?>">
					<?php
                        printf(
                        '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
                        esc_attr__('Search &hellip;', 'Divi'),
                        get_search_query(),
                        esc_attr__('Search for:', 'Divi')
                    );
                    ?>
					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->

		<div id="et-main-area">
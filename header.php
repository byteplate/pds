<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gaston_County_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php if (get_field('apple_touch_icon_57x57','option')) : ?><link rel="apple-touch-icon" sizes="57x57" href="<?php the_field('apple_touch_icon_57x57','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-57x57.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_60x60','option')) : ?><link rel="apple-touch-icon" sizes="60x60" href="<?php the_field('apple_touch_icon_60x60','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-60x60.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_72x72','option')) : ?><link rel="apple-touch-icon" sizes="72x72" href="<?php the_field('apple_touch_icon_72x72','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-72x72.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_76x76','option')) : ?><link rel="apple-touch-icon" sizes="76x76" href="<?php the_field('apple_touch_icon_76x76','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-76x76.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_114x114','option')) : ?><link rel="apple-touch-icon" sizes="114x114" href="<?php the_field('apple_touch_icon_114x114','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-114x114.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_120x120','option')) : ?><link rel="apple-touch-icon" sizes="120x120" href="<?php the_field('apple_touch_icon_120x120','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-120x120.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_144x144','option')) : ?><link rel="apple-touch-icon" sizes="144x144" href="<?php the_field('apple_touch_icon_144x144','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-144x144.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_152x152','option')) : ?><link rel="apple-touch-icon" sizes="152x152" href="<?php the_field('apple_touch_icon_152x152','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-152x152.png"><?php endif; ?>
<?php if (get_field('apple_touch_icon_180x180','option')) : ?><link rel="apple-touch-icon" sizes="180x180" href="<?php the_field('apple_touch_icon_180x180','option'); ?>"><?php else: ?><link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-icon-180x180.png"><?php endif; ?>
<?php if (get_field('android_icon_192x192','option')) : ?><link rel="icon" type="image/png" sizes="192x192" href="<?php the_field('android_icon_192x192','option'); ?>"><?php else: ?><link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/android-icon-192x192.png"><?php endif; ?>
<?php if (get_field('favicon_32x32','option')) : ?><link rel="icon" type="image/png" sizes="32x32" href="<?php the_field('favicon_32x32','option'); ?>"><?php else: ?><link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/favicon-32x32.png"><?php endif; ?>
<?php if (get_field('favicon_96x96','option')) : ?><link rel="icon" type="image/png" sizes="96x96" href="<?php the_field('favicon_96x96','option'); ?>"><?php else: ?><link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/favicon-96x96.png"><?php endif; ?>
<?php if (get_field('favicon_16x16','option')) : ?><link rel="icon" type="image/png" sizes="16x16" href="<?php the_field('favicon_16x16','option'); ?>"><?php else: ?><link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/favicon-16x16.png"><?php endif; ?>

    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/manifest.json">
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
  </head>
  <body>

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N4Q26C"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N4Q26C');</script>
    <!-- End Google Tag Manager -->
  
    <div class="popup-overlay"></div>

    <?php /* ?><form class="slide-down-login"><span class="login-close fa fa-times" aria-hidden="true"></span>
      <ul class="login-form-elements">
        <li>
          <label class="login-form__label">login</label>
        </li>
        <li>
          <input type="text" placeholder="Username" name="username">
        </li>
        <li>
          <input type="password" placeholder="Password" name="password">
        </li>
        <li>
          <button class="btn btn--primary" type="submit" name="login"><span>login <span class="fa fa-user"></span></span></button>
        </li>
      </ul>
    </form><?php */ ?>
    <nav class="banner">
      <ul>
        <li class="banner__logo"><a href="/"><?php if (get_field('banner_logo','option')): ?><img src="<?php the_field('banner_logo','option'); ?>" alt="<?php bloginfo( 'name' ); ?>" /><?php else: ?><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /><?php endif; ?></a></li>
        <li class="banner__txt-logo"><a href="/"><?php if (get_field('banner_text_logo','option')): ?><img src="<?php the_field('banner_text_logo','option'); ?>" alt="<?php bloginfo( 'name' ); ?>" /><?php else: ?><img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner-txt-logo.png" alt="<?php bloginfo( 'name' ); ?>" /><?php endif; ?></a></li>
        <li class="banner__phrase"><?php if (get_field('banner_phrase','option')): ?><img src="<?php the_field('banner_phrase','option'); ?>" alt="<?php bloginfo( 'name' ); ?>" /><?php else: ?><img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner-phrase.png" alt="<?php bloginfo( 'name' ); ?>" /><?php endif; ?></li>
        <li class="banner__btns">
          <ul class="h-list">
            <!--<li>
              <button class="btn btn--primary banner__btn login-toggle">Login <span class="fa fa-user" aria-hidden="true"></span></button>
            </li>-->
            <li><a class="btn btn--primary banner__btn" href="/contact/">Contact <span class="fa fa-envelope" aria-hidden="true"></span></a></li>
          </ul>
        </li>
        <li class="banner__search-btn"><span class="fa fa-search" id="search-button" aria-hidden="true"></span></li>
        <li class="banner__tele">704-825-4046</li>
        <li class="banner__menu-btn"><span class="fa fa-bars fa-2x menu-toggle" aria-hidden="true"></span></li>
      </ul>
      <div class="slide-down-search">
        <form id="search-box" action="/" method="get">
            <input type="text" id="slide-down-search" placeholder="Enter your search..." name="s" id="slide-down-search" value="<?php the_search_query(); ?>" />
            <label for="search" class="fa fa-search fa-2x" aria-hidden="true"></label>
        </form>
      </div>
    </nav>
    <nav class="slide-out-menu">
      <div class="row">
        <h3 class="slide-out-menu__heading">menu</h3><span class="fa fa-times slide-out-menu__close menu-close" aria-hidden="true"></span>
      </div>
      <form class="row" action="/" method="get">
        <input class="nav-search" type="text" placeholder="Search..." name="s" value="<?php the_search_query(); ?>">
        <button class="nav-search__btn" type="submit" name="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
      <hr class="hr--blue">
      <ul class="main-nav">
        <li class="nav-item"><a href="#0">doing business in gaston <span class="nav-caret fa fa-caret-right" aria-hidden="true"></span></a>
          <ul class="sub-nav">
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/demographics/">demographics</a></li>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/workforce/">workforce</a></li>
            <?php /* ?><li class="sub-nav-item"><a href="/doing-business-in-gaston/current-industries/">current industries</a></li><?php */ ?>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/taxes-incentives/">taxes &amp; incentives</a></li>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/utilities/">utilities</a></li>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/permitting/">permitting</a></li>
            <?php /* ?><li class="sub-nav-item"><a href="/doing-business-in-gaston/business-resources/">business resources</a></li>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/business-directory/">business directory</a></li>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/foreign-firms/">foreign firms</a></li><?php */ ?>
            <li class="sub-nav-item"><a href="/doing-business-in-gaston/transportation/">transportation</a></li>
            <?php /* ?><li class="sub-nav-item"><a href="/doing-business-in-gaston/airport/">airport</a></li><?php */ ?>
          </ul>
        </li>
        <li class="nav-item"> <a href="/existing-industry/">existing industry</a></li>
        <li class="nav-item"><a href="#0">sites &amp; buildings <span class="nav-caret fa fa-caret-right" aria-hidden="true"></span></a>
          <ul class="sub-nav">
            <li class="sub-nav-item"><a href="/sites-buildings/gastonia-technology-park/">gastonia technology park</a></li>
            <li class="sub-nav-item"><a href="/sites-buildings/southridge/">SouthRidge</a></li>
            <li class="sub-nav-item"><a href="/sites-buildings/summit-at-court-drive/">summit at court drive</a></li>
            <li class="sub-nav-item"><a href="/sites-buildings/kings-mountain-corporate-center/">kings mountain corporate center</a></li>
            <li class="sub-nav-item"><a href="/sites-buildings/the-oaks-commerce-center/">the oaks commerce center</a></li>
            <li class="sub-nav-item"><a href="/sites-buildings/building-site-search/">building &amp; site search</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="#0">community <span class="nav-caret fa fa-caret-right" aria-hidden="true"></span></a>
          <ul class="sub-nav">
            <li class="sub-nav-item"><a href="/community/communities/">communities</a></li>
            <li class="sub-nav-item"><a href="/community/healthcare-facilities/">healthcare facilities</a></li>
            <li class="sub-nav-item"><a href="/community/education-institutions/">education institutions</a></li>
            <li class="sub-nav-item"><a href="/community/amenities/">amenities</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="/news-events/">news &amp; events</a></li>
        <li class="nav-item"><a href="#0">about gaston EDC <span class="nav-caret fa fa-caret-right" aria-hidden="true"></span></a>
          <ul class="sub-nav">
            <li class="sub-nav-item"><a href="/about-edc/mission-vision/">Mission/Vision</a></li>
            <li class="sub-nav-item"><a href="/about-edc/partnerships/">partnerships</a></li>
            <li class="sub-nav-item"><a href="/about-edc/investors/">investors</a></li>
            <li class="sub-nav-item"><a href="/about-edc/site-consultant-services/">site consultant services</a></li>
            <li class="sub-nav-item"><a href="/about-edc/board-staff/">board &amp; staff</a></li>
            <li class="sub-nav-item"><a href="/about-edc/data-library/">data library</a></li>
          </ul>
        </li>
      </ul>
      <hr class="hr--blue">
      <div class="row"><!--<a class="left btn btn--primary" id="nav-login-btn" href="#0">login</a>--><a class="left btn btn--primary" href="/contact/">contact</a></div>
      <div class="row"><a class="banner__tele-mobile" href="tel:704-825-4046">704-825-4046</a></div>
      <hr class="hr--blue">
      <ul class="social__list">
        <li class="social__icon"><a href="https://www.facebook.com/Gaston-County-Economic-Development-Commission-164623551529" alt="Facebook" target="_blank"><span class="fa fa-facebook fa-2x" aria-hidden="true"></span></a></li>
        <li class="social__icon"><a href="https://twitter.com/GastonCountyEDC" alt="Twitter" target="_blank"><span class="fa fa-twitter fa-2x" aria-hidden="true"></span></a></li>
        <li class="social__icon"><a href="http://www.linkedin.com/company/gaston-edc" alt="LinkedIn" target="_blank"><span class="fa fa-linkedin fa-2x" aria-hidden="true"></span></a></li>
        <li class="social__icon"><a href="https://plus.google.com/+GastonOrgEDC" alt="Google Plus" target="_blank"><span class="fa fa-google-plus fa-2x" aria-hidden="true"></span></a></li>
      </ul>
    </nav>

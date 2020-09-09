<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=2.0">
<meta name="theme-color" content="rgb(48, 44, 41)" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<!-- Azt OG cuccost a Yoast megoldja. -->

<style type="text/css">
/* Custom CSS for header */
/* ready designs */

.full-width {
  width:100%;
}

.cover {
  width:100%;
  height:100vh;
  margin:0;
  padding:0;
  position:relative;
}

.black {
  background:black;
}

.sample-image {
  background-image:url('https://syndlab.com/files/view/5db9b150252346nbDR1gKP3OYNuwBhXsHJerdToc5I0SMLfk7qlv951730.jpeg');
  background-size:cover;
}

.hiddenlink {
  text-decoration: none;
  color:inherit;
}
@media only screen and (max-width: 900px) {
  .slideup {
    height: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .ovhidden {
    overflow: hidden;
  }
  .opzero {
    opacity: 0;
  }
}

/* Generic stuff */

html {
  font-family:Helvetica;
  background: black;
}

/* header */

#main-header {
  width: 100%;
  position: fixed;
  top:0;
  left:0;
  height: 65px;
  z-index: 9999999999999999999999999999999;
  background-color: rgba(48, 44, 41, 0.95);
  box-shadow: 0 0 5px 0px rgba(0,0,0,0.3);
  list-style-type: none;
}


/* menu */

#main-menu {
  display: list-item;
  float:left;
  height: 65px;
  position: relative;
  margin:0;
  padding:15px;
  padding-top: 17.5px;
  list-style-type: none;
  width: calc(98.5% - 360px);
  transition: 0.5s;
}

#main-menu li {
  display: inline;
  padding:10px;
  font-size: 22px;
  color: rgb(200,168,88);
  border-left: solid 1px rgb(200,168,88);
  height: 65px;
  transition: 0.3s;
  line-height: initial;
  transition-delay:0.2s;
}

#main-menu li:last-of-type {
  border-left: none;
  float: right;
  padding:0;
}

#main-menu li:last-of-type:hover {
  background: none;
}

#main-menu li.selected{
  filter: brightness(130%) saturate(130%);
}

#main-menu li:hover{
  background: rgba(0,0,0,0.2);
}

@media only screen and (max-width: 900px) {
  <?php _e('#main-menu li {}','sy') ?>
  #main-menu {
    width: 100%;
    background: rgba(24, 22, 21, 0.95);
    height: 25px;
    padding:10px;
  }
  #main-menu li:first-of-type {
    border-left: none;
  }
  #mobile-menu {
    display: list-item !important;
    position: absolute;
    top:0;
    right: 2%;
    width: 10%;
    max-width: 40px;
    height: 65px;
    margin:0 !important;
    
  }
  #main-logo {
    width: 80% !important;
    max-width: 330px !important;
    margin-left: 2% !important;
  }
}

@media only screen and (max-width: 350px) {
  #main-menu li:last-of-type {
    display: none;
  }
}

#mobile-menu {
  display: none;
}

/* logo */

#main-logo {
  height: 65px;
  width: 330px;
  background-image: url('<?php echo get_template_directory_uri() ?>/header_res/main_logo.png');
  background-size: 100% auto;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  margin-left: 1.5%;
  transition: 0.6s;
  transition-timing-function: ease-in;
  display: list-item;
  float:left;
}

#main-logo:hover {
  filter: brightness(120%) saturate(120%);
}


/* language chooser */

#lang-container{
  cursor:pointer;
  width: 80px;
  float:right;
}

#lang {
  height: 17px;
  width: 28px;
  background-position: 50% 50%;
  background-size: 100% auto;
  background-repeat: no-repeat;
  border-radius: 1px;
  border: 1px solid rgb(200,200,200);
  display:inline-block;
  transition: 0.5s;
}
.en_GB-flag {
  background-image: url('<?php echo get_template_directory_uri() ?>/header_res/en_flag.png');
}

#lang:hover, #other-flag:hover, #right-corner svg:hover{
  transform: scale(1.1);
}

#other-flag {
  height: 17px;
  width: 28px;
  background-position: 50% 50%;
  background-size: 100% auto;
  background-repeat: no-repeat;
  border-radius: 1px;
  border: 1px solid rgb(200,200,200);
  display: none;
  transition: 0.5s;
}
.hu_HU-flag {
  background-image: url('<?php echo get_template_directory_uri() ?>/header_res/hu_flag.png');
}

#vau{
  height:1px;
  border:none;
  background: rgb(150,150,150);
  display: none;
}

.flag-cont-active{
  background: rgba(0,0,0,0.1);
  border-radius: 5px;
  padding:5px;
  margin-top: -5px;
  margin-right: -5px;
}

#lang-container svg{
  transition: 0.5s;
}

#right-corner {
  position: fixed;
  right: 2%;
  top:0;
  padding-top:18.5px;
}

/* generic animation classes */

.unhide {
  display: block !important;
}

.upsidedown {
  transform: rotate(180deg) !important;
}

</style>
<script type="text/javascript">
// custom header's js
// gánying on load
scrollUpCount = 0
scrollDownCount = 0
prevPos = 0

document.addEventListener("scroll", menuSlideScroll);
function menuSlideScroll() {
	if ( document.documentElement.scrollTop > prevPos ) {
		scrollUpCount++;
		scrollDownCount = 0;
	} else if ( document.documentElement.scrollTop < prevPos ) {
		scrollUpCount = 0;
		scrollDownCount++;
	}

  var mainMenuElements = document.querySelectorAll('#main-menu li');
  curPos = document.documentElement.scrollTop;
	if (scrollUpCount > 4) {
		document.getElementById('main-menu').classList.add('ovhidden');
    for (i = 0; i < mainMenuElements.length; i++) {
      mainMenuElements[i].classList.add('opzero');
    }
    document.getElementById('main-menu').classList.add('slideup');
  }
	if (scrollDownCount > 30 || curPos == 0) {
    for (i = 0; i < mainMenuElements.length; i++) {
      mainMenuElements[i].classList.remove('opzero');
    }
		document.getElementById('main-menu').classList.remove('slideup');
		document.getElementById('main-menu').classList.remove('ovhidden');
	}

	prevPos = curPos;
}

function menuDown() {
    var mainMenuElements = document.querySelectorAll('#main-menu li');
    for (i = 0; i < mainMenuElements.length; i++) {
      mainMenuElements[i].classList.remove('opzero');
    }
    document.getElementById('main-menu').classList.remove('slideup');
    document.getElementById('main-menu').classList.remove('ovhidden');
}

// vanilla js legyen!

var isLangDroppedDown = false;
function langContainerClick() {
	if (isLangDroppedDown) {
		document.getElementById('lang-container').classList.remove("flag-cont-active");
		document.getElementById('vau').classList.remove("unhide");
		document.getElementById('other-flag').classList.remove("unhide");
		document.getElementsByClassName('bi-chevron-down')[0].classList.remove("upsidedown");
		isLangDroppedDown = false;
	} else {
		document.getElementById('lang-container').classList.add("flag-cont-active");
		document.getElementById('vau').classList.add("unhide");
		document.getElementById('other-flag').classList.add("unhide");
		document.getElementsByClassName('bi-chevron-down')[0].classList.add("upsidedown");
		isLangDroppedDown = true;
	}
}
</script>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
<!-- Custom header -->
<header class="full-width" id="main-header">
	<a href="<?php echo get_site_url() ?>" id="main-logo-a"><div id="main-logo"></div></a>
	<ul id="main-menu" style="font-family: 'Philosopher', serif;">
    <?php
    $about_d = __('About','sy');
    $stories_d =  __('Stories','sy');
    $symbols_d =  __('Symbols','sy');
    $about = remove_accents( strtolower($about_d) );
    $stories = remove_accents( strtolower($stories_d) );
    $symbols = remove_accents( strtolower($symbols_d) );
    ?>
		<li <?php if ($pagename == $about) { echo 'class="selected"';} ?>><a class="hiddenlink" href="<?php echo get_site_url() . '/' . $about; ?>"><?php echo $about_d; ?></a></li>
		<li <?php if ($pagename == $stories) { echo 'class="selected"';} ?>><a class="hiddenlink" href="<?php echo get_site_url() . '/' . $stories; ?>"><?php echo $stories_d; ?></a></li>
		<li <?php if ($pagename ==  $symbols) { echo 'class="selected"';} ?>><a class="hiddenlink" href="<?php echo get_site_url() . '/' . $symbols; ?>"><?php echo $symbols_d; ?></a></li>
		<li>
			<div id="lang-container" onclick="langContainerClick()">
      <?php
        $native_lang = get_locale();
        $lang_to_switch = '';
        switch ($native_lang) {
          case 'hu_HU':
            $lang_to_switch = 'en_GB';
            break;
          default:
            $lang_to_switch = 'hu_HU';
        }
      ?>
			<div class="<?php echo $native_lang; ?>-flag" id="lang"></div>
			<svg width="1.1em" height="23px" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="rgb(200,200,200)" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
			</svg>
		<hr id="vau">
		<a href="<?php
    if (is_plugin_active( 'multisite-language-switcher/MultisiteLanguageSwitcher.php' )) {echo get_msls_permalink( $lang_to_switch );}
    ?>"><div id="other-flag" class="<?php echo $lang_to_switch; ?>-flag"></div></a>
		</div>
		</li>
	</ul>
	<svg id="mobile-menu" width="36px" height="36px" viewBox="0 0 16 16" class="bi bi-list" fill="rgb(200,200,200)" xmlns="http://www.w3.org/2000/svg" onclick="menuDown()">
 	 <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
	</svg>
</header>
<div id="main-css-apply">
<div id="page" class="hfeed site">

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

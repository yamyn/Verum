<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="VerumTrade"/>
		<!-- <link rel="canonical" href="http://verumtrade.com"/>
		<link rel="shortcut icon" href="./images/favicons/favicon_verum.ico">
		<link rel="icon" type="image/png" href="./images/favicons/favicon_verum.png" sizes="16x16">
		<link rel="stylesheet" href="css/hamburgers.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> -->
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header home-page-header">
			<div class="container">
				<nav class="navbar navbar-expand-xl toBottomAnimated" id="tenth"><a class="brand" href="home"><span><?php bloginfo( 'name'); ?></span></a>

<style type="text/css">
.switcher {font-family:Arial;font-size:10pt;text-align:left;cursor:pointer;overflow:hidden;width:163px;line-height:25px;}
.switcher a {color: white; font-family: BoldFont; text-decoration:none;display:block;text-color: font-size:14pt;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;}
.switcher .selected {background:transparent; url(//verum/wp-content/plugins/gtranslate/switcher.png) repeat-x;position:relative;z-index:9999;}
.switcher .selected a {background:url(//verum/wp-content/plugins/gtranslate/arrow_down.png) 65px center no-repeat;margin: 85px; font-size: 16px; padding:3px 5px;width:55px;}
.switcher .selected a.open {background-color: transparent;}
.switcher .selected a:hover {background:transparent; url(//verum/wp-content/plugins/gtranslate/arrow_down.png) 146px center no-repeat;}
.switcher .option {position:relative;z-index:9998; solid #CCCCCC;background-color:transparent;display:none;width:60px;max-height:198px;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;overflow-y:auto;overflow-x:hidden;}
.switcher .option a {color:#000;padding:3px 5px;}
.switcher .option a:hover {background:#FFC;}
.switcher .option a.selected {background:#FFC;}
#selected_lang_name {float: none;}
.l_name {float: none !important;margin: 0;}
.switcher .option::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 3px rgba(0,0,0,0.3);background-color:transparent;}
.switcher .option::-webkit-scrollbar {width:5px;}
.switcher .option::-webkit-scrollbar-thumb {-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);background-color:transparent;}
</style>
<div class="switcher notranslate">
<div class="selected">
<a href="#" onclick="return false;"> RUS</a>
</div>
<div class="option">
<a href="#" onclick="doGTranslate('ru|en');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="English" class="nturl">ENG</a><a href="#" onclick="doGTranslate('ru|pl');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Polish" class="nturl"> PLN </a><a href="#" onclick="doGTranslate('ru|ru');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Russian" class="nturl selected"> RUS </a><a href="#" onclick="doGTranslate('ru|uk');jQuery('div.switcher div.selected a').html(jQuery(this).html());return false;" title="Ukrainian" class="nturl"> UA </a></div>
</div>
<script type="text/javascript">
jQuery('.switcher .selected').click(function() {jQuery('.switcher .option a img').each(function() {if(!jQuery(this)[0].hasAttribute('src'))jQuery(this).attr('src', jQuery(this).attr('data-gt-lazy-src'))});if(!(jQuery('.switcher .option').is(':visible'))) {jQuery('.switcher .option').stop(true,true).delay(100).slideDown(500);jQuery('.switcher .selected a').toggleClass('open')}});
jQuery('.switcher .option').bind('mousewheel', function(e) {var options = jQuery('.switcher .option');if(options.is(':visible'))options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta);return false;});
jQuery('body').not('.switcher').click(function(e) {if(jQuery('.switcher .option').is(':visible') && e.target != jQuery('.switcher .option').get(0)) {jQuery('.switcher .option').stop(true,true).delay(100).slideUp(500);jQuery('.switcher .selected a').toggleClass('open')}});
</script>
<style type="text/css">
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
.goog-text-highlight {background-color:transparent !important;box-shadow:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ru',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
function GTranslateGetCurrentLang() {var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(/goog-te-combo/.test(sel[i].className)){teCombo=sel[i];break;}if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {var lang_html = jQuery('div.switcher div.option').find('img[alt="'+GTranslateGetCurrentLang()+'"]').parent().html();if(typeof lang_html != 'undefined')jQuery('div.switcher div.selected a').html(lang_html.replace('data-gt-lazy-', ''));});
</script>

					<div class="collapse navbar-collapse main-menu" id="navbarNavDropdown">
						<!--  GTranslate: https://gtranslate.io/ -->


						<div id="weglot_here"></div>
						<!-- <ul class="navbar-nav">
							<li class="nav-item default-nav-item lang-item dropdown"><a class="nav-link dropdown-toggle" id="navbarLangSwitcher" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>RUS</span><i class="zmdi zmdi-chevron-down"></i></a>
								<div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);">ENG</a></div>

							</li>
						</ul> -->
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'container'       => null,
							'menu_class'      => 'navbar-nav',
							'echo'            => true,
							'items_wrap'      => '<ul class = "%2$s">%3$s</ul>',
							'depth'           => 3,
						) );
						?>
					
						
					</div>
					<!-- <button class="hamburger hamburger--spin" id="hamburger" type="button" onclick="openMobileMenu()"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> -->
				</nav>
			</div>
		</header>
			
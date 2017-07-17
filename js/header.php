<!doctype html><html><head>	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">	<meta http-equiv="X-UA-Compatible" content="IE=Edge">	<title><?php wp_title('�', true, 'right'); ?> <?php bloginfo('name'); ?></title>	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	<?php wp_head(); ?>	<script src='https://www.google.com/recaptcha/api.js'></script></head><body <?php body_class(); ?>>	<div class="wrapper">		<header>		<div class="row top-buffer">			<div class="col-md-4 margin-left-md">			<a href="<?php echo pll_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="kiwi immigration logo"></a>			</div>			<div class="col-2 pull-right">            <div class="row">                  <div class="region region-language">    <section id="block-locale-language" class="block block-locale clearfix"><?php pll_the_languages(); ?></section> <!-- /.block -->  </div>            </div>            <div class="row">                  <div class="region region-socials">    <section id="block-block-1" class="block block-block clearfix">								<div class="col-3">                    <a href="http://vk.com/kiwieducation" class="button" onClick="ga('send', 'event', 'Click', 'VK');"><div id="vk"></div></a>                </div>    				<div class="col-3">                    <a href="http://ok.ru/kiwieducation" class="button" onClick="ga('send', 'event', 'Social', 'OK');"><div id="ok"></div></a>                </div>    				<div class="col-3">                    <a href="https://www.facebook.com/kiwiedu/" class="button" onClick="ga('send', 'event', 'Social', 'FB');"><div id="facebook-ico"></div></a>                </div>                <div class="col-3">                    <a href="http://youtube.com/channel/UCBCWoy6xbBdMJJRlUSv2p1w" class="button"><div id="youtube-ico"></div></a>                </div>                <div class="col-3 ">                    <a href="https://twitter.com/kiwiimmigration" class="button"><div id="twitter-ico"></div></a>                </div></section> <!-- /.block -->  </div>            </div>        </div>		</div>		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42985031-1', 'auto');
  ga('send', 'pageview');

</script></header>		<nav class="main-navigation">		<div class="nav-cent">			<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>			</div>		</nav>
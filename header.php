<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> 
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&raquo; Blog Archive 
<?php } ?>
<?php wp_title(); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.2, maximum-scale=3., user-scalable=yes" />
<!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
</head>
<body>

<div id="header"> 
    <div id="header-gif"> 
      <a href="<?php bloginfo('url'); ?>"><h1>Farsilab</h1></a>
    </div>
    <div id="header-menu"><h2><a href="<?php bloginfo('url'); ?>">home</a> -
        <!--<a href="http://www.farsi.it/album/index.php">gallery</a> -
        <a href="http://www.farsi.it/quantum/">official</a> - -->
        <a href="http://www.google.com/search?hl=en&source=hp&q=alessandro+farsi&aq=f&oq=&aqi=">elsewhere</a>
    </h2></div>
<div class='clear'></div>
</div>

  <!--<a href="<?php bloginfo('url'); ?>">
    <?php bloginfo('name'); ?>
    </a></h1>-->
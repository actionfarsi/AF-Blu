<div id="sidebar">
    <div class="sidebar-middle">
    <a class="sidebar-h" href="#">Categories</a></div>
    <div class="sidebar-middle" >
        <ul><?php wp_list_categories('title_li=&exclude=38'); ?></ul>
    </div>
 
    
    <div class="sidebar-middle"><a  class="sidebar-h" href="#">Links</a></div>
    <div class="sidebar-middle">
    <ul><?php wp_list_bookmarks('title_after=&title_before='); ?></ul>
    </div>
    <div class="sidebar-middle"><a class="sidebar-h" href="#">Archives</a></div>
    <div class="sidebar-middle"><?php wp_get_archives('type=yearly'); ?></div>
    
 
<!--
<?php if ( function_exists('dynamic_sidebar') ): ?>
<div class="sidebar-middle">
<a  class="sidebar-h" href="#">Others</a></div>
<div class="sidebar-middle">
    <?php dynamic_sidebar(); ?>
</div>
<?php endif; ?> -->

    <div class="sidebar-middle">
    <a class="sidebar-h" href="#">Meta</a>
    </div>

    <div class="sidebar-middle"> 
     <?php _e('Meta'); ?>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="feed:<?php bloginfo('rss2_url'); ?>"
               title="<?php _e('Syndicate this site using RSS'); ?>">
            <?php _e('<abbr title="Really Simple Syndication">RSS</abbr>');?>
            </a>
        </li>
		<?php wp_meta(); /* do not remove this line */ ?>
        </ul>
    
  </div>

<!--<div class="clear"></div>-->
</div>

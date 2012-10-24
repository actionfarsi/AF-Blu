<div id="sidebar">
<div class="sidebar-top"></div>
 <div class="sidebar-middle"><ul>
        <?php wp_list_categories('title_li='); ?>
		</ul>
</div>
<div class="sidebar-bottom"></div>

<div class="sidebar-top"></div>
 <div class="sidebar-middle"><ul>
        <?php wp_list_bookmarks('title_after=&title_before='); ?>
		</ul>
</div>
<div class="sidebar-bottom"></div>

<?php if ( function_exists('dynamic_sidebar') ):?>
<div class="sidebar-top"></div>
 <div class="sidebar-middle">
<?php dynamic_sidebar(); ?>
</div>
<div class="sidebar-bottom"></div>
<?php endif; ?>

<div class="sidebar-top"></div>
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
<div class="sidebar-bottom"></div>

<div style="clear:both;"></div>
</div>
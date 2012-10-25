<?php get_header(); ?>
<div class="row">
<?php get_sidebar(); ?>
<div id="container"> 
  <div id="content"> 
    
        <?php the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>"> 
		<h2>
          <?php the_title(); ?>
          </h2>
		  
        <div class="post-entry"> 
          <div class="entry_padz"> 
            <?php the_content('Continue &raquo;'); ?>
          </div>
          <p class="postmetadata clear"> 
            <?php the_category(', ') ?>
            <strong>|</strong> 
            <?php edit_post_link('Edit','','<strong> | </strong>'); ?>
          </p>
        </div>
      </div>
   
  </div>
  <div id="clear" />
</div>
</div>
<?php get_footer(); ?>

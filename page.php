<?php get_header(); ?>
<div class="row">
<?php get_sidebar(); ?>
<div id="container"> 
  <div id="content"> 
    
        <?php the_post(); ?>
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
            <?php comments_popup_link('No comments &raquo;', '1 comment &raquo;', '% comments &raquo;'); ?>
          </p>
        </div>
      
      <?php comments_template(); ?>
	  
      <br />
   
  </div>
  <hr id="clear" />
</div>
</div>
<?php get_footer(); ?>

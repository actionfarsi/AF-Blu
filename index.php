<?php get_header(); ?>
<div class="row">
<?php get_sidebar(); ?>
<div id="container"> 
  
  <div id="content"> 
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>"> 
      <div class="post-top"><?php category_banner(); ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"
                       title="Permanent Link to <?php the_title(); ?>"> 
          <?php the_title(); ?>
          </a></h2>
		  </div>
        <div class="post-author">
          <?php the_time('F jS, Y') ?>
          . di
          <?php the_author() ?>
		  </div>
        <div class="post-entry"> 
          <div class="entry_padz"> 
            <?php the_content('Leggi tutto &raquo;'); ?>
          </div>
          <p class="postmetadata"> 
            <?php the_category(', ') ?>
            <strong>|</strong> 
            <?php edit_post_link('Edit','','<strong> | </strong>'); ?>
            <?php comments_popup_link('Nessun Commento &raquo;', '1 Commento &raquo;', '% Commenti &raquo;'); ?>
          </p>
        </div>
      </div>
      <?php comments_template(); ?>
	  
      <?php endwhile; ?>
      <p align="center"> 
        <?php next_posts_link('&laquo; Previous') ?>
        <?php previous_posts_link('Next &raquo;') ?>
      </p>
      <?php else : ?>
      <h2 align="center">Not Found</h2>
      <p align="center">Sorry, but you are looking for something that isn't here.</p>
      <?php endif; ?>
      <br />
   
  </div>
  <div id="clear" />
</div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="container">
  <div id="content">
  <div id="category">

	<div id="category-top"><?php category_banner(); ?>
		<h2><?php single_cat_title(); ?></h2>
	</div>
	<div id="category-text">
	<?php echo category_description(); ?>
	</div>
	<div class="category-list">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	<div class="category-elem" ><a href="<?php the_permalink() ?>" rel="bookmark"
                       title="Permanent Link to <?php the_title(); ?>"> 
          <?php the_title(); ?>
          </a></div>
     
      <?php endwhile; ?>
	  </div>
     </div> 
      <p align="center"> 
        <?php next_posts_link('&laquo; Precedenti') ?>
        <?php previous_posts_link('Successivi &raquo;') ?>
      </p>
      <?php else : ?>
      <h2 align="center">Not Found</h2>
      <p align="center">Sorry, but you are looking for something that isn't here.</p>
      <?php endif; ?>
      <br />
  </div>
</div>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  
	  
	  
	  <?php while(have_posts()) : the_post(); ?>
	  
        <div class="article">
          <h2><?php the_title(); ?></h2>
          <div class="clr"></div>
          <p>Posted by <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a> <span>&nbsp;&bull;&nbsp;</span><br> Filed under <?php the_category(); ?></p>
          <?php the_content(); ?>
		  
          <p><strong><?php comments_popup_link('No Comments', 'One Comment', '% Comments') ?></strong><span>&nbsp;&bull;&nbsp;</span>
		  <?php the_time('d F Y | g:i a'); ?><span>&nbsp;&bull;&nbsp;</span></p>
		  
        </div>
		
		<?php endwhile; ?>
		
		
		
		
				
        <div class="article">
          <h2><span>Leave a</span> Reply</h2>
          <div class="clr"></div>
          <?php comments_template(); ?>
        </div>
      </div>
	  
	  
		
		
		

	  
	  
      <div class="sidebar">
        <?php get_sidebar(); ?>
      </div>
      <div class="clr"></div>
	  
    </div>
  </div>
  
  <?php get_sidebar('footer'); ?>
  <?php get_footer(); ?>

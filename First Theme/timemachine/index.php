<?php get_header(); ?>
      <div class="clr"></div>
      <div class="slider">
	  
        <div id="coin-slider">
		
		<?php 
		$slideritems = new WP_Query(array(
			'post_type' => 'timeslider',
			'posts_per_page' => 3
			));
			?>
			
			
		<?php while($slideritems->have_posts()) : $slideritems->the_post(); ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
		<span><big><?php the_title(); ?></big><br /></span></a>
		<?php endwhile; ?>
		
		  </div>
		  
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  <div class="clr"></div>
	  <?php while(have_posts()) : the_post(); ?>
	  
	  
        <div class="article">
		
		
          <h2><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h2>
          <p class="infopost">Posted <span class="date">on <?php the_time('d F Y | g:i a'); ?></span> by <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a><?php comments_popup_link('No Comments', 'One Comment', '% Comments') ?></p>
          <div class="clr"></div>
		  
		  
          <div class="img"> 
		  <?php 
		  the_post_thumbnail(array(200,150)); ?>
		  </div>
		  
		  
          <div class="post_content">
            
			<?php read_more(80); ?>
			
			
            <p class="spec"><a href="<?php the_permalink(); ?>" class="rm">&raquo; Read more</a></p>
          </div>
		  
          <div class="clr"></div>
		  
        </div>
		
		<?php endwhile; ?>
		
		
		
     
<div class="clr"></div>
		<div id="pagi" class="pages"> 
			<?php 
			the_posts_pagination(array(
				'prev_text' => 'Prev',
				'next_text' => 'Next',
			'screen_reader_text' => ' ',
			'before_page_number' => '<b>',
			'after_page_number'  => '</b>',
			'show_all' => true
			));
			?>
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
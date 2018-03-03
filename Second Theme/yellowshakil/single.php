<?php get_header() ;?>
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					<?php while(have_posts()) : the_post(); ?>
					<div class="clearfix content">
						
						<h1><?php the_title(); ?></h1>
						<div class="clearfix post-meta">
							<p><span><i class="fa fa-user"></i> <?php the_author();?></span> <span><i class="fa fa-clock-o"></i> 
							<?php the_time('d M Y'); ?></span> <span><i class="fa fa-comment"></i> 
							<?php comments_popup_link('No Comments','One Comment','% Comments','',''); ?></span> 
							</p>
						</div>
						
						<?php the_content(); ?>
						<?php comments_template(); ?>
						
					
					</div>
					<?php endwhile; ?>
					
					
					
				</div>
			
				
		<?php get_sidebar(); ?>
		</div>
		</section>
		<?php get_sidebar('footer'); ?>
		
		<?php get_footer(); ?>		

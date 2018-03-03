<?php get_header(); ?>
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
				<div class="clearfix main_content floatleft">
				
					
					
					<div class="clearfix content">
						<div class="content_title"><h2>Latest Blog Posts</h2></div>
						<?php while(have_posts()) : the_post() ; ?>
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								<div class="date">
									<h3><?php the_time('d'); ?></h3>
									<p><?php the_time('F'); ?></p>
								</div>
							</div>
							<div class="clearfix post_detail">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="clearfix post-meta">
									<p><span><i class="fa fa-user"></i> <?php the_author(); ?></span> <span><i class="fa fa-clock-o"></i> <?php the_time('d M, Y'); ?></span> 
									<span><i class="fa fa-comment"></i> <?php comments_popup_link('No Comment','One Comment','% Comments'); ?></span> 
									<span><i class="fa fa-folder">
									</i> <?php the_category(); ?></span></p>
								</div>
								<div class="clearfix post_excerpt">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumb.png" alt=""/>
									<?php read_more(60); ?>
								</div>
								<a href="<?php the_permalink(); ?>">Continue Reading</a>
							</div>
						</div>
						
						
						
						
						<?php endwhile; ?>	
					</div>
					
					<div class="pagination" id="pagi">
					

						<?php
							the_posts_pagination(array(
								'prev_text' => 'Pre',
								'next_text' => 'Next',
								'screen_reader_text' => ' ',
								'before_page_number' => '<b>',
								'after_page_number' => '</b>'
							));
						?>

						
					</div>
					
				</div>
				
				
				<?php get_sidebar(); ?>
				
				</div>
				
				
		</section>
		
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>		
		
		
		

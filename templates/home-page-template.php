<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php
	if(has_post_thumbnail()):
?>
<style type="text/css">
	@media (min-width: 768px){
		#featured_image_content{
			background:url(<?php the_post_thumbnail_url(); ?>);
			background-size: cover;
			background-position: 50%;
		}
	}
</style>
<?php endif; ?>
<?php if ( have_rows( 'featured_image_section' ) ): ?>
	<?php while ( have_rows( 'featured_image_section' ) ) : the_row(); ?>
		<?php if(has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url(); ?>" class="feature_image_mobile">
		<?php endif; ?>
		<?php if ( get_row_layout() == 'featured_image_content' ) : 
			 $featured_image_title_section = get_sub_field( 'featured_image_title_section' ); 
			 $featured_image_text_section = get_sub_field( 'featured_image_text_section' ); 
			 $featured_image_button_text = get_sub_field( 'featured_image_button_text' ); 
			 $featured_image_button_link = get_sub_field( 'featured_image_button_link' ); ?>
			<div class="container"> 
				<div id="featured_image_content">
					<div id="featured_square">
						<h2 class="center_block"><?php echo $featured_image_title_section; ?></h2>
						<p class="center_block"><?php echo $featured_image_text_section; ?></p>
						<a href="<?php echo $featured_image_button_link; ?>" class="btn center_block"><?php echo $featured_image_button_text; ?></a>
					</div>
				</div> 	
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>

<?php if ( have_rows( 'home_page_bands' ) ): ?>

	<?php while ( have_rows( 'home_page_bands' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'home_bands' ) : ?>


			<?php if ( have_rows( 'two_column_offset_widths_band' ) ) : ?>
				<?php $background_color = get_sub_field( 'background_color' ); ?>
				<div class="two-col-articles vertical-top" style="color:<?php echo $background_color; ?>">
				<?php while ( have_rows( 'two_column_offset_widths_band' ) ) : the_row(); 
					$image = get_sub_field( 'image' ); 
					$section_heading = get_sub_field( 'section_heading' ); 
					$description = get_sub_field( 'section_description' ); 
					$button_text = get_sub_field( 'button_text' ); 
					$button_link  = get_sub_field( 'button_link' ); 
					$orientation = get_sub_field( 'image_orientation' );
				?>
						<?php if($orientation == 'image_right'): ?>
							<style type="text/css">
								.orientation, .orientation .btn{
									float:none;
								}
								.orientation h2, .orientation p{
									text-align: center;
								}
								.orientation .btn{
								  margin-right: auto;
								  margin-left: auto;
								}
								@media (min-width: 768px){
									.orientation h2, .orientation p{
										text-align: right;
									}
									.orientation, .orientation .btn{
										float:right;
									}
									.orientation .btn{
									  margin-left: auto;
									  margin-right: 0;
									}
								}
							</style>
						<?php endif; ?>
						<div class="two_column_image_section container">
							<?php 
							 if ( $image ) { ?>
								<div class="col-md-4 orientation orientation_img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
							<?php } ?>
							<div class="col-md-8 orientation">

								 <h2><?php echo $section_heading; ?></h2>
								 <?php echo $description; ?>
								 <?php if($button_text): echo '<a href="' .  $button_link . '" class="btn">' . $button_text . '</a>'; endif; ?>
							</div>
						</div>
					
				<?php endwhile; ?>
				</div>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>


			<?php elseif ( get_row_layout() == 'three_column_cta_band' ) : ?>
				<div class="container three-column-cta-row">
				<?php if ( have_rows( 'cta' ) ) : ?>
					<?php while ( have_rows( 'cta' ) ) : the_row(); ?>
						<div class="col-md-4 col-sm-12 three-column-cta">
							<div class="three_cta_border">
								<aside class="cta-height"><?php the_sub_field( 'content_area' ); ?></aside>
								<?php if(get_sub_field('button_text')): ?>
									<a href="<?php the_sub_field( 'button_link' ); ?>" class="btn"><?php the_sub_field( 'button_text' ); ?></a>
								<?php else: ?>
									<div style="height:52px;"></div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php else: ?>
				<?php // no layouts found ?>
			<?php endif; ?>


		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>

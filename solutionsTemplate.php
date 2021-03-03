<?php /* Template Name: Solution Template */  get_header(); ?>

<div class="section2solutions">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="imgeContainersectionSoluton">
					<img src="<?php the_field('imageContainerSection2Solution'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="contentSection2Solution">
					<h2><?php the_field('asd'); ?></h2>
					<ul>
						<?php if( have_rows('repeater_field_name') ): while( have_rows('repeater_field_name') ) : the_row(); ?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/5.png">
								<?php the_sub_field('asd'); ?>
							</li>
						<?php endwhile; endif; ?>
					</ul>
					<p>
						<?php the_field('asd'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section3Solutions">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contentSection3Solutions">
					<h2><?php the_field('ssd'); ?></h2>
					<p><?php the_field('ssd'); ?></p>
					<ul>
						<?php if( have_rows('repeater_field_name') ): while( have_rows('repeater_field_name') ) : the_row(); ?>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/images/5.png">
								<?php the_sub_field('asd'); ?>
							</li>
						<?php endwhile; endif; ?>
					</ul>

					<ol>
						<?php if( have_rows('repeater_field_name') ): while( have_rows('repeater_field_name') ) : the_row(); ?>
							<li>
								- <?php the_sub_field('asd'); ?>
							</li>
						<?php endwhile; endif; ?>
					</ol>
					<p class="darker">
						<?php the_field('asd'); ?>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="imgeContainersectionSoluton">
					<img src="<?php the_field('imageContainerSection2Solution'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section4">
	<?php if( have_rows('repeater_field_name') ): while( have_rows('repeater_field_name') ) : the_row(); ?>
		<div class="rowContainer">
			<div class="col-1s">
				<img src="<?php the_sub_field('asd'); ?>">
			</div>
		</div>
	<?php endwhile; endif; ?>
	
</div>
<?php get_footer(); ?>
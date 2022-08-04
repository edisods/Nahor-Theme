<?php get_header() ?>

		<!-- Banner -->
		<?php
			$slides = carbon_get_theme_option('crb_slider');
			if($slides) :
				?>
				<section class="banner full"><?php
				foreach($slides as $slide) : 
			?>
				<article>
					<?php echo wp_get_attachment_image($slide['photo'], 'large' ) ?>

					<div class="inner">
						<header>
							<?php echo wpautop($slide[ 'desc' ] )  ?>
							<h2><?php echo $slide['title'] ?></h2>
						</header>
					</div>
				</article>
			
			<?php
			endforeach;
			
			?></section><?php
			endif;
		?>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">


					<?php 
					if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part('entry') ?>
						<?php endwhile; ?>
					<?php endif; ?>	
					</div>
				</div>
			</section>

<?php get_footer() ?>




<?php get_header(); the_post(); ?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p><?php the_time('d.F.Y') ?></p>
						<h2><?php the_title() ?></h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p><?php the_author() ?></p>
							</header>
							<?php the_content() ?>
						</div>
					</div>
				</div>
			</section>

<?php get_footer() ?>
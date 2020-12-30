<?php 
	// Template Name: Template Rewards

	get_header();
?>

<section class="hero hero--simple">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<p class="hero__subtitle"><?php the_field('subtitle_hero_rewards'); ?></p>
				<h1 class="hero__title"><?php the_field('title_hero_rewards'); ?></h1>
				<p class="hero__cta-container">
					<a href="#" class="btn btn-primary hero__cta-button" data-toggle="modal" data-target="#hs-form">Talk
						About Your Rewards Program</a>
				</p>
			</div>
		</div>
		<div class="body-text">
			<div class="body-text__content">
				<?php the_field('content_hero_rewards'); ?>
			</div>
		</div>
	</div>
</section>

<div class="modal hs-form form-width" id="hs-form" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<?php the_field('form_shortcode_hero_rewards'); ?>
		</div>
	</div>
</div>

<span class="clearfix"></span>

<section class="catalog">
	<div class="container">

		<div class="row">

			<?php get_sidebar('rewards'); ?>

			<div class="col-lg-9">
				<div class="row rewards-container">
					<?php 
							$args = array(
								'post_type'			=>	'rewards',
								'posts_per_page'	=>	50,
								// 'orderby'			=>	'menu_order',
								// 'order'				=>	'ASC',
								'post_status'		=>	'publish'
							);
							$the_query = new WP_Query( $args );
							if ($the_query->have_posts() ) :
								$i = 1;
								while ($the_query->have_posts() ) : $the_query->the_post();

								$term_cats = wp_get_post_terms(get_the_ID(), 'reward-categories');
								$term_cons = wp_get_post_terms(get_the_ID(), 'reward-country');
								$term_curs = wp_get_post_terms(get_the_ID(), 'reward-currency');

								$term_cat_slug = [];
								$term_cat_name = [];
								$term_con_slug = [];
								$term_cur_name = [];

								foreach( $term_cats as $term_cat ) {
									$term_cat_slug[] = $term_cat->slug;
									$term_cat_name[] = $term_cat->name;
								}

								foreach( $term_cons as $term_con ) {
									$term_con_slug[] = strtoupper($term_con->slug);
								}

								foreach( $term_curs as $term_cur ) {
									$term_cur_name[] = $term_cur->name;
								}

								$cat_name = implode( ' ', $term_cat_name );
								$cat_slug = implode( ' ', $term_cat_slug );
								$con_slug = implode( ' ', $term_con_slug );
								$cur_name = implode( ' ', $term_cur_name );
								?>
					<div class="reward col-lg-3 col-md-4 col-6 reward-data <?php echo $con_slug . ' ' . $cat_slug . ' ' . $cur_name; ?>"
						data-item-count="<?php echo $i; ?>" data-brand-key="<?php echo get_post_thumbnail_id(); ?>"
						data-categories="<?php echo $cat_slug; ?>" data-currencies="<?php echo $cur_name; ?>"
						data-countries="<?php echo $con_slug; ?>">

						<div class="reward__image-wrapper">
							<img class="reward__image img-fluid" alt="<?php the_title(); ?>"
								src="<?php the_post_thumbnail_url(); ?>" data-toggle="modal"
								data-target="#exampleModalCenter<?php the_ID(); ?>">



							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter<?php the_ID(); ?>" tabindex="-1"
								role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<!-- <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5> -->
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<div class="col-md-12 col-sm-12">
												<div class="row">
													<div class="col-md-5">
														<div class="pop-img">
															<?php the_post_thumbnail(); ?>
														</div>
													</div>
													<div class="col-md-7">
														<div class="pop-title">
															<h1><?php the_title(); ?></h1>
														</div>

														<div>
															<div class="details">
																<span class="details__label">Currency:</span>
																<?php echo $cur_name; ?>
															</div>
															<div class="details">
																<span class="details__label">Amount:</span>
																<?php the_field('amount_rewards_cpt'); ?>
															</div>
															<div class="details">
																<span class="details__label">Type:</span>
																<?php echo $cat_name; ?>
															</div>

														</div>

													</div>

												</div>
											</div>

											<div class="col-md-12">
												<div class="reward-description__description">
													<?php the_field('description_rewards_cpt'); ?>
												</div>

												<div class="reward-description__disclaimer">
													<?php the_field('disclaimer_rewards_cpt'); ?>
												</div>


											</div>

										</div>

									</div>
								</div>
							</div>


						</div>
					</div>
					<?php
								$i++;
								endwhile;
								wp_reset_postdata();
							endif;
						?>

					<div class="col-md-12 d-none no-result-text">
						<h2>No results. Please update your filters.</h2>
					</div>


				</div>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>
<?php if ( $posts = get_field( 'projects' ) ) : ?>
	<!-- PROJECTS -->
	<?php if ( is_page_template( 'projects.php' ) ) { ?>
		<section class="section-padding-top section-padding-bottom">
	<?php } else { ?>
		<section class="section-padding-top">
	<?php } ?>
		<div class="container-fluid">
			<div class="projects-wrap col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
				<?php if ( !is_page_template( 'projects.php' ) ) { ?>
					<div class="text-center section-padding-bottom">
						<?php if ( $projects_title = get_field( 'projects_title' ) ) : ?>
							<h2 class="h1"><?php echo esc_html( $projects_title ); ?></h2>
						<?php endif; ?>
						<a href="<?php echo get_page_link( 314 ); ?>" title="All projects" class="button dark">All projects</a>
					</div>
				<?php } ?>
				<div class="row">
					<?php foreach( $posts as $post) : ?>
						<?php setup_postdata( $post ); ?>
						<div class="col-sm-6 col-xs-12">
							<div class="project overflow-hidden">
								<div class="img cover overflow-hidden bg-dark">
									<?php if ( $project_image = get_field( 'project_image' ) ) : ?>
										<img
											src="<?php echo esc_url( $project_image[ 'url' ] ); ?>"
											alt="<?php echo esc_attr( $project_image[ 'alt' ] ); ?>"
											width="<?php echo esc_attr( $project_image[ 'width' ] ); ?>"
											height="<?php echo esc_attr( $project_image[ 'height' ] ); ?>"
											loading="lazy"
										>
									<?php endif; ?>
								</div>
								<div class="project-info">
									<h3 class="h6 dark"><?php the_title(); ?></h3>
									<?php if ( $project_description = get_field( 'project_description' ) ) : ?>
										<div class="content small">
											<p><?php echo $project_description; ?></p>
										</div>
									<?php endif; ?>
								</div>
								<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" class="full-size"></a>
							</div>
						</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- PROJECTS END -->
<?php endif; ?>
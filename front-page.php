<?php get_header( 'main' ); ?>

<?php
$watch_cat = get_category( 3 );
if ( $watch_cat ):
	$posts = get_posts( [
		'numberposts' => 3,
		'category'    => $watch_cat->term_id,
		'order'       => 'ASC',
	] );
	?>

    <section
            class="section-watch section-tabs"<?php echo bluerex_get_background( 'section_bg',
		$watch_cat ); ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
					<?php if ( get_field( 'section_header', $watch_cat ) ): ?>
                        <h3><?php the_field( 'section_header',
								$watch_cat ); ?></h3>
					<?php endif; ?>
					<?php if ( $watch_cat->description ): ?>
                        <h4><?php echo $watch_cat->description; ?></h4>
					<?php endif; ?>
                    <ul class="nav nav-pills" id="myTab" role="tablist">
						<?php
						$data = [];
						$i    = 0;
						foreach ( $posts as $post ):
							setup_postdata( $post );
							$data[ $i ]['post_name'] = $post->post_name;
							$data[ $i ]['url']       = get_the_permalink();
							$data[ $i ]['content']
							                         = esc_attr( wp_strip_all_tags( get_the_content( '' ) ) );
							?>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill <?php if ( ! $i ) {
									echo 'active';
								} ?>"
                                   id="<?php echo $post->post_name; ?>-tab"
                                   data-toggle="tab"
                                   href="#<?php echo $post->post_name; ?>"
                                   role="tab"
                                   aria-controls="<?php echo $post->post_name; ?>"
                                   aria-selected="true"><?php the_title(); ?></a>
                            </li>
							<?php
							$i ++;
						endforeach;
						?>

                    </ul>
                    <div class="tab-content" id="myTabContent">
						<?php foreach (
							$data

							as $k => $item
						): ?>
                            <div class="tab-pane fade show <?php if ( ! $k ) {
								echo 'active';
							} ?>" id="<?php echo $item['post_name']; ?>"
                                 role="tabpanel"
                                 aria-labelledby="<?php echo $item['post_name']; ?>-tab">
                                <p><?php echo $item['content']; ?></p>
                                <p><a href="<?php echo $item['url']; ?>"
                                      class="btn btn-pink btn-shadow"><?php echo __( 'Read
                                    more', 'bluerex' ); ?></a></p>
                            </div>
						<?php endforeach; ?>
                    </div>

                </div>
                <div class="col-lg-6 text-center">
					<?php
					$image = get_field( 'section_add_img', $watch_cat );
					if ( $image ):?>
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>">
					<?php endif; ?>
                </div>
            </div>
        </div>
		<?php
		wp_reset_postdata();
		unset( $data, $posts );
		?>
    </section>
<?php endif; ?>

<?php

$posts = get_posts( [
	'numberposts' => 3,
	'category'    => 4,
	'order'       => 'ASC',
] );
if ( $posts ):
	?>
    <section class="section-progress text-center">
        <div class="container">
            <div class="row">
				<?php foreach ( $posts as $post ): ?>
                    <div class="col-md-4 progress-item">
						<?php echo $post->post_content; ?>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
		<?php unset( $posts ); ?>
    </section>
<?php endif; ?>

<?php
$lets_cat = get_category( 5 );
if ( $lets_cat ):
	?>
    <section
            class="section-lets text-center"<?php echo bluerex_get_background( 'section_bg',
		$lets_cat ); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3><?php echo $lets_cat->name; ?></h3>
					<?php if ( get_field( 'section_header', $lets_cat ) ): ?>
                        <h4><?php echo get_field( 'section_header',
								$lets_cat ); ?></h4>
					<?php endif; ?>
                    <p><?php echo $lets_cat->description; ?></p>
                    <p>
                        <a href="<?php echo get_category_link( $lets_cat->term_id ); ?>"
                           class="btn btn-pink btn-shadow"><?php echo __( 'Read
                                    more', 'bluerex' ); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$design_cat = get_category( 6 );
if ( $design_cat ):
	$posts = get_posts( [
		'numberposts' => 2,
		'category'    => $design_cat->term_id,
		'order'       => 'ASC',
	] );
	?>
    <section class="section-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3><?php echo $design_cat->name; ?></h3>
                    <h4><?php echo get_field( 'section_header',
							$design_cat ); ?></h4>
                    <p><?php echo $design_cat->description; ?></p>
                    <div class="row">
						<?php foreach ( $posts as $post ):
							setup_postdata( $post );
							?>
                            <div class="col-md-6 mb-3">
                                <span><?php the_field( 'icon' ); ?></span>
                                <h2><?php the_title(); ?></h2>
								<?php the_content( '' ); ?>
                                <p><a href="<?php the_permalink(); ?>"
                                      class="btn btn-pink btn-shadow"><?php echo __( 'Read
                                    more', 'bluerex' ); ?></a></p>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6">
					<?php
					$video = get_field( 'section_video', $design_cat );
					if ( $video ):
						$video = str_replace( 'youtu.be', 'youtube.com/embed',
							$video );
						?>
                        <div class="embed-responsive embed-responsive-16by9 mt-5">
                            <iframe id="videoPlayer"
                                    class="embed-responsive-item"
                                    src="<?php echo $video; ?>"
                                    frameborder="0"
                                    allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            <div id="videoPlayBtn"></div>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
		<?php
		wp_reset_postdata();
		unset( $posts );
		?>
    </section>
<?php endif; ?>

<?php
$work_cat = get_category( 7 );
if ( $work_cat ):
	$posts = get_posts( [
		'numberposts' => 3,
		'category'    => $work_cat->term_id,
		'order'       => 'ASC',
	] );
	?>
    <section class="section-work section-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h4><?php echo $work_cat->name; ?></h4>
                    <p><?php echo $work_cat->description; ?></p>
                </div>
                <div class="col-md-12">

                    <ul class="nav nav-pills justify-content-center"
                        id="myTab-gallery" role="tablist">
						<?php
						$data = [];
						$i    = 0;
						foreach ( $posts as $post ):
							setup_postdata( $post );
							$data[ $i ]['post_name'] = $post->post_name;
							$data[ $i ]['url']       = get_the_permalink();
							$data[ $i ]['content']
							                         = get_the_content( '' );
							?>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill <?php if ( ! $i ) {
									echo 'active';
								} ?>"
                                   id="<?php echo $post->post_name; ?>-tab"
                                   data-toggle="tab"
                                   href="#<?php echo $post->post_name; ?>"
                                   role="tab"
                                   aria-controls="<?php echo $post->post_name; ?>"
                                   aria-selected="true"><?php the_title(); ?></a>
                            </li>
							<?php
							$i ++;
						endforeach;
						?>

                    </ul>
                    <div class="tab-content" id="myTabContent2">
						<?php foreach (
							$data

							as $k => $item
						): ?>
                            <div class="tab-pane fade show <?php if ( ! $k ) {
								echo 'active';
							} ?>" id="<?php echo $item['post_name']; ?>"
                                 role="tabpanel"
                                 aria-labelledby="<?php echo $item['post_name']; ?>-tab">
                                <p><?php echo $item['content']; ?></p>
                            </div>
						<?php endforeach; ?>
                    </div>


                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php

$posts = get_posts( [
	'post_type' => 'reviews',
	'order'     => 'ASC',
] );
if ( $posts ):
	?>
    <section class="section-reviews">
        <div id="carouselExampleIndicators" class="carousel slide"
             data-ride="carousel">
            <ol class="carousel-indicators">
				<?php for ( $i = 0; $i < count( $posts ); $i ++ ): ?>
                    <li data-target="#carouselExampleIndicators"
                        data-slide-to="<?php echo $i; ?>"
						<?php if ( ! $i ) {
							echo 'class="active"';
						} ?>></li>
				<?php endfor; ?>
            </ol>
            <div class="carousel-inner">
				<?php $i = 0;
				foreach ( $posts as $post ): ?>
                    <div class="carousel-item <?php if ( ! $i ) {
						echo 'active';
					} ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="carousel-caption">
                                        <h3><?php echo $post->post_title; ?></h3>
                                        <h4><?php the_field( 'review_header' ); ?></h4>
                                        <blockquote class="blockquote">
                                            <p class="mb-0"><?php echo $post->post_content; ?></p>
                                            <footer class="blockquote-footer">
												<?php the_field( 'review_author' ); ?>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-sm-5 d-none d-sm-block">
									<?php if ( has_post_thumbnail( $post->ID ) ): ?>
										<?php echo get_the_post_thumbnail( $post->ID ); ?>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php $i ++;endforeach; ?>
            </div>
            <a class="carousel-control-prev"
               href="#carouselExampleIndicators"
               role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next"
               href="#carouselExampleIndicators"
               role="button" data-slide="next">
                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
<?php endif; ?>

    <section class="section-form text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Need Help?</h4>
                    <h5>Don't Forget to Contact With Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                        Sapiente iusto modi illo quasi maiores
                        iure expedita vel quo, magnam quia temporibus
                        consectetur unde, repellendus odit culpa rerum.
                        Suscipit, nihil, provident!</p>

                    <form class="text-left">
                        <div class="row">
                            <div class="col-md-5">
                                <label>
                                    <input type="text" class="form-control"
                                           placeholder="Name">
                                </label>
                            </div>
                            <div class="col-md-5">
                                <label>
                                    <input type="email" class="form-control"
                                           placeholder="Email">
                                </label>
                            </div>
                            <div class="col-md-2 text-center text-md-left">
                                <button type="submit"
                                        class="btn btn-violet btn-shadow">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
<?php get_header(); ?>

<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="article-preview">
                        <h2 class="mb-3">
							<?php the_title(); ?>
                        </h2>
                        <div class="article-excerpt">
							<?php if ( has_post_thumbnail() ): ?>
                                <div class="bluerex-thumb"><?php the_post_thumbnail( 'thumbnail',
										[ 'class' => 'thumb' ] ); ?>
                                </div>
							<?php endif; ?>
							<?php the_content( '' ); ?>
                        </div>
                    </article>
				<?php endwhile; ?>
				<?php else: ?>
                    <p>No posts found</p>
				<?php endif; ?>
            </div>
			<?php echo get_sidebar(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>

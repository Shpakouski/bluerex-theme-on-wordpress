<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
			<?php $custom_logo
				= wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) );
			if ( $custom_logo ): ?>
                <img src="<?php echo $custom_logo[0]; ?>"
                     alt="<?php bloginfo( 'name' ); ?>">
			<?php endif; ?>
			<?php bloginfo( 'name' ); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
			wp_nav_menu( [
				'theme_location' => 'header_menu',
				'container'      => false,
				'menu_class'     => 'navbar-nav ml-auto',
			] );
			?>
        </div>
    </nav>
</header>
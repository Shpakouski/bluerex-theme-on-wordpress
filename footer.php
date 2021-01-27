<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
					<?php dynamic_sidebar( 'sidebar-footer1' ); ?>

                </div>
            </div>
            <div class="col-md-6 footer-images">
                <div class="row">
                    <div class="col-md-12">
						<?php dynamic_sidebar( 'sidebar-footer2' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <span class="nav-link">&copy; 2021 Uladzimir</span>
                    </li>
                    <li class="nav-item"><a href="#"
                                            class="nav-link">Privacy</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Terms of
                            Use</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Site
                            Map</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<button class="scrollToTop"><i class="fas fa-angle-up"></i></button>

<!-- <div class="preloader d-flex justify-content-center align-items-center">
    <div class="spinner-border text-danger" style="width: 10rem; height: 10rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> -->

<?php wp_footer(); ?>
</body>

</html>
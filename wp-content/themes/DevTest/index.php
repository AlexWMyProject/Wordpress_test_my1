<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <p>Find the Store near you:</p>
                    <?php wp_dropdown_categories()?>
                </div>
                <div class="col-md-10 content">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3">
                                    <h2>USA</h2>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12"> <h4>NY</h4></div>
                                    </div>
                                    <div class="row">
                                        <div id="one" class="col-md-4">
                                            <h4>Mark Lngram</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12"> <h4>LA</h4></div>
                                    </div>
                                    <div class="row">
                                        <div id="one" class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h2>United Kingdom</h2>
                                </div>
                                <div class="col-md-9">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div id="one" class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h2>Canada</h2>
                                </div>
                                <div class="col-md-9">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div id="one" class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h2>Australia</h2>
                                </div>
                                <div class="col-md-9">
                                    <div class="row"></div>
                                    <div class="row">
                                        <div id="one" class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Name of store</h4>
                                            <p>Adress: 25 hadsawn rd.</p>
                                            <p>Phone: +44 376 283 29</p>
                                            <p>Website: www.ehfryu.com</p>
                                            <p>Email: ehfryu@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>

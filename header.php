<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<?php wp_head(); ?>

        <link rel="stylesheet" href="/wp-content/themes/rams-child/foundation-css/foundation-icons.css" />
	</head>

	<body <?php body_class(); ?>>

		<div class="sidebar bg-mint">
<a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>

			        	<img src='/wp-content/themes/rams-child/logo.png' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
			        </a>
			<div class="sidebar-inner">







					<h1 class="blog-title">
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</h1>



				<a class="nav-toggle hidden" title="<?php _e('Click to view the navigation','rams') ?>" href="#">

					<div class="bars">

						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>

						<div class="clear"></div>

					</div>

					<p>
						<span class="menu"><?php _e('Menu','rams') ?></span>
						<span class="close"><?php _e('Close','rams') ?></span>
					</p>

				</a>

				<ul class="main-menu">

					<?php if ( has_nav_menu( 'primary' ) ) {

						wp_nav_menu( array(

							'container' => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'

						) ); } else {

						wp_list_pages( array(

							'container' => '',
							'title_li' => ''

						));

					} ?>

				 </ul>

				<ul class="social-menu">
				    <li class="social-item">
				        <a href="http://twitter.com/@chriszirkel" title="@chriszirkel on Twitter" target="_blank">
                          <i class="social-icon fi-social-twitter"></i></li>
                        </a>

				    <li class="social-item">
				        <a href="https://plus.google.com/u/0/108179629253525670010" title="+ChrisZirkel" target="_blank">
                            <i class="social-icon fi-social-google-plus"></i>
                        </a>
                    </li>

				    <li class="social-item">
				        <a href="http://github.com/chriszirkel" title="@chriszirkel on GitHub" target="_blank">
                           <i class="social-icon fi-social-github"></i>
                        </a>
				    </li>
				</ul>

				 <div class="clear"></div>

			</div> <!-- /sidebar-inner -->
            <div class="sidebar-footer">
                <a href="/legal-disclosure">Legal Disclosure</a><br/><a href="http://www.andersnoren.se">Theme by Anders Nor&eacute;n</a>
            </div>
		</div> <!-- /sidebar -->

		<ul class="mobile-menu bg-dark hidden">

			<?php if ( has_nav_menu( 'primary' ) ) {

				wp_nav_menu( array(

					'container' => '',
					'items_wrap' => '%3$s',
					'theme_location' => 'primary'

				) ); } else {

				wp_list_pages( array(

					'container' => '',
					'title_li' => ''

				));

			} ?>

		 </ul>

		<div class="wrapper" id="wrapper">

			<div class="section-inner wrapper-inner">
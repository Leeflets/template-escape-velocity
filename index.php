<!DOCTYPE HTML>
<!--
	Escape Velocity 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php $settings->out( 'site-meta', 'title' ); ?></title>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="description" content="<?php $settings->out( 'site-meta', 'description' ); ?>">
		<meta name="author" content="<?php $settings->out( 'site-meta', 'author' ); ?>">
		
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900" rel="stylesheet" />
		<!--[if lte IE 8]><script src="<?php $template->url( 'js/html5shiv.js' ); ?>"></script><link rel="stylesheet" href="<?php $template->url( 'css/ie8.css' ); ?>" /><![endif]-->
		
		<script src="<?php $template->url( 'js/jquery.min.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/jquery.dropotron.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/config.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/skel.min.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/skel-panels.min.js' ); ?>"></script>
	
		<link rel="stylesheet" href="<?php $template->url( 'css/skel-noscript.css' ); ?>" />
		<link rel="stylesheet" href="<?php $template->url( 'css/style.css' ); ?>" />
		<link rel="stylesheet" href="<?php $template->url( 'css/style-desktop.css' ); ?>" />
		
	    <?php $hook->apply( 'head' ); ?>
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div data-lf-edit="header" id="header-wrapper" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<div id="header">
									
									<!-- Logo -->
										<div id="logo">
											<h1><a href="#"><?php $content->out( 'header', 'title' ); ?></a></h1>
											<span class="byline"><?php $content->out( 'header', 'text' ); ?></span>
										</div>
									<!-- /Logo -->
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
											    <?php $header_links = $content->get( 'header', 'links' ); ?>
											    <?php if ( $header_links ) : ?>
											        <?php foreach ( $header_links as $link ) : ?>
											        <li><a href="<?php echo $link['link']; ?>"><?php echo $link['title']; ?></a></li>
											        <?php endforeach; ?>
											    <?php endif; ?>
											</ul>
										</nav>
									<!-- /Nav -->

								</div>
							<!-- /Header -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Header Wrapper -->
		
		<!-- Intro Wrapper -->
			<div data-lf-edit="intro" id="intro-wrapper" class="wrapper wrapper-style1">
				<div class="title"><?php $content->out( 'intro', 'title' ); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Intro -->
								<section id="intro">
									<p class="style1"><?php $content->out( 'intro', 'intro-text' ); ?></p>
									<p class="style2"><?php $content->out( 'intro', 'text' ); ?></p>
									<p class="style3"><?php $content->out( 'intro', 'sub-text' ); ?></p>
									<ul class="actions">
										<li><a href="<?php $content->out( 'intro', 'button-link' ); ?>" class="button button-style3 button-big"><?php $content->out( 'intro', 'button-text' ); ?></a></li>
									</ul>
								</section>
							<!-- /Intro -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Intro Wrapper -->
		
		<!-- Main Wrapper -->
			<div data-lf-edit="details" class="wrapper wrapper-style2">
				<div class="title"><?php $content->out( 'details', 'title' ); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									
									<!-- Image -->
										<a href="http://fav.me/d5pjw3g" class="image image-featured">
											<?php if ( $photo = $content->get( 'details', 'image' ) ) { echo $image->get( 'full', $photo ); } ?>
										</a>
									<!-- /Image -->
									
									<!-- Features -->
										<section id="features">
											<header class="style1">
												<h2><?php $content->out( 'details', 'intro-title' ); ?></h2>
												<p class="byline"><?php $content->out( 'details', 'text' ); ?></p>
											</header>
											<div class="feature-list">
												<div>
													<div class="row">
													    <?php $item_types = $content->get( 'details', 'items' ); ?>
													    <?php if ( $item_types ) : ?>
													        <?php foreach ( $item_types as $item ) : ?>
													        <div class="6u">
													            <section>
													                <h3 class="icon icon-check"><?php echo $item['title']; ?></h3>
													                <p><?php echo $item['text']; ?></p>
													            </section>
													        </div>
													        <?php endforeach; ?>
													    <?php endif; ?>
													</div>
												</div>
											</div>
											<ul class="actions actions-centered">
												<li><a href="<?php $content->out( 'details', 'button-link' ); ?>" class="button button-style1 button-big"><?php $content->out( 'details', 'button-title' ); ?></a></li>
												<li><a href="<?php $content->out( 'details', 'action-link' ); ?>" class="button button-style2 button-big"><?php $content->out( 'details', 'action-title' ); ?></a></li>
											</ul>
										</section>
									<!-- /Features -->
									
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Main Wrapper -->
		
		<!-- Highlights Wrapper -->
			<div data-lf-edit="portfolio" class="wrapper wrapper-style3">
				<div class="title"><?php $content->out( 'portfolio', 'title' ); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Highlights -->
								<div id="highlights">
									<div>
										<div class="row">
										    <?php $items = $content->get( 'portfolio', 'items' ); ?>
										    <?php if ( $items ) : ?>
										        <?php foreach ( $items as $item ) : ?>
										        <div class="4u">
										        	<section class="highlight highlight-one">
										        		<a href="<?php echo $item['link']; ?>" class="image image-full"><?php if ( isset( $item['screenshot'] ) && $item_screenshot = $image->get( 'portfolio', $item['screenshot'] ) ) { echo $item_screenshot; } ?></a>
										        		<h3><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h3>
										        		<p><?php echo $item['text']; ?></p>
										        		<ul class="actions">
										        			<li><a href="<?php echo $item['link']; ?>" class="button button-style1">Learn More</a></li>
										        		</ul>
										        	</section>
										        </div>
										        <?php endforeach; ?>
										    <?php endif; ?>
										</div>
									</div>
								</div>
							<!-- /Highlights -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Highlights Wrapper -->

		<!-- Footer Wrapper -->
			<div data-lf-edit="contact" id="footer-wrapper" class="wrapper">
				<div class="title"><?php $content->out( 'contact', 'title' ); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Footer -->
								<div id="footer">
									<header class="style1">
										<h2><?php $content->out( 'contact', 'intro-title' ); ?></h2>
										<p class="byline"><?php $content->out( 'contact', 'intro-text' ); ?></p>
									</header>
									<hr />
									<div>
										<div class="row">
											<div class="6u">

												<?php
												if ( isset( $contact_form ) ) :
												    include $contact_form->template_path();
												endif;
												?>

											</div>
											<div class="6u">
											
												<!-- Contacts -->
													<section class="footer-two">
														<div class="feature-list feature-list-small">
															<div>
																<div class="row">
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-home">Mailing Address</h3>
																			<p><?php $content->out( 'contact', 'address' ); ?></p>
																		</section>
																	</div>
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-comment">Social</h3>
																			<p>
																				<?php $contact = $content->get( 'contact' ); ?>
																				
																				<?php if ( $contact['twitter'] !== '' ) { ?>
																				<a href="<?php $content->out( 'contact', 'twitter' ); ?>">Twitter</a><br>
																				<?php } ?>
																				
																				<?php if ( $contact['facebook'] !== '' ) { ?>
																				<a href="<?php $content->out( 'contact', 'facebook' ); ?>">Facebook</a>
																				<?php } ?>
																			</p>
																		</section>
																	</div>
																</div>
																<div class="row">
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-envelope">Email</h3>
																			<p>
																				<a href="mailto:<?php $content->out( 'contact', 'email' ); ?>"><?php $content->out( 'contact', 'email' ); ?></a>
																			</p>
																		</section>
																	</div>
																	<div class="6u">
																		<section>
																			<h3 class="icon icon-phone">Phone</h3>
																			<p><?php $content->out( 'contact', 'phone' ); ?></p>
																		</section>
																	</div>
																</div>
															</div>
														</div>
													</section>
												<!-- /Contacts -->
													
											</div>
										</div>
									</div>
									<hr />
								</div>
							<!-- /Footer -->

							<!-- Copyright -->
								<div id="copyright">
									<span><?php $content->out( 'contact', 'footer-text' ); ?></span>
								</div>
							<!-- /Copyright -->
						
						</div>
					</div>
				</div>
			</div>
		<!-- /Footer Wrapper -->

		<?php $hook->apply( 'footer' ); ?>
	</body>
</html>
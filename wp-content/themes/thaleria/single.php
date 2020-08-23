<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package thaleria
*/

get_header();
?>
<article class="job-post">
	<header class="header text-white bg-royal-blue">
		<div class="overlay opacity-90"></div>
		<div class="container text-center text-white">
			<div class="row h-100">
				<div class="col-lg-8 mx-auto align-self-center job-post-picture">
					<?php $image2 = get_field('top-picture'); ?>
					<p><img class="my-7" src="<?php echo $image2['url']; ?>" alt="..."></p>
					<h1 class="display-4 my-1 job-post-title"><strong><?php echo $post->post_title; ?></strong></h1>
				</div>
			</div>
		</div>
	</header>
	<main class="main-content bg-royal-blue">
		<div class="container text-white">
			<section class="section p-0">
				<div class="container-fluid px-0">
					<div class="row no-gap text-left">
						<div class="col-md-8 col-xl-6 px-5 py-6 p-xl-8 p-lg-6 p-md-4">
							<?php echo get_field('description'); ?>
						</div>
						<div class="col-md-4 col-xl-6 px-5 py-6 p-xl-8 p-lg-6 p-md-4">
							<div class="media">
								<div class="media-body">
									<h5>Location</h5>
									<p><?php echo get_field('location'); ?></p>
								</div>
							</div>
							<hr class="my-4">
							<div class="media">
								<div class="media-body">
									<h5>Experience</h5>
									<p><?php echo get_field('experience'); ?></p>
								</div>
							</div>
							<hr class="my-4">
							<div class="media">
								<div class="media-body">
									<h5>Salary Range</h5>
									<p><?php echo get_field('salary-range'); ?></p>
								</div>
							</div>
							<hr class="my-4">
							<div class="media">
								<div class="media-body">
									<h5>Client</h5>
									<p><?php echo get_field('client'); ?></p>
								</div>
							</div>
							<hr class="my-4">
							<div class="media">
								<div class="media-body keywords-body">
									<h5>Keywords</h5>
									<?php 
									$post_tags = get_the_tags();
 
									if ( $post_tags ) {
										foreach( $post_tags as $tag ) {
										echo '<span class="badge badge-outline-thaleria">' . $tag->name . '</span>'; 
										}
									}
									?>
								</div>
							</div>
							<hr class="my-5">
							<div class="media-body share-body">
								<?php echo get_field('if-not-for-you'); ?>
								<div class="social social-light text-left">
									<a class="social-facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
									<a class="social-twitter" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
									<a class="social-linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
									<a class="social-git" href="https://github.com/"><i class="fab fa-git"></i></a>
									<a class="social-reddit" href="https://www.reddit.com/"><i class="fab fa-reddit"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--
		|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
		| Apply form
		|‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
		!-->
		<section class="section">
			<div class="container text-white">
				<header class="section-header">
					<h2>Interested? Apply now</h2>
					<hr>
					<p class="lead">Make sure to fill the fields below and we will get back to you as soon as possible.</p>
				</header>
				<div class="row">
					<div class="col-md-8 mx-auto">
						<?php echo get_field('apply-form'); ?>
				</div>
			</section>
		</main><!-- /.main-content -->
	</article><!-- #primary -->

	<?php
	get_footer();

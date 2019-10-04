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
				<div class="col-lg-8 mx-auto align-self-center">
					<?php $image2 = get_field('top-picture'); ?>
					<p><img class="my-7" src="<?php echo $image2['url']; ?>" alt="..."></p>
					<h1 class="display-4 my-1"><strong><?php echo $post->post_title; ?></strong></h1>
				</div>
			</div>
		</div>
	</header>
	<main class="main-content bg-royal-blue">
		<div class="container text-white">
			<section class="section p-0">
				<div class="container-fluid px-0">
					<div class="row no-gap text-left">
						<div class="col-md-8 col-xl-6 px-5 py-6 p-md-8">
							<?php echo get_field('description'); ?>
						</div>

						<div class="col-md-4 col-xl-6 px-5 py-6 p-md-8">
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
								<div class="media-body">
									<h5>Keywords</h5>
									<span class="badge badge-outline-thaleria">Java</span>
									<span class="badge badge-outline-thaleria">SOA</span>
									<span class="badge badge-outline-thaleria">Spring</span>
									<span class="badge badge-outline-thaleria">Hibernate</span>
									<span class="badge badge-outline-thaleria">RDBMS</span>
									<span class="badge badge-outline-secondary">Microservices</span>
									<span class="badge badge-outline-secondary">Middleware</span>
									<span class="badge badge-outline-secondary">ESB</span>
									<span class="badge badge-outline-secondary">UML</span>
									<span class="badge badge-outline-secondary">Agile Methodologies</span>
								</div>
							</div>
							<hr class="my-5">
							<div class="media-body">
								<p>Not for you? Share this job or recommend someone you know and earn €750.</p>
								<div class="social social-light text-left">
									<a class="social-facebook" href="#"><i class="fab fa-facebook"></i></a>
									<a class="social-twitter" href="#"><i class="fab fa-twitter"></i></a>
									<a class="social-linkedin" href="#"><i class="fab fa-linkedin"></i></a>
									<a class="social-git" href="#"><i class="fab fa-git"></i></a>
									<a class="social-reddit" href="#"><i class="fab fa-reddit"></i></a>
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

						<form id="contactform" method="POST">

							<input type="hidden" name="subject" value="Resume">
							<div class="input-group">
								<input type="text" class="form-control required" name="name" placeholder="First and Last Name" required>
								<div class="input-group-append">
									<span class="input-group-text"><i class="fa fa-user text-blue"></i></span>
								</div>
							</div>
							<br>

							<div class="input-group">
								<input type="text" class="form-control" name="email" placeholder="Email address" required>
								<div class="input-group-append">
									<span class="input-group-text"><i class="fa fa-envelope text-blue"></i></span>
								</div>
							</div>

							<br>

							<div class="input-group">
								<input type="text" class="form-control" name="linkedin" placeholder="LinkedIn Profile" required>
								<div class="input-group-append">
									<span class="input-group-text"><i class="fab fa-linkedin-in text-blue"></i></span>
								</div>
							</div>

							<br>

							<div class="input-group">
								<input type="text" name="github" class="form-control" placeholder="Github Profile">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fab fa-github-alt text-blue"></i></span>
								</div>
							</div>

							<br>

							<div class="form-group">
								<textarea class="form-control" name="extra_information" placeholder="Tell us more about yourself" rows="3"></textarea>
							</div>

							<div class="form-group col-12 col-md-6">
								<input type="text" name="_gotcha" style="display:none" />
							</div>

							<br>

							<button type="submit" class="btn btn-light">Submit your application</button>

						</div>
					</form>

					<script>
						var contactform = document.getElementById('contactform');
						contactform.setAttribute('action', '//formspree.io/' + 'recruitment' + '@' + 'thaleria' + '.' + 'com');
					</script>
				</div>
			</section>



		</main><!-- /.main-content -->
	</article><!-- #primary -->

	<?php
	get_footer();

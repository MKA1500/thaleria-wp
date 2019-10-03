<?php
/* Template Name: Home */
get_header();
?>
<!-- Header -->
<header id="home" class="header text-white h-fullscreen text-center text-lg-left bg-royal-blue">

  <div class="container">
    <div class="row align-items-center h-100">

      <div class="col-lg-6">
        <h1>Hello, <span class="text-primary" data-typing="nice to meet you."></span></h1>
        <p class="lead mt-5 mb-8">Strengthen your teams with a dedicated, transparent, reliable partner. Thaleria
          puts efficiency and work ethic front and center of its Consulting Services.</p>
        <p class="gap-xy">
          <a class="btn btn-lg btn-round btn-outline-light mw-200" href="#first">Learn more</a>
        </p>
      </div>

      <div class="col-lg-6 ml-auto">
        <img class="mt-5" src="assets/img/vector/cubes.png" alt="img">
      </div>

    </div>
  </div>
</header><!-- /.header -->
<main class="main-content bg-royal-blue">
  <?php
    $page = get_page_by_title( 'home' );
    $content = apply_filters('the_content', $page->post_content);
    echo $content;
  ?>
</main>

<?php
get_footer();
?>

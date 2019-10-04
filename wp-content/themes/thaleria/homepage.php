<?php
/* Template Name: Home */
get_header();
?>
<!-- Header -->
<header id="home" class="header text-white h-fullscreen text-center text-lg-left bg-royal-blue">

  <div class="container">
    <div class="row align-items-center h-100">

      <div class="col-lg-6">
        <h1><?php the_field('header-start'); ?><span class="text-primary" data-typing="nice to meet you."></span></h1>
        <p class="lead mt-5 mb-8"><?php the_field('header-desc'); ?></p>
        <p class="gap-xy">
          <a class="btn btn-lg btn-round btn-outline-light mw-200" href="#first">Learn more</a>
        </p>
      </div>

      <div class="col-lg-6 ml-auto">
        <?php $image1 = get_field('tob-banner-image'); ?>
        <img src="<?php echo $image1['url']; ?>" class="mt-5" Alt="cubes" />
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

  <section class="section" id="current-openings">
    <div class="container">
      <header class="section-header text-white">
        <h2><?php the_field('current-openings'); ?></h2>
        <hr>
      </header>
      <div class="row gap-y">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'category_name' => 'Job Post',
          'posts_per_page' => 3
        );
        $arr_posts = new WP_Query( $args );
        if ( $arr_posts->have_posts() ) :
          while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
          ?>
          <div class="col-lg-4" id="post-<?php the_ID(); ?>">
            <div class="card card-body border text-center">
              <p class="my-5"><i class="fab fa-java lead-8 text-blue"></i></p>
              <h5><?php the_title(); ?></h5>
              <p><?php echo get_the_excerpt(); ?></p>
              <p>
                <a
                  class="small-3 fw-800 text-blue"
                  href="<?php echo get_permalink( $post->ID ); ?>"
                  target="_blank">Find out more
                <i class="fa fa-angle-right small-5 pl-1"></i>
              </a>
              </p>
            </div>
          </div>
          <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
    <br>
    <br>
    <div class="col-md-12 text-center text-md-rigt">
      <a class="btn btn-lg btn-round btn-outline-light mw-200" href="<?php echo get_option("siteurl") .'/careers'; ?>">
        View all Open Positions
      </a>
    </div>
  </section>
</main>

<?php
get_footer();
?>

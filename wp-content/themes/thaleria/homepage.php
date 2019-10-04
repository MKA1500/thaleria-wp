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
  <div class="job-posts-index">
    <div class="row">
      <?php
      $counter = 1;
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'Job Post',
        'posts_per_page' => 5
      );
      $arr_posts = new WP_Query( $args );
      if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
      $arr_posts->the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" class="col-xl-8 post_<?php echo $counter; ?>">
        <a href="<?php echo get_permalink( $post->ID ); ?>">
          <div class="frontpage-thumbnail">
            <?php
            if ( has_post_thumbnail() ) :
            the_post_thumbnail();
            endif;
            ?>
          </div>
          <div class="index-text">
            <header class="entry-header">
              <h2 class="entry-title"><?php the_title(); ?></h2>
            </header>
            <div class="entry-content">
              <p>
                <?php echo get_the_excerpt(); ?>
                <strong>Czytaj więcej &raquo</strong>
              </p>
            </div>
          </div>
        </a>
      </article>
      <?php
      $counter++;
      endwhile;
      endif;
      ?>
    </div>
    <div class="see-more">
      <a href="<?php echo get_option("siteurl") .'/blog'; ?>" role="button" class="btn btn-default">
        Zobacz więcej
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </div>
</main>

<?php
get_footer();
?>

<?php
/* Template Name: Privacy Policy */
get_header();
?>
<main class="main-content bg-royal-blue">
  <div class="container privacy-policy">
    <?php
    $page = get_page_by_title( 'privacy policy' );
    $content = apply_filters('the_content', $page->post_content);
    echo $content;
    ?>
  </div>
</main>

<?php
get_footer();
?>

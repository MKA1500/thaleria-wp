<?php
/* Template Name: Home */
get_header();
?>

<?php
  $page = get_page_by_title( 'home' );
  $content = apply_filters('the_content', $page->post_content);
  echo $content;
?>

<?php
get_footer();
?>

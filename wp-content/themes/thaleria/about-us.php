<?php
/* Template Name: About Us */
get_header();
?>
<!-- <main class="main-content bg-royal-blue"> -->
<?php
$page = get_page_by_title( 'about us' );
$content = apply_filters('the_content', $page->post_content);
echo $content;
?>
<!-- </div> -->
<?php
get_footer();
?>

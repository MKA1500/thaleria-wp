<?php
/* Template Name: Careers */
get_header();
?>
<!-- <main class="main-content bg-royal-blue"> -->
<?php
$page = get_page_by_title( 'careers' );
$content = apply_filters('the_content', $page->post_content);
echo $content;
?>
<!-- </div> -->
<?php
get_footer();
?>

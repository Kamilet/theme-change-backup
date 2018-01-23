<?php
/*
Template Name: notebook
*/
?>
<!-- 新模板，引入评论 -->
<?php get_header(); ?>

<?php hu_get_content( 'tmpl/page-tmpl'); ?>

<?php get_sidebar(); ?>

<?php comments_template(‘/comments.php’); ?><!-- 存疑符号，但运行正常 -->

<?php get_footer(); ?>
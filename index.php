

<?php get_header(''); ?>
<?php if (have_posts() ):?><?php while (have_posts()):the_post();?>
<?php the_title(); ?>
<?php the_content(''); ?>
<?php endwhile;endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>
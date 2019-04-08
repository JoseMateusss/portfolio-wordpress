<?php get_header(); ?>
<div class="container">
<h2><?php the_title(); ?></h2>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

<p><?php the_content(); ?></p>
<?php endwhile; ?>
<?php endif; ?>
</div>





<?php get_footer();?>
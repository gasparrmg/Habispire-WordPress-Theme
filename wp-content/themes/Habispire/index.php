<?php get_header(); ?>

<div id="main">
    <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div id="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(__('Continue Reading')); ?>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <?php echo wpautop('Sorry, not posts were found') ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
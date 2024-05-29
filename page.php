<?php get_header(); ?>

<div class="container">
    <div class="content">
        <div class="main-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="article">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </article>
            <?php endwhile; endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="container">
    <div class="content">
        <div class="main-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="article">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
            </article>
            <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
        <?php  //get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
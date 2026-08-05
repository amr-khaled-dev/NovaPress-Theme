<?php defined('ABSPATH') || exit; ?>

<article class="article-card">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo esc_html(get_the_excerpt()); ?></p>
    <div class="post-meta">
        <span class="post-date">
            <?php echo get_the_date(); ?>
        </span>
        <span class="post-author">
            <?php echo get_the_author(); ?>
        </span>
    </div>
    <a href="<?php the_permalink(); ?>">Read More...</a>
</article>
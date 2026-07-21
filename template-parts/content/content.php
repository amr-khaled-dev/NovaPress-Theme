<?php defined('ABSPATH') || exit; ?>

<article>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <div class="post-meta">
        <span class="post-date">
            <?php echo get_the_date(); ?>
        </span>
        <span class="post-author">
            <?php echo get_the_author(); ?>
        </span>
    </div>
    <button><a href="<?php the_permalink(); ?>">Read More</a></button>
</article>
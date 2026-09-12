<?php defined('ABSPATH') || exit; ?>

<article class="service-card">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo esc_html(get_the_excerpt()); ?></p>
    <a href="<?php the_permalink(); ?>">Know More...</a>
</article>
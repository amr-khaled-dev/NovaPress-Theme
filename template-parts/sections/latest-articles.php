<?php
defined('ABSPATH') || exit;

$latestArticlesTitle = novapress_get_option('latest_articles_title', 'Latest Articles');
$latestArticlesDesc = novapress_get_option('latest_articles_description', 'Check out our latest blog posts');
?>

<section class="latest-articles" aria-labelledby="articlesTitle">
    <div class="container">
        <div class="section-header">
            <h2 id="articlesTitle"><?php echo esc_html($latestArticlesTitle); ?></h2>
            <p><?php echo esc_html($latestArticlesDesc); ?></p>
        </div>
        <div class="articles-grid">
            <?php
            $latestArticlesArgs = array(
                'post_type'      => 'post',
                'posts_per_page' => 3
            );
            $latestArticles = new WP_Query($latestArticlesArgs);

            if ($latestArticles->have_posts()) :
                while ($latestArticles->have_posts()) :
                    $latestArticles->the_post();
                    get_template_part('template-parts/content/content');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
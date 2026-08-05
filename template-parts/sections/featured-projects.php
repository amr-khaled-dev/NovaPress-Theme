<?php
defined('ABSPATH') || exit;

$projectsTitle = novapress_get_option('projects_title', 'Featured Projects');
$projectsDesc = novapress_get_option('projects_description', 'Check out some of our featured projects');
?>

<section class="featured-projects" aria-labelledby="projectsTitle">
    <div class="container">
        <div class="section-header">
            <h2 id="projectsTitle"><?php echo esc_html($projectsTitle); ?></h2>
            <p><?php echo esc_html($projectsDesc); ?></p>
        </div>
        <div class="projects-grid">
            <article class="project-card">
                <div class="project-image">Image</div>
                <h3>Project1 Title</h3>
                <span class="project-category">Category</span>
                <p>Project1 Description</p>
                <a href="#" class="btn project-details">Know More</a>
            </article>
            <article class="project-card">
                <div class="project-image">Image</div>
                <h3>Project2 Title</h3>
                <span class="project-category">Category</span>
                <p>Project2 Description</p>
                <a href="#" class="btn project-details">Know More</a>
            </article>
            <article class="project-card">
                <div class="project-image">Image</div>
                <h3>Project3 Title</h3>
                <span class="project-category">Category</span>
                <p>Project3 Description</p>
                <a href="#" class="btn project-details">Know More</a>
            </article>
        </div>
    </div>
</section>
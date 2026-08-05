<?php
defined('ABSPATH') || exit;

$teamTitle = novapress_get_option('team_title', 'Our Team');
$teamDesc = novapress_get_option('team_description', 'Meet our talented team of professionals');
?>

<section class="team" aria-labelledby="teamTitle">
    <div class="container">
        <div class="section-header">
            <h2 id="teamTitle"><?php echo esc_html($teamTitle); ?></h2>
            <p><?php echo esc_html($teamDesc); ?></p>
        </div>
        <div class="team-grid">
            <article class="team-card">
                <div class="team-avatar">Avatar</div>
                <h3>Team Member1</h3>
                <span>Role</span>
                <p>Team Member1 Bio</p>
                <div class="social-links">Social Links Container</div>
            </article>
            <article class="team-card">
                <div class="team-avatar">Avatar</div>
                <h3>Team Member2</h3>
                <span>Role</span>
                <p>Team Member2 Bio</p>
                <div class="social-links">Social Links Container</div>
            </article>
            <article class="team-card">
                <div class="team-avatar">Avatar</div>
                <h3>Team Member3</h3>
                <span>Role</span>
                <p>Team Member3 Bio</p>
                <div class="social-links">Social Links Container</div>
            </article>
            <article class="team-card">
                <div class="team-avatar">Avatar</div>
                <h3>Team Member4</h3>
                <span>Role</span>
                <p>Team Member4 Bio</p>
                <div class="social-links">Social Links Container</div>
            </article>
        </div>
    </div>
</section>
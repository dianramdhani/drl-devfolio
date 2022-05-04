<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(<?= get_theme_mod('hero_bg_image', get_template_directory_uri() . '/assets/img/hero-bg.jpg'); ?>)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
        <div class="table-cell">
            <div class="container">
                <p class="display-6 color-d">Hai, I am</p>
                <h1 class="hero-title mb-4"><?= get_theme_mod('hero_name', 'Morgan Freeman'); ?></h1>
                <p class="hero-subtitle"><span class="typed" data-typed-items="<?= get_theme_mod('hero_passions', 'Designer, Developer, Freelancer, Photographer'); ?>"></span></p>
                <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="<?= get_theme_mod('hero_cta_link', '#contact'); ?>" role="button"><?= get_theme_mod('hero_cta_text', 'Hire Me'); ?></a></p>
            </div>
        </div>
    </div>
</div><!-- End Hero Section -->
<!-- ======= About Section ======= -->
<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="<?= get_theme_mod('about_photo', get_template_directory_uri() . '/assets/img/testimonial-2.jpg'); ?>" class="img-fluid rounded b-shadow-a" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span><?= get_theme_mod('about_name', 'Morgan Freeman'); ?></span></p>
                                        <p><span class="title-s">Profile: </span> <span><?= get_theme_mod('about_profile', 'full stack developer'); ?></span></p>
                                        <p><span class="title-s">Email: </span> <span><?= get_theme_mod('about_email', 'contact@example.com'); ?></span></p>
                                        <p><span class="title-s">Phone: </span> <span><?= get_theme_mod('about_phone', '(617) 557-0089'); ?></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">
                                <p class="title-s">Skill</p>

                                <span><?= get_theme_mod('about_skill1_name', 'HTML'); ?></span> <span class="pull-right"><?= get_theme_mod('about_skill1_value', '85'); ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= get_theme_mod('about_skill1_value', '85'); ?>%;" aria-valuenow="<?= get_theme_mod('about_skill1_value', '85'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span><?= get_theme_mod('about_skill2_name', 'CSS'); ?></span> <span class="pull-right"><?= get_theme_mod('about_skill2_value', '75'); ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= get_theme_mod('about_skill2_value', '75'); ?>%;" aria-valuenow="<?= get_theme_mod('about_skill2_value', '75'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span><?= get_theme_mod('about_skill3_name', 'JavaScript'); ?></span> <span class="pull-right"><?= get_theme_mod('about_skill3_value', '50'); ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= get_theme_mod('about_skill3_value', '50'); ?>%;" aria-valuenow="<?= get_theme_mod('about_skill3_value', '50'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <span><?= get_theme_mod('about_skill4_name', 'PHP'); ?></span> <span class="pull-right"><?= get_theme_mod('about_skill4_value', '90'); ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: <?= get_theme_mod('about_skill4_value', '90'); ?>%;" aria-valuenow="<?= get_theme_mod('about_skill4_value', '90'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        About me
                                    </h5>
                                </div>
                                <?php foreach (explode(PHP_EOL, get_theme_mod('about_description')) as $text) : ?>
                                    <p class="lead"><?= $text; ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->
<?php
class DRLDevFolioCustomizeHero
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'register'));
    }

    public function register($wp_customize)
    {
        $section = 'hero';
        $wp_customize->add_section($section, array(
            'title' => __('Hero'),
            'priority' => 35,
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'name',
            'label' => 'Name',
            'default' => 'Morgan Freeman',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'textarea',
            'setting' => 'passions',
            'label' => 'Passions',
            'default' => 'Designer, Developer, Freelancer, Photographer',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'cta_text',
            'label' => 'CTA Text',
            'default' => 'Hire Me',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'cta_link',
            'label' => 'CTA Link',
            'default' => '#contact',
        ));

        DRLDevFolioFieldCustomizeGenerator::image(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'bg_image',
            'label' => 'Image',
            'default' => get_template_directory_uri() . '/assets/img/hero-bg.jpg'
        ));
    }
}

<?php
class DRLDevFolioCustomize
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'form_hero'));
    }

    public function form_hero($wp_customize)
    {
        $section = 'hero';
        $wp_customize->add_section($section, array(
            'title' => __('Hero'),
            'priority' => 35,
        ));

        $this->generate_field(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'name',
            'label' => 'Name',
            'default' => 'Morgan Freeman',
        ));

        $this->generate_field(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'textarea',
            'setting' => 'passions',
            'label' => 'Passions',
            'default' => 'Designer, Developer, Freelancer, Photographer',
        ));

        $this->generate_field(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'cta_text',
            'label' => 'CTA Text',
            'default' => 'Hire Me',
        ));

        $this->generate_field(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'cta_link',
            'label' => 'CTA Link',
            'default' => '#contact',
        ));

        $wp_customize->add_setting('hero_bg_image', array(
            'default' => get_template_directory_uri() . '/assets/img/hero-bg.jpg',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg_image', array(
            'label' => 'Background Image',
            'section' => $section,
            'settings' => 'hero_bg_image',
        )));
    }

    private function generate_field($args)
    {
        extract($args);
        $setting_id = $section . '_' . $setting;

        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control($setting_id, array(
            'label' => __($label),
            'section' => $section,
            'type' => $type,
        ));
    }
}

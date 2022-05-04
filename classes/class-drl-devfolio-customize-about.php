<?php
class DRLDevFolioCustomizeAbout
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'register'));
    }

    public function register($wp_customize)
    {
        $section = 'about';
        $wp_customize->add_section($section, array(
            'title' => __('About'),
            'priority' => 35,
        ));

        DRLDevFolioFieldCustomizeGenerator::image(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'photo',
            'label' => 'Photo',
            'default' => get_template_directory_uri() . '/assets/img/testimonial-2.jpg'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'name',
            'label' => 'Name',
            'default' => 'Morgan Freeman',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'profile',
            'label' => 'Profile',
            'default' => 'full stack developer',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'email',
            'label' => 'Email',
            'default' => 'contact@example.com',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'phone',
            'label' => 'Phone',
            'default' => '(617) 557-0089',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill1_name',
            'label' => 'Skill 1 Name',
            'default' => 'HTML',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill1_value',
            'label' => 'Skill 1 Value (0 - 100)',
            'default' => '85',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill2_name',
            'label' => 'Skill 2 Name',
            'default' => 'CSS3',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill2_value',
            'label' => 'Skill 2 Value (0 - 100)',
            'default' => '75',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill3_name',
            'label' => 'Skill 3 Name',
            'default' => 'PHP',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill3_value',
            'label' => 'Skill 3 Value (0 - 100)',
            'default' => '50',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill4_name',
            'label' => 'Skill 4 Name',
            'default' => 'Javascript',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'skill4_value',
            'label' => 'Skill 4 Value (0 - 100)',
            'default' => '90',
            'type' => 'text'
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'setting' => 'description',
            'label' => 'Description',
            'default' => 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.',
            'type' => 'textarea'
        ));
    }
}

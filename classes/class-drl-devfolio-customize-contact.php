<?php
class DRLDevFolioCustomizeContact
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'register'));
    }

    public function register($wp_customize)
    {
        $section = 'contact';
        $wp_customize->add_section($section, array(
            'title' => __('Contact'),
            'priority' => 35,
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'description',
            'label' => 'Description',
            'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'address',
            'label' => 'Address',
            'default' => '329 WASHINGTON ST BOSTON, MA 02108',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'phone',
            'label' => 'Phone',
            'default' => '(617) 557-0089',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'email',
            'label' => 'Email',
            'default' => 'contact@example.com',
        ));
    }
}

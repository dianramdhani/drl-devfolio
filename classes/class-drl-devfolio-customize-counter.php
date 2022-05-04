<?php
class DRLDevfolioCustomizeCounter
{
    public function __construct()
    {
        add_action('customize_register', [$this, 'register']);
    }

    public function register($wp_customize)
    {
        $section = 'counter';
        $wp_customize->add_section($section, [
            'title' => 'Counter',
            'priority' => 30,
        ]);

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'works',
            'label' => 'Works',
            'default' => '450',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'years',
            'label' => 'Years',
            'default' => '25',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'clients',
            'label' => 'Clients',
            'default' => '550',
        ));

        DRLDevFolioFieldCustomizeGenerator::text(array(
            'wp_customize' => $wp_customize,
            'section' => $section,
            'type' => 'text',
            'setting' => 'awards',
            'label' => 'Awards',
            'default' => '48',
        ));
    }
}

<?php
class DRLDevFolioFieldCustomizeGenerator
{
    public static function text($args)
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

    public static function image($args)
    {
        extract($args);
        $setting_id = $section . '_' . $setting;

        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $setting_id, array(
            'label' => __($label),
            'section' => $section,
            'settings' => $setting_id,
        )));
    }
}

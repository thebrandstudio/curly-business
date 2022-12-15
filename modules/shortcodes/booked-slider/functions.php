<?php

if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Mikadof_Booked_Slider extends WPBakeryShortCodesContainer
    {
    }
}

if (!function_exists('curly_business_add_booked_slider_shortcodes')) {
    function curly_business_add_booked_slider_shortcodes($shortcodes_class_name) {
        $shortcodes = array(
            'CurlyBusiness\Shortcodes\BookedSlider\BookedSlider'
        );

        $shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

        return $shortcodes_class_name;
    }

    add_filter('curly_business_add_vc_shortcode', 'curly_business_add_booked_slider_shortcodes');
}

if (!function_exists('curly_business_set_booked_slider_icon_class_name_for_vc_shortcodes')) {
    /**
     * Function that set custom icon class name for property list shortcode to set our icon for Visual Composer shortcodes panel
     */
    function curly_business_set_booked_slider_icon_class_name_for_vc_shortcodes($shortcodes_icon_class_array) {
        $shortcodes_icon_class_array[] = '.icon-wpb-booked-slider';

        return $shortcodes_icon_class_array;
    }

    add_filter('curly_business_filter_add_vc_shortcodes_custom_icon_class', 'curly_business_set_booked_slider_icon_class_name_for_vc_shortcodes');
}
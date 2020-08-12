<?php
    function hannu_customize_register($wp_customize){
        $wp_customize->add_control(
            'estore_footer_widgets',
            array(
                'label'   => esc_html__( 'Choose the number of widget area you want in footer', 'estore' ),
                'section' => 'estore_footer_widget_section',
                'type'    => 'select',
                'choices' => array(
                    '1' => esc_html__( '1 Footer Widget Area', 'estore' ),
                    '2' => esc_html__( '2 Footer Widget Area', 'estore' ),
                    '3' => esc_html__( '3 Footer Widget Area', 'estore' ),
                    '4' => esc_html__( '4 Footer Widget Area', 'estore' ),
                ),
            )
        );
    }

    add_action('customize_register', 'hannu_customize_register');
?>
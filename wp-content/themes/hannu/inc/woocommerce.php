<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function hannu_wc_output_content_wrapper() {
    echo '<div class="container"><div class="row">';
}

function hannu_wc_after_main_content(){
    echo '</div></div>';
}
?>
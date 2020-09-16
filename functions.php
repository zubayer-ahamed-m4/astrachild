<?php

function astrachild_excerptProductTitle($title){
    $title = trim($title);
    if(strlen($title) < 40) return $title;
    return substr($title, 0, 40)." ... ";
}

add_filter( 'woocommerce_sale_flash', 'get_percentage_to_sale_badge', 20, 3 );
function get_percentage_to_sale_badge( $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages);
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100));
    }
    if($percentage == 100) return "";
    return  '<div class="badge-overlay">
                <span class="bottom-right badge red">'. esc_html__( 'SALE', 'woocommerce' ) . ' ' . $percentage .'%</span>
            </div>';
}
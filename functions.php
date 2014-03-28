<?php 
/*
 * Support the Twitter Card plugin from Niall: https://github.com/niallkennedy/twitter-cards
 */
if ( ! function_exists( 'add_twitter_card_properties' ) ) {
add_filter( 'twitter_cards_properties', 'add_twitter_card_properties' );
function add_twitter_card_properties( $twitter_card ) {
        if ( is_array( $twitter_card ) ) {
                $twitter_card['site'] = '@ghelleks';
                $twitter_card['site:id'] = '7373472';
                $twitter_card['creator'] = '@ghelleks';
                $twitter_card['creator:id'] = '7373472';
        }
        return $twitter_card;
} }
?>

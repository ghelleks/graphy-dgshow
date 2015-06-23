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

/*
 * Force the RSS feed to present HTTP urls instead of HTTPS
 * so we don't run afoul all the Android podcasting apps that don't support TLS
 */
if ( ! function_exists( 'dgshow_podcast_audio_by_http' ) ) {
add_filter('podpress_item_enclosure_and_itunesduration', 'dgshow_podcast_audio_by_http',100);
function dgshow_podcast_audio_by_http($content) {
  $content = str_replace('https://dgshow.org/podpress_trac', 'http://dgshow.org/podpress_trac', $content);
  return $content;
} }

add_action( 'after_setup_theme', 'dgshow_theme_setup' );
function dgshow_theme_setup() {
   add_image_size( 'round', 150, 150, array('center', 'center')); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
}
?>

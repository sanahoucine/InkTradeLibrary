<?php
/**
 * Call to action
 * 
 * slug: call-to-action
 * title: Call to Action
 * categories: open-woocommerce
 */

return array(
'title'      =>__( 'Call to Action', 'open-woocommerce' ),
'categories' => array( 'open-woocommerce' ),
'content'    => '<!-- wp:cover {"url":"'.esc_url(get_theme_file_uri()) .'/assests/banner.jpg","id":161,"dimRatio":50,"style":{"color":{}}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-161" alt="" src="'.esc_url(get_theme_file_uri()) .'/assests/banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"73px"}}} -->
<p class="has-text-align-center" style="font-size:73px">Call to action</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-orange"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-luminous-vivid-orange-background-color has-background wp-element-button">View More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->',
);




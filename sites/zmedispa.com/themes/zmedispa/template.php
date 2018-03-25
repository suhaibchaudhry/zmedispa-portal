<?php 
function zmedispa_superfish_menu_item_link($variables) {
//dpm($variables);  
$menu_item = $variables['menu_item'];
$link_options = $variables['link_options'];
if($menu_item['link']['title'] == 'Store') {
	$link = l($menu_item['link']['title']."<span>".$variables['link_options']['attributes']['title']."</span>", $menu_item['link']['href'], array('html' => true, 'attributes' => array('target' => '_blank')));
} else {
	$link = l($menu_item['link']['title']."<span>".$variables['link_options']['attributes']['title']."</span>", $menu_item['link']['href'], array('html' => true));
}
return $link;
}

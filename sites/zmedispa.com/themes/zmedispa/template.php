<?php
function zmedispa_menu_link(array $variables) {
  $element = $variables['element'];

  $sub_menu = '';
  $element['#localized_options']['html'] = TRUE;

  /* Even/odd class on menu items */
  static $count = 0;
  $zebra = ($count % 2) ? 'even' : 'odd';
  $count++;
  $element['#attributes']['class'][] = $zebra;

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  /**
   * Add menu item's description below the menu title
   * Source: fusiondrupalthemes.com/forum/using-fusion/descriptions-under-main-menu
   */
  if ($element['#original_link']['menu_name'] == "main-menu" && isset($element['#localized_options']['attributes']['title'])){
    $element['#title'] .= '<span>' . $element['#localized_options']['attributes']['title'] . '</span>';
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

<?php
function thecodesharman_preprocess_page(&$vars) {
  if (drupal_is_front_page()) { 
    unset($vars['page']['content']['system_main']['default_message']);
    drupal_set_title('');
  }
}
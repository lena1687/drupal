<?php
/**
 * @file
 * style_image_new.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function style_image_new_image_default_styles() {
  $styles = array();

  // Exported image style: 800_800.
  $styles['800_800'] = array(
    'label' => '800*800',
    'effects' => array(
      6 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 800,
          'height' => 800,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

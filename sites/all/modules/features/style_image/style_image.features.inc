<?php
/**
 * @file
 * style_image.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function style_image_image_default_styles() {
  $styles = array();

  // Exported image style: 120_90.
  $styles['120_90'] = array(
    'label' => '190*150',
    'effects' => array(
      5 => array(
        'name' => 'image_resize',
        'data' => array(
          'width' => 190,
          'height' => 150,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 150_150.
  $styles['150_150'] = array(
    'label' => '150*120',
    'effects' => array(
      1 => array(
        'name' => 'image_resize',
        'data' => array(
          'width' => 150,
          'height' => 120,
        ),
        'weight' => 1,
      ),
      2 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 400,
          'height' => 400,
          'upscale' => 1,
        ),
        'weight' => 2,
      ),
    ),
  );

  // Exported image style: 70_70.
  $styles['70_70'] = array(
    'label' => '80*80',
    'effects' => array(
      3 => array(
        'name' => 'image_resize',
        'data' => array(
          'width' => 80,
          'height' => 80,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

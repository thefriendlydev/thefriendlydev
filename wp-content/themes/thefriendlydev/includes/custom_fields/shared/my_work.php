<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_58cccc466e7fd',
  'title' => 'My Work',
  'fields' => array (
    array (
      'key' => 'field_58cccc4cc20bd',
      'label' => 'My Work Title',
      'name' => 'my_work_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58ccd658e2503',
      'label' => 'My Work Sub Title',
      'name' => 'my_work_sub_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58cccd5649100',
      'label' => 'Projects',
      'name' => 'projects',
      'type' => 'post_object',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'project',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => 'field_58cccd7649101',
      'label' => 'My Work CTA Text',
      'name' => 'my_work_cta_text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'see more work »',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58cccdc749102',
      'label' => 'My Work CTA Link',
      'name' => 'my_work_cta_link',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '/my-work',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-home.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-work.php',
      ),
    ),
  ),
  'menu_order' => 2,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

endif;

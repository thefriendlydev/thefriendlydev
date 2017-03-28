<?php

class Project {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Projects',
      'singular_name' => 'Project',
      'add_new'       => 'Add New',
      'all_items'     => 'All Projects',
      'add_new_item'  => 'Add New Project',
      'edit_item'     => 'Edit Project',
      'new_item'      => 'New Project',
      'view_item'     => 'View Project',
      'search_items'  => 'Search Projects',
      'not_found'     => 'No Projects Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-desktop',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'projects', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 20,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('project', $settings);
  }



}

new Project();

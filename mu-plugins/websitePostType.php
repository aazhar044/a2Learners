
<?php

function website_post_types(){
    register_post_type('event', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'events'),
      'has_archive'=> true,
      'public' => true,
      'labels' => array(
        'name' => 'Events',
        'add_new_item' => 'Add new Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
        ),
      'menu_icon' => 'dashicons_calendar'


    ));
   }
   add_action('init', 'website_post_types');

  
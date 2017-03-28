<?php
class Seeder {
  function __construct() {
    // ** CLEAR YOUR WP_POSTMETA and WP_POSTS TABLE BEFORE RUNNING SEEDS

    // add_action('admin_init', [$this, 'seedImages']);
    // add_action('admin_init', [$this, 'seedSubmissions']);
  }

  function seedImages () {
    $images = [
      ABSPATH . 'wp-content/uploads/2015/08/pic1.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic2.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic3.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic4.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic5.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic6.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic7.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic8.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic9.jpeg',
      ABSPATH . 'wp-content/uploads/2015/08/pic10.jpeg',
    ];

    foreach($images as $image) {
      // Check the type of file. We'll use this as the 'post_mime_type'.
      $filetype = wp_check_filetype( basename( $image ), null );

      $attachment = array(
        'guid'           => $wp_upload_dir['url'] . '/' . basename( $image ),
        'post_mime_type' => $filetype['type'],
        'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $image ) ),
        'post_content'   => '',
        'post_status'    => 'inherit'
      );
      // Insert the attachment.
      $attach_id = wp_insert_attachment( $attachment, $image );

      // Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
      require_once( ABSPATH . 'wp-admin/includes/image.php' );

      // Generate the metadata for the attachment, and update the database record.
      $attach_data = wp_generate_attachment_metadata( $attach_id, $image );
      wp_update_attachment_metadata( $attach_id, $attach_data );
    }
  }

  function seedSubmissions() {
    for($x=0; $x<=200; $x++) {
      $post_data = [
        'post_type'    => 'submission',
        'post_status'  => 'publish',
        'post_title'   => '',
        'post_content' => ''
      ];
      $post_id = wp_insert_post($post_data);
      update_field(FieldMap::key_for('submission', 'name'), $this->name(), $post_id);
      update_field(FieldMap::key_for('submission', 'store_id'), $this->store_id(), $post_id);
      update_field(FieldMap::key_for('submission', 'likes'), $this->random_like_count(), $post_id);
      update_field(FieldMap::key_for('submission', 'department'), $this->department(), $post_id);
      update_field(FieldMap::key_for('submission', 'type'), $this->type(), $post_id);
      update_field(FieldMap::key_for('submission', 'picture'), $this->picture(), $post_id);
      update_field(FieldMap::key_for('submission', 'youtube_url'), $this->youtube_video(), $post_id);
    }
  }

  function name() {
    $names = ['Bertram Lindsey', 'Armando Bischof', 'Robbin Bylsma', 'Junior Massa', 'Jesse Brogden', 'Rickey Dahlen', 'Lucina Buser', 'Alejandro Mix', 'Monnie Pyper', 'Errol Tompkins', 'Stanley Jarrett', 'Drusilla Cavazos', 'Elwanda Crim', 'Eleni Shivers', 'Roselyn Albrecht', 'Grover Wymore', 'Sal Slowik', 'Miguelina Colwell', 'Rossie Molyneux', 'Beau Fitzsimmons', 'Dominga Hagins', 'Jolanda Cousins', 'Oneida Baeza', 'Andre Brumer', 'Yang Isaacson', 'Stacie Odum', 'Gerald Herman', 'Marinda Schley', 'Emmie Bransford', 'Mabelle Nebel'];
    return $names[array_rand($names)];
  }
  function store_id() {
    $store_ids = ["21111", "21112", "21113", "21114", "21115"];
    return $store_ids[array_rand($store_ids)];
  }
  function random_like_count() {
    $numbers = [rand(1,100), rand(50,200), 0];
    return $numbers[array_rand($numbers)];
  }
  function department() {
    $department = ["easyhome", "easyfinancial", "support_centre", "national_service_centre"];
    return $department[array_rand($department)];
  }
  function type() {
    $type = ["dream", "picture", "video"];
    return $type[array_rand($type)];
  }
  // UPLOAD YOUR OWN PHOTOS AND ADD THEIR ID HERE
  function picture() {
    $picture = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
    return $picture[array_rand($picture)];
  }
  function youtube_video() {
    $videos = [
      "https://www.youtube.com/watch?v=bmtR2kGX8ew",
      "https://www.youtube.com/watch?v=EeSYszVVbmA",
      "https://www.youtube.com/watch?v=0oHrK9xqyWw",
      "https://www.youtube.com/watch?v=MfJD3q5xb_k",
      "https://www.youtube.com/watch?v=m4Nq9zDf7lc",
      "https://www.youtube.com/watch?v=zAaFyVXltwM",
      "https://www.youtube.com/watch?v=vGRag5YPQIM",
      "https://www.youtube.com/watch?v=uhh7_BkrrTo",
      "https://www.youtube.com/watch?v=Vcj_LHB3UyE",
      "https://www.youtube.com/watch?v=piN_TgKAy1k"
    ];
    return $videos[array_rand($videos)];
  }
}
new Seeder();
<?php 
  $alpha_current_term = get_queried_object();
  $alpha_term_thumnail_id = get_field('thumbnail',$alpha_current_term);

  if($alpha_term_thumnail_id){
      $file_thumb_details = wp_get_attachment_image_src( $alpha_term_thumnail_id );
      echo "<img src='".   esc_url($file_thumb_details[0]) ."'>";
      
  }
?>
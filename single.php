<?php
get_header();
?>
<body <?php body_class(); ?>>
<?php 
    get_template_part('hero');
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="posts">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="post" <?php post_class(); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="post-title">
                                        <?php the_title(); ?></a>
                                    </h2>
                                    <p class="text-center">
                                        <strong><?php the_author(); ?></strong><br /><?php the_date(); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <?php
                                            if (has_post_thumbnail()) {

                                                //$post_thumnail_url = get_the_post_thumbnail_url(null, "large");
                                                // printf('<a href="%s" data-featherlight="image">', $post_thumnail_url);
                                                // echo '<a href=" '.$post_thumnail_url.' " data-featherlight="image" > ';
                                                echo '<a class="popup" href="#" data-featherlight="image" > ';
                                                the_post_thumbnail("large", array("class" => "img-fluid"));

                                                echo '</a>';
                                            }
                                            ?>
                                    </p>

                                    <p>
                                        <?php
                                            the_content();
                                        ?>
                                    </p>
                                </div>
                           
                                <div class="text-center">
                                <?php 
                                  if(get_post_format() == 'image' && class_exists('CMB2')){
                                      $alpha_camera_model = get_post_meta(get_the_ID(),'alpha_camera_model',true);
                                      $alpha_location = get_post_meta(get_the_ID(),'alpha_location',true);
                                      $alpha_date = get_post_meta(get_the_ID(),'alpha_date',true);
                                      $alpha_licensed = get_post_meta(get_the_ID(),'alpha_licensed',true);
                                      $alpha_licensed_information = get_post_meta(get_the_ID(),'alpha_licensed_information',true);
                                  }
                                    ?>
                                    <h1>
                                    <strong>Camera Model :</strong> <?php echo esc_html($alpha_camera_model); ?>
                                    </h1>
                                    <h1>
                                    <strong>Location:</strong> <?php echo esc_html($alpha_location); ?>
                                    </h1>
                                    <h1>
                                    <strong>Date :</strong> <?php echo esc_html($alpha_date); ?>
                                    </h1>
                                   
                                    <?php 
                                      if($alpha_licensed):
                                        ?>

                                        <h1>
                                        <strong>Licensec Information :</strong> <?php echo esc_html($alpha_licensed_information); ?>
                                        </h1>
                                      <?php 
                                        endif;
                                      ?>
                                </div>
                                
                                 
                         

                                <?php if (comments_open()) : ?>
                                    <div class="col-md-10 offset-md-1">
                                        <?php
                                                comments_template();
                                                ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>



                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <?php
            if (is_active_sidebar('sidebar-1')) {
                dynamic_sidebar("sidebar-1");
            }
            ?>
        </div>

    </div>

</div>

<div class="container mb-5 ">
    <div class="row">
        <div class="col-md-6">
            <?php previous_post_link(); ?>
        </div>
        <div class="col-md-3 offset-md-3">
            <?php next_post_link(); ?>
        </div>
    </div>

</div>
<?php

get_footer();

?>
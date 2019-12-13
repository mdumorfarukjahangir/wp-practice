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
                                   if(get_field('camera_model')){
                                      echo "Camera Model : ".get_field('camera_model')."<br>";
                                      echo "Location  : ".get_field('location')."<br>";
                                      echo "Date  : ".get_field('date')."<br>";
                                      echo "Licensed Information : ".get_field('licensed_information_')."<br>";
                                      echo "Image : ".wp_get_attachment_image(get_field('image'),'medium')."<br>";

                                   }
                              
                                 ?>
                                                                <?php
                                    $file = get_field('file');
                                    if( $file ):
                                        $url = wp_get_attachment_url( $file ); ?>
                                        <a target="_blank" href="<?php echo esc_html($url); ?>" >Download File</a>
                                    <?php endif; ?>
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
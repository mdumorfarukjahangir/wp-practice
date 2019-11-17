<?php 

get_header();

?>

<div class="posts">
    <?php
        while(have_posts()){
            the_post();
            ?>
            <div class="post" <?php post_class(); ?> >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author(); ?></strong><br/>
                            <?php echo get_the_date(); ?>
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <?php echo get_the_tag_list($before='', $sep='<br/>', $after='') ?>  
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large",array("class"=>"img-fluid")); 
                            }
                            ?>                      
                        </p>
    
                        <p>
                            
                            <?php
                          
                                the_excerpt();
                         
                            
                            ?>
                        </p>
                    </div>
                </div>
    
            </div>
        </div>


     
        <?php 
        }
    ?>
    <div class="container post_pagination">
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-8">
                <?php
                   the_posts_pagination(array(
                        'screen_reader_text' => ' ',
                        'mid-size' => 1,
                        'prev_text' => __('Back','alpha'),
                        'next_text' => __('Next','alpha')
                    ));
                ?>
            </div>
        </div>

    </div>
</div>
<?php

get_footer();

?>
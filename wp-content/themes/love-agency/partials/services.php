<section id="Services">
    
    <?php
    $args = new WP_Query(array(
        'post_type' => 'servicios',
        'posts_per_page' => 5,
        'post_status' => 'publish'
    ));
    
    $misce = 1;
    if($args->have_posts()): while($args->have_posts()): $args->the_post();
    
        $thumb = get_the_post_thumbnail_url(); ?>

        <div class="service" style="background-image: url('<?php echo $thumb;?>');">
            <a href="<?php the_permalink(); ?>">
                <div class="overlay">
                    <p class="title">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/misce<?php echo $misce ;?>.svg" width="35">    
                        <?php 
                        $slug = $post->post_name;
                        $slug = str_replace("-", "<br>", $slug);
                        echo $slug;
                        ?>
                    </p>
                </div>
            </a>
        </div>
    <?php $misce++; 
    endwhile;
    wp_reset_postdata();
    endif; ?>

</section>
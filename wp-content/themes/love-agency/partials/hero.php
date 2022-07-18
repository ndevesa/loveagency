<div id="Hero" <?php if($intern){ echo 'class="single-service"'; }?>>

    <?php 
        if(is_front_page()): 
            $intern = false;
            
            if(have_rows('reel', 'option')): while(have_rows('reel', 'option')): the_row(); 
                $reel_corto = get_sub_field('reel_corto'); ?>
                <video id="shortReel" autoplay  playsinline muted loop width="100%" height="100%" src="<?php echo $reel_corto['url']; ?>"></video>
            <?php endwhile; endif; ?>

        <?php else: 
            $intern = true;
        endif; ?>

    <div class="container-fluid">
        <div class="grid">
            <div class="c d-none d-md-block">
                <?php 
                    wp_nav_menu(array(
                        'menu' => "header-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                        'menu_class' => "navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        'add_li_class' => 'nav-item' // Class for li elements inside of the ul
                    ));
                ?>
                <div class="since"><p>Since 2009</p></div>
            </div>
            
            <div class="c text-center order-2 order-md-0">
                <?php if($intern == true): ?>
                    <h1 class="internTitle sectionTitle text-lowercase">
                        <span>
                            <?php 
                            /*$slug = $post->post_name;
                            $slug = str_replace("-", "<br><strong>", $slug);
                            echo $slug .'</strong>';*/
							the_title();
                            ?>
                            <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/misce-intern-mobile.svg" width="35">-->
                        </span>
                    </h1>    
                <?php endif; ?>
            </div>

            <div class="c order-1 order-md-0">
                <a id="playReel" href="#" class="btn -circle -white -heroBtn" data-toggle="modal" data-target="#viewReel">play reel</a>
            </div>
        </div>
    </div>
</div>
<?php
$social = get_field('social_media', 'option');
if($social): 

    if( have_rows('social_media', 'option') ):
        while( have_rows('social_media', 'option') ): the_row(); 

            $vm = get_sub_field('vimeo'); 
            $ig = get_sub_field('instagram'); 
            $lk = get_sub_field('linkedin'); ?>

            <div id="Social">
                <ul class="list-inline">
                    <?php if($vm): ?>
                        <a href="<?php echo $vm; ?>" target="_blank">
                            <li class="list-inline-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vimeo.svg" width="35">
                            </li>
                        </a>
                    <?php endif; ?>

                    <?php if($lk): ?>
                        <a href="<?php echo $lk; ?>" target="_blank">
                            <li class="list-inline-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/linkedin.svg" width="35">
                            </li>
                        </a>
                    <?php endif; ?>

                    <?php if($ig): ?>
                        <a href="<?php echo $ig; ?>" target="_blank">
                            <li class="list-inline-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.svg" width="35">
                            </li>
                        </a>
                    <?php endif; ?>
                </ul>
            </div>

<?php endwhile; endif; endif; ?>
            <footer id="Footer">
                <div class="container">
                    <div class="grid">
                        <div class="c">
                            <h1>
                            <?php 
                            $text = get_field('footer', 'option');
                                if($text): ?>
                                <?php echo $text; ?>
                                <!-- <br class="d-block d-md-none"> -->
                                </strong>
                            <?php endif; ?>
                            </h1>
                        </div>
                        <?php 
                        $emails = get_field('emails', 'option');
                        if($emails):
                            if( have_rows('emails', 'option') ):
                                while( have_rows('emails', 'option') ): the_row(); 
                                    $wwu = get_sub_field('work_with_us', 'option'); 
                                    $ju = get_sub_field('join_us', 'option'); ?>
                                        <div class="c">
                                            <?php if($wwu): ?>
                                                <a href="mailto:<?php echo $wwu; ?>" class="btn -circle -black" data-aos="fade-up">work with us</a>
                                            <?php endif; ?>
                                            <?php if($ju): ?>
                                                <a href="mailto:<?php echo $ju; ?>" class="btn -circle -purple" data-aos="zoom-in-up" data-aos-delay="300">join us</a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="c">
                                            <?php include('partials/rrss.php'); ?>
                                            <a href="mailto:hola@weempowerbrands.com">hola@weempowerbrands.com</a>
                                        </div>
                                <?php 
                                endwhile; 
                            endif;
                        endif; ?>
                    </div>
                </div>
            </footer>

            <!-- Reel Modal -->
            <div id="viewReel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ReelTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <?php 
                    if(have_rows('reel', 'option')): while(have_rows('reel', 'option')): the_row(); 
                        $reel_completo = get_sub_field('reel_completo'); ?>
                        <video autoplay playsinline muted loop controls="1" width="100%" height="100%" src="<?php echo $reel_completo['url']; ?>"></video>
                <?php endwhile; endif; ?>   
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
            </div>

        <?php wp_footer(); ?>
    </body>
</html>
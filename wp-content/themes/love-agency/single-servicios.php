<?php
/**
* The template for displaying all single services and attachments
*/
get_header();
$intern = true; 
?>

<?php
include('partials/hero.php');
//echo do_shortcode('[instagram feed="15"]');
?>

<!--FEED DESK-->
<?php
if( have_rows('galeria_post_feed') ): ?>
<div id="galleryPostFeed" class="d-none d-md-flex align-items-center justify-content-between flex-wrap">
<?php 
	while( have_rows('galeria_post_feed') ): the_row();
		$img = get_sub_field('imagen');
		$link = get_sub_field('link'); ?>
		<div class="item">
			<a href="<?php echo $link; ?>" target="_blank">
				<img src="<?php echo $img['url']; ?>" class="img-fluid" />
			</a>
		</div>
	<?php endwhile; ?>
</div>
<?php endif;?>

<!--CAROUSEL MOBILE-->
<?php
if( have_rows('galeria_post_feed') ): ?>
	<div id="galeria" class="d-block d-md-none">
	<?php 
		while( have_rows('galeria_post_feed') ): the_row();
			$img = get_sub_field('imagen');
			$link = get_sub_field('link'); ?>
			<div class="owl-carousel owl-theme">
				<div>
					<a href="<?php echo $link; ?>" target="_blank">
						<img src="<?php echo $img['url']; ?>" class="img-fluid" />
					</a>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif;?>

<section id="SingleService">
    <?php 
    $features = get_field('features');
    if($features): ?>
        <div id="serviceContent" class="container">
            <div class="row d-flex align-items-start justify-content-center">
                <?php 
                $number = 1;
                $data = 1;
                if(have_rows('features')): while(have_rows('features')): the_row(); ?>
                    
                    <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                        <div class="service">
                            <div class="header">
                                <small><?php echo '0'.$number; ?></small>
                                <h2 class="title"><?php the_sub_field('titulo'); ?></h2>
                            </div>
                            <div class="body">
                                <span id="toggleIcon" class="d-block d-md-none" data-toggle="collapse" data-target="#data<?php echo $data; ?>"></span>
                                
                                <div class="subtitle"><?php the_sub_field('subtitulo'); ?></div>
                                
                                <p id="data<?php echo $data; ?>"><?php the_sub_field('descripcion'); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                    $number++;
                    $data++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php
include('partials/clients.php');
get_footer(); ?>
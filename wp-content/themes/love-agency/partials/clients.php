<?php 
$clients = get_field('clientes', 'option');
if($clients):
?>
    <section id="Clients">
        <div class="container">
            <div id="clientsCarousel" class="owl-carousel owl-theme">
                <?php foreach( $clients as $client ): ?>
                    <div>
                        <img src="<?php echo esc_url($client['sizes']['large']); ?>" class="img-fluid"/>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
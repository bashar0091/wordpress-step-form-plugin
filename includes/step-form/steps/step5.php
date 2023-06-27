<div class="step-wrapper" id="step5">
    <div class="step-container flex">
        <div class="step-col">
            <h2 class="h2">Bescherm je hemelwaterafvoer tegen vuil!</h2>

            <div class="product-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                    );

                    $products = new WP_Query($args);

                    if ($products->have_posts()) {
                        while ($products->have_posts()) {
                            $products->the_post();
                            global $product;
                ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'full');?>" alt="product-image">
                        </div>
                        <div class="product-des">
                            <h3><?php echo $product->get_name(); ?></h3>
                            <p>
                                <?php echo $product->get_short_description();?>
                            </p>
                            <a class="color1" href="<?php echo get_the_permalink(); ?>">Meer info</a>
                            <p class="price">€ <?php echo $product->get_price();?></p>

                            <div class="option-stepper">
                                <input type="number" min="0" value="0" data-drain="28153" class="js-roof-drain">
                                <button class="plus"><i class="fa fa-plus"></i></button>
                                <button class="minused"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                    </div>
                <?php 
                        }
                    }

                    wp_reset_query();
                ?>
            </div>

            <button class="btn1 btn3 toPrev"><i class="fa fa-arrow-left"></i> Vorige stap</button>
            <button class="btn1 btn2 btn3 toNext">Volgende stap <i class="fa fa-arrow-right"></i></button>
        </div>

        <div class="step-col">
            <div class="step-right">
                <img src="https://www.dakvergroeners.nl/lcms2/RESIZE/w314-h9999-c314x278-q90/maatwerk/roof-calculator/img/roof-3@2x.png" alt="image">

                <h3 class="h3">Your Green Roof</h3>

                <table class="table tabled1">
                    <tr>
                        <td>Surface</td>
                        <td><span class="surfaceResult"></span> m<sup>2</sup></td>
                    </tr>
                    <tr>
                        <td>Circumference</td>
                        <td><span class="circumferenceResult"></span> m</td>
                    </tr>
                    <tr>
                        <td>Groendak Lichthellendsysteem</td>
                        <td>€ <span class="priceResult"></span></td>
                    </tr>
                    <tr class="ex1Result">
                        <td>Grindstrook 10 cm (75 zakken)</td>
                        <td>€ <span class="ex1Result0"></span></td>
                    </tr>
                    <tr>
                        <td colspan='2'><hr></td>
                    </tr>
                    <tr>
                        <td>Verzendkosten</td>
                        <td class="valueGreen">€ <span class="shippingResult">895</span></td>
                    </tr>
                    <tr>
                        <td class="valueBlue">Totaal</td>
                        <td class="valueBlue">€ <span class="totalResult"></span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
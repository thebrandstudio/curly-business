<?php
$price = get_post_meta(get_the_ID(), 'business_services_item_price', true);
$label = get_post_meta(get_the_ID(), 'business_services_item_label', true);
$description = get_field( "descripcion", get_the_ID() );
$tiempo = get_field( "tiempo", get_the_ID() );

?>
<li class="mkdf-bsl-item clearfix">
    <?php if ($show_featured_image === 'yes') : ?>
        <div class="mkdf-bsl-item-image">
            <a href="<?php echo esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>" data-rel="prettyPhoto<?php echo esc_attr(get_the_ID()); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
            </a>
        </div>
    <?php endif; ?>
    <div class="mkdf-bsl-item-content">
        <div class="mkdf-bsl-item-top-holder">
            <div class="mkdf-bsl-item-title-holder">
                <h4 class="mkdf-bsl-item-title">
                    <?php esc_html(the_title()); ?>
                </h4>
            </div>
            <div class="mkdf-bsl-item-line"></div>

            <?php if (!empty($price)) : ?>
                <div class="mkdf-bsl-item-price-holder">
                    <span class="mkdf-bsl-price"><?php echo esc_html($price); ?></span>
                </div>
            <?php endif; ?>
        </div>
        <div class="mkdf-bsl-item-bottom-holder clearfix">
            <?php if (!empty($description)) : ?>
                <div id="descripcion" class="mkdf-bsl-item-description-holder">
                    <p><?php echo $description; ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($tiempo)) : ?>
                <div class="mkdf-bsl-item-description-holder">
                    <span class="mkdf-bsl-item-label"><i class="mkdf-icon-font-awesome fa fa-clock-o mkdf-icon-element"></i> Tiempo: <?php echo $tiempo; ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</li>
<style>
#descripcion ul {
    list-style-type: square;
}
</style>

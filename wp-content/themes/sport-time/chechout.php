<!-- Template Name:Оформление заказа -->
<?php get_header();?>
<div style="max-width:1400px; width:100%; margin:0 auto; ">
    <h1 class="h1" style="margin-top:30px; margin-bottom:30px;">Оформлени товара</h1>
    <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
</div>
<?php get_footer();?>
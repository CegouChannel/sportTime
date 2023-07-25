<!-- Template Name:Корзина -->
<?php get_header();?>
<body <?php body_class(); ?>>
    <div style="max-width:1400px; width:100%; margin:0 auto; ">
        <h1 class="h1" style="margin-top:30px; margin-bottom:30px;">Товары</h1>
        <?php echo do_shortcode( '[woocommerce_cart]' ); ?>
    </div>
    <?php get_footer();?>
</body>
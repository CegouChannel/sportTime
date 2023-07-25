<!-- Template Name:Личный кабинет -->
<?php get_header();?>
    <div class="my-account">
        <div class="column" style="width:40%; margin:0 auto; margin-top:30px;">
            <h2 style="text-align:center;">Личный кабинет</h2>
            <div style="margin-top:40px;">
                <?php echo do_shortcode( '[woocommerce_my_account]' ); ?>
            </div>
        </div>
    </div>
<?php get_footer();?>
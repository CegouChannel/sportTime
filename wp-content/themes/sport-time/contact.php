<!-- Template Name: Контакты -->
<?php get_header();?>
<?php
add_action('connStyleContact', 'addStyle');
do_action('connStyleContact');
function addStyle()
{
    wp_enqueue_style('contact', get_stylesheet_directory_uri() . '/assets/css/contact.css');
}
?>
    <div class="form-contact">
        <h1 class="h1" style="margin-top:20px;">Обратная связь</h1>
        <div>
            <?php echo do_shortcode("[contact-form-7 id='146' title='Обратная связь']"); ?>
        </div>
    </div>
<?php get_footer();?>
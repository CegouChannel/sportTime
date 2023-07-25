<!-- Template Name: Главная  -->
<?php get_header() ?>
<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php
        $posts = get_posts(array(
            'numberposts' => 3,
            'post_type' => 'contentslider',
            'suppress_filters' => true
        ));
        foreach ($posts as $post) {
            setup_postdata($post);
        ?>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <?= the_post_thumbnail(); ?>
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b><?= the_title(); ?></b></h1>
                                <p>
                                    <?= the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <img src="http://u146490.test-handyhost.ru/wp-content/uploads/2023/03/left_arrow.png" alt="">
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <img src="http://u146490.test-handyhost.ru/wp-content/uploads/2023/03/right_arrow.png" alt="">
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Категории</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="/product-category/mountain-bikes/"><img src="http://u146490.test-handyhost.ru/wp-content/uploads/2023/03/category_mointain.png" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Горные</h5>
            <p class="text-center"><a class="btn btn-success" href="/product-category/mountain-bikes/">Перейти в магазин</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="/product-category/teenage-bicycles/"><img src="http://u146490.test-handyhost.ru/wp-content/uploads/2023/03/category_teenager.png" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Подростковые</h2>
            <p class="text-center"><a class="btn btn-success" href="/product-category/teenage-bicycles/">Перейти в магазин</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="/product-category/childrens-bicycles/"><img src="http://u146490.test-handyhost.ru/wp-content/uploads/2023/03/category_childe.png" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Детские</h2>
            <p class="text-center"><a class="btn btn-success" href="/product-category/childrens-bicycles/">Перейти в магазин</a></p>
        </div>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Новинки</h1>
                <p>
                    Ознакомтесь с нашими новинками
                </p>
            </div>
        </div>
        <div class="row mx-auto d-flex justify-content-around" style="width:80%;">
            <?php
            echo do_shortcode("[recent_products per_page='4']");
            ?>
        </div>
    </div>
</section>
<!-- End Featured Product -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Новости</h1>
            <p>
                Будьте первыми в курсе событий
            </p>
        </div>
    </div>
    <div class="column block_news">
        <?php
        $posts = get_posts([
            'post_type' => 'post',
            'suppress_filters' => true 
        ]);
        foreach($posts as $post){
            setup_postdata($post);
            ?>
        <div class="new">
            <div class="new_header">
                <h2><?= the_title();?></h2>
                <h1><?= get_the_date();?></h1>
            </div>
            <p><?= the_content();?></p>
        </div>
        <?php 
        } 
    wp_reset_postdata();?>
    </div>
</section>
<?php get_footer(); ?>
</body>

</html>
<!-- Template Name: О нас  -->
<?= get_header() ?>
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



<section class="bg-success py-5">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h2>О нас</h2>
                <p>
                    SportTime — это доступ в мир велосипедов с рекордным ассортиментом! Это настоящий бренд-эксперт в спорте и активном отдыхе, который вдохновляет своих покупателей, мотивирует их и помогает регулярно заниматься спортом, чтобы радоваться жизни и менять себя к лучшему день за днем!
                </p>
            </div>
            <div class="col-md-4">
                <img style="max-width:400px; max-height:400px;" src="http://sporttime/wp-content/uploads/2023/04/about-hero.png">
            </div>
        </div>
    </div>
</section>
<!-- Close Banner -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Наши услуги</h1>
            <p>
                Здесь Вы можете ознакомиться с нашими услугами
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                <h2 class="h5 mt-4 text-center">Услуги доставки</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Доставка и возврат</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                <h2 class="h5 mt-4 text-center">Скидки</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                <h2 class="h5 mt-4 text-center">24 часа обслуживания</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<!-- Start Brands -->
<section class="bg-light py-5">
    <div class="container my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Наши бренды</h1>
                <p>
                    Мы продаем только качественные и оригинальные продукты, на прямую от произоводителей
                </p>
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel">
                <div class="row d-flex flex-row">
                    <!--Controls-->
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                            <i class="text-light fas fa-chevron-left"></i>
                        </a>
                    </div>
                    <!--End Controls-->

                            <div class="d-flex flex-wrap">
                                            <?php
                                            $posts = get_posts([
                                                'post_type' => 'brends',
                                                'numberposts' => 4,
                                                'suppress_filters' => true
                                            ]);
                                            foreach($posts as $post){
                                                setup_postdata($post);
                                                $urlBrend = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                                ?>
                                                <div class="col-3 p-md-5">
                                                    <img class="img-fluid brand-img" src="<?= $urlBrend ?>" alt="Brand Logo">
                                                </div>
                                                <?php
                                            }
                                            wp_reset_postdata();
                                            ?>
                                        </div>

                    <!--Controls-->
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                            <i class="text-light fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
        </div>
    </div>
</section>
<?= get_footer() ?>
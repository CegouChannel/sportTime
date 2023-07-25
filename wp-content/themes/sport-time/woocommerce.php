<!-- Template Name: Магазин  -->

<?php get_header(); ?>
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
    <!-- Start Content -->
    <div class="container py-5">
        <div class="d-flex justify-content-center ">
            <div class="col-lg-9">
                <div class="column">
                    <?php woocommerce_content(); ?>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
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
            </div>
        </div>
    </section>
    <!--End Brands-->


    <!-- Start Footer -->
<?php get_footer(); ?>
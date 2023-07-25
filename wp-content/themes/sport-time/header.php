<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <title>SportTime</title>
</head>
<?php wp_head();?>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between contacts">
                <div>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:dammarchanel@gmail.com">✉ dammarchanel@gmail.com</a>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:89828224419">✆ + 7 (982) 822-44-19</a>
                </div>
                <div>
                    <a class="text-light" href="https://vk.com/cegouchannel" target="_blank" rel="sponsored"><img src="http://u146490.test-handyhost.ru//wp-content/uploads/2023/03/vk-16.png" alt="..."></a>
                    <a class="text-light" href="https://t.me/nikitochka_frontend" target="_blank"><img src="http://u146490.test-handyhost.ru//wp-content/uploads/2023/03/telegram-16.png" alt="..."></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                SportTime
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Магазин</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts">Обратная связь</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon position-relative text-decoration-none" href="/cart">
                        <i>🛒</i>
                        <?php
                        if(WC()->cart->get_cart_contents_count() != 0){
                            ?>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"><?= WC()->cart->get_cart_contents_count();?></span>
                            <?php
                        } 
                        ?>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="/my-account">
                        <i>👦</i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
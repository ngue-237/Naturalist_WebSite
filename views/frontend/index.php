<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <title>Naturalia</title>
</head>

<body class="">
    <div class="site-wrapper">
        <header class="header petmark-header-1">
            <div class="header-wrapper">
                <!-- Site Wrapper Starts -->
                <div class="header-top bg-ash">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6 text-center text-sm-left">
                                <p class="font-weight-300">Welcome to Acacia Pet Food</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="header-top-nav right-nav">
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Language:</span><a class="slide-down--btn" href="#" role="button">
                                            English<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">En</a></li>
                                            <li><a href="#">En</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Currency:</span><a class="slide-down--btn" href="#" role="button">
                                            USD<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <!-- Template Logo -->
                            <div class="col-lg-3 col-md-12 col-sm-4">
                                <div class="site-brand  text-center text-lg-left">
                                    <a href="index.html" class="brand-image">
                                        <img src="image/main-logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Category With Search -->
                            <div class="col-lg-5 col-md-7 order-3 order-md-2">
                                <form class="category-widget">
                                    <input type="text" name="search" placeholder="Search products">
                                    <div class="search-form__group search-form__group--select">
                                        <select name="category " id="searchCategory"
                                            class="search-form__select nice-select">
                                            <option value="all">CATHEGORIES</option>
                                            <?php
                                            $rows = $cathProd->getAllCathProd();
                                            foreach($rows as $row):
                                        ?>
                                            <option><?=$row['designation'];?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button class="search-submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Call Login & Track of Order -->
                            <div class="col-lg-4 col-md-5 col-sm-8 order-2 order-md-3">
                                <div class="header-widget-2 text-center text-sm-right ">
                                    <div class="call-widget">
                                        <p>CALL TN NOW: <i class="icon ion-ios-telephone"></i><span
                                                class="font-weight-mid">+216 52 73 93 85</span></p>
                                    </div>
                                    <ul class="header-links">
                                        <li><a href="cart.html"><i class="fas fa-car-alt"></i> Commandes</a></li>
                                        <li><a href="login-register.html"><i class="fas fa-user"></i> Se connecter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-wrapper">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row no-gutters">
                            <!-- Category Nav -->
                            <div class="col-lg-3 col-md-8">
                                <!-- Category Nav Start -->
                                <div class="category-nav-wrapper bg-blue">
                                    <div class="category-nav">
                                        <h2 class="category-nav__title primary-bg" id="js-cat-nav-title"><i
                                                class="fa fa-bars"></i>
                                            <span>Toute nos Categories</span></h2>

                                        <ul class="category-nav__menu" id="js-cat-nav">
                                            <?php 
                                            $rows = $animalProd->getAllAnimalProdSelect();
                                            $i=1;
                                            foreach($rows as $row):
                                        ?>
                                            <li class="category-nav__menu__item has-children">
                                                <a href="shop.html"><?= $row['type_animal'] ?></a>
                                                <div class="category-nav__submenu">
                                                    <div class="category-nav__submenu--inner">
                                                        <ul>
                                                            <?php
                                                            $caths = $cathProd->getCathByTypeAnimal($row['type_animal']);
                                                            foreach($caths as $cath):
                                                        ?>
                                                            <li><a href="shop.html"><?=$cath['designation']; ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach;?>
                                            <li class="category-nav__menu__item hidden-menu-item">
                                                <a href="shop.html">Jewlery &amp; watches</a>
                                            </li>
                                            <li class="category-nav__menu__item">
                                                <a href="shop.html" class="js-expand-hidden-menu"> Plus de
                                                    Cathegories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Category Nav End -->
                                <div class="category-mobile-menu"></div>
                            </div>
                            <!-- Main Menu -->
                            <div class="col-lg-7 d-none d-lg-block">
                                <nav class="main-navigation">
                                    <!-- Mainmenu Start -->
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="index.html" class="mainmenu__link">Home</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us 1</a></li>
                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="contact.html">Contact</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li><a href="contact-2.html">Contact 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Services</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="service.html">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-2.html">Services 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login & Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="blog.html" class="mainmenu__link">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog Gird</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li><a href="blog.html">Blog Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-list.html">Blog List</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-list-left-sidebar.html">Blog List Left
                                                                Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-details.html">Blog Details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details.html">Image Format</a></li>
                                                        <li><a href="blog-details-video.html">Video Format</a></li>
                                                        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                        <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="shop-left-sidebar.php" class="mainmenu__link">Produits</a>
                                            <ul class="megamenu three-column">
                                                <?php 
                                                    foreach($rows as $row):
                                                ?>
                                                <li>
                                                    <a href="shop.html"><?=$row['type_animal']; ?></a>
                                                    <ul>
                                                    <?php 
                                                            $caths = $cathProd->getCathByTypeAnimal($row['type_animal']);
                                                            foreach($caths as $cath):
                                                            ?>
                                                            <li>
                                                                <a href="shop-left-sidebar.php"><?=$cath['designation'];?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>

                                        </li>
                                    </ul>
                                    <!-- Mainmenu End -->
                                </nav>
                            </div>
                            <!-- Cart block-->
                            <div class="col-lg-2 col-6 offset-6 offset-md-0 col-md-3 order-3">
                                <div class="cart-widget-wrapper slide-down-wrapper">
                                    <div class="cart-widget slide-down--btn">
                                        <div class="cart-icon">
                                            <i class="ion-bag"></i>
                                            <span class="cart-count-badge">
                                                1
                                            </span>
                                        </div>
                                        <div class="cart-text">
                                            <span class="d-block">Votre panier</span>
                                            <strong><span class="amount"><span
                                                        class="currencySymbol">$</span>40.00</span></strong>
                                        </div>
                                    </div>
                                    <div class="slide-down--item ">
                                        <div class="cart-widget-box">
                                            <ul class="cart-items">
                                                <li class="single-cart">
                                                    <a href="#" class="cart-product">
                                                        <div class="cart-product-img">
                                                            <img src="image/product/cart-product.jpg"
                                                                alt="Selected Products">
                                                        </div>
                                                        <div class="product-details">
                                                            <h4 class="product-details--title"> Ras Neque Metus</h4>
                                                            <span class="product-details--price">1 x $120.00</span>
                                                        </div>
                                                        <span class="cart-cross">x</span>
                                                    </a>
                                                </li>
                                                <li class="single-cart">
                                                    <div class="cart-product__subtotal">
                                                        <span class="subtotal--title">Subtotal</span>
                                                        <span class="subtotal--price">$200</span>
                                                    </div>
                                                </li>
                                                <li class="single-cart">
                                                    <div class="cart-buttons">
                                                        <a href="cart.html" class="btn btn-outlined">View Cart</a>
                                                        <a href="checkout.html" class="btn btn-outlined">Check Out</a>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
                                <!-- Main Mobile Menu Start -->
                                <div class="mobile-menu"></div>
                                <!-- Main Mobile Menu End -->
                            </div>
                        </div>
                    </div>


                    <div class="row">

                    </div>
                </div>
                <div class="fixed-header sticky-init">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <!-- Sticky Logo Start -->
                                <a class="sticky-logo" href="index.html">
                                    <img src="image/main-logo.png" alt="logo">
                                </a>
                                <!-- Sticky Logo End -->
                            </div>
                            <div class="col-lg-9">
                                <!-- Sticky Mainmenu Start -->
                                <nav class="sticky-navigation">
                                    <ul class="mainmenu sticky-menu">
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="index.html" class="mainmenu__link">Home</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us 1</a></li>
                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="contact.html">Contact</a>
                                                    <ul class="sub-menu">

                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li><a href="contact-2.html">Contact 2</a></li>

                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Services</a>
                                                    <ul class="sub-menu">

                                                        <li>
                                                            <a href="service.html">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-2.html">Services 2</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login & Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="blog.html" class="mainmenu__link">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog Gird</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li><a href="blog.html">Blog Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-list.html">Blog List</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-list-left-sidebar.html">Blog List Left
                                                                Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-details.html">Blog Details</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details.html">Image Format</a></li>
                                                        <li><a href="blog-details-video.html">Video Format</a></li>
                                                        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                        <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="shop-left-sidebar.php" class="mainmenu__link">Produits</a>
                                            <ul class="megamenu three-column">
                                                <?php 
                                                    foreach($rows as $row):
                                                ?>
                                                <li>
                                                    <a href="product-details.html"><?=$row['type_animal']; ?></a>
                                                    <ul>
                                                        <?php 
                                                        $cath1s = $cathProd->getCathByTypeAnimal($row['type_animal']);
                                                        foreach($cath1s as $cath1):
                                                        ?>
                                                        <li><a href="product-details.html"><?= $cath1['designation'];?></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <?php endforeach; ?>
                                                
                                            </ul>

                                        </li>
                                    </ul>
                                    <div class="sticky-mobile-menu  d-lg-none">
                                        <span class="sticky-menu-btn"></span>
                                    </div>
                                </nav>
                                <!-- Sticky Mainmenu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class=" petmark-slick-slider  home-slider dot-position-1" data-slick-setting='{
        "autoplay": true,
        "autoplaySpeed": 8000,
        "slidesToShow": 1,
        "dots": true
    }'>
                <div class="single-slider home-content bg-image" data-bg="image/bg-images/home-1/slider-1.jpg">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-lg-6">

                                <h2>Delicious bites <br> with benifits</h2>

                                <h4 class="mt--30">100% made in U.S.A chicken breast jerky</h4>

                                <div class="slider-btn mt--30">
                                    <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <span class="herobanner-progress"></span>
                </div>
                <div class="single-slider home-content bg-image" data-bg="image/bg-images/home-1/slider-2.jpg">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-lg-6">

                                <h3>Friends & Family</h3>
                                <h1 class="text-primary">SAVE 25% OFF</h1>
                                <h4 class="mt--20">Flea & ticks Product for Cats</h4>

                                <div class="slider-btn mt--30">
                                    <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <span class="herobanner-progress"></span>
                </div>
            </div>
        </section>
        <div class="container pt--50">
            <div class="policy-block border-four-column">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block-single">
                            <div class="icon">
                                <span class="ti-truck"></span>
                            </div>
                            <div class="text">
                                <h3>Free Delivery</h3>
                                <p>On orders of $200+</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block-single">
                            <div class="icon">
                                <span class="ti-credit-card"></span>
                            </div>
                            <div class="text">
                                <h3>Cod</h3>
                                <p>Cash on Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block-single">
                            <div class="icon">
                                <span class="ti-gift"></span>
                            </div>
                            <div class="text">
                                <h3>Free Gift Box</h3>
                                <p>Buy a Gift</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block-single">
                            <div class="icon">
                                <span class="ti-headphone-alt"></span>
                            </div>
                            <div class="text">
                                <h3>Free Support 24/7</h3>
                                <p>Online 24hrs a Day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider One / Normal Two Column Slider -->
        <section class="pt--50">
            <div class="container">
                <div class="block-title">
                    <h2>NEW PRODUCTS</h2>
                </div>
                <div class="petmark-slick-slider border normal-two-column-slider" data-slick-setting='{
                "autoplaySpeed": 3000,
                "slidesToShow": 2,
                "arrows": true
            }' data-slick-responsive='[
                {"breakpoint":991, "settings": {"slidesToShow": 1} },
                {"breakpoint":575, "settings": {"slidesToShow": 1} }
            ]'>
                    <div class="single-slide">
                        <div class="pm-product product-type-list">
                            <a href="product-details.html" class="image">
                                <img src="image/product/home-1/product-1.jpg" alt="">
                            </a>
                            <div class="content">
                                <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                                <div class="price text-red mb-3">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor.</p>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product product-type-list">
                            <a href="product-details.html" class="image">
                                <img src="image/product/home-1/product-2.jpg" alt="">
                            </a>
                            <div class="content">
                                <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                                <div class="price text-red mb-3">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor.</p>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product product-type-list">
                            <a href="product-details.html" class="image">
                                <img src="image/product/home-1/product-3.jpg" alt="">
                            </a>
                            <div class="content">
                                <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                                <div class="price text-red mb-3">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor.</p>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product product-type-list">
                            <a href="product-details.html" class="image">
                                <img src="image/product/home-1/product-4.jpg" alt="">
                            </a>
                            <div class="content">
                                <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                                <div class="price text-red mb-3">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor.</p>
                                <div class="count-down-block">
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Section -->
        <section class="category-section pt--50">
            <div class="container">
                <div class="block-title">
                    <h2>TOP CATEGORIES THIS WEEK</h2>
                </div>
                <div class="category-block">
                    <div class="row no-gutters">
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="category-block-single">
                                <a href="shop.html" class="icon">
                                    <img src="image/product/home-1/category-1.png" alt="">
                                </a>
                                <h3><a href="shop.html">Dog Food</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="category-block-single">
                                <a href="shop.html" class="icon">
                                    <img src="image/product/home-1/category-2.png" alt="">
                                </a>
                                <h3><a href="shop.html">Cat Food</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="category-block-single">
                                <a href="shop.html" class="icon">
                                    <img src="image/product/home-1/category-3.png" alt="">
                                </a>
                                <h3><a href="shop.html">Fish Food</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="category-block-single">
                                <a href="shop.html" class="icon">
                                    <img src="image/product/home-1/category-4.png" alt="">
                                </a>
                                <h3><a href="shop.html">Bird Food</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="category-block-single">
                                <a href="shop.html" class="icon">
                                    <img src="image/product/home-1/category-5.png" alt="">
                                </a>
                                <h3><a href="shop.html">Reptile Food</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="category-block-single">
                                <a href="shop.html" class="icon">
                                    <img src="image/product/home-1/category-6.png" alt="">
                                </a>
                                <h3><a href="shop.html">Small Pet Food</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="pm-product-details">
                        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                            <!-- Blog Details Image Block -->
                            <div class="col-md-6">
                                <div class="image-block">
                                    <!-- Zoomable IMage -->
                                    <img id="zoom_03" src="image/product/product-details/product-details-1.jpg"
                                        data-zoom-image="image/product/product-details/product-details-1.jpg" alt="" />

                                    <!-- Product Gallery with Slick Slider -->
                                    <div id="product-view-gallery" class="elevate-gallery">
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-1.jpg"
                                            data-zoom-image="image/product/product-details/product-details-1.jpg">
                                            <img src="image/product/product-details/product-details-1.jpg" alt="" />
                                        </a>
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-2.jpg"
                                            data-zoom-image="image/product/product-details/product-details-2.jpg">
                                            <img src="image/product/product-details/product-details-2.jpg" alt="" />
                                        </a>
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-3.jpg"
                                            data-zoom-image="image/product/product-details/product-details-3.jpg">
                                            <img src="image/product/product-details/product-details-3.jpg" alt="" />
                                        </a>
                                        <!-- Slick Single -->
                                        <a href="#" class="gallary-item"
                                            data-image="image/product/product-details/product-details-4.jpg"
                                            data-zoom-image="image/product/product-details/product-details-4.jpg">
                                            <img src="image/product/product-details/product-details-4.jpg" alt="" />
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4 mt-lg-0">
                                <div class="description-block">
                                    <div class="header-block">
                                        <h3>Diam vel neque</h3>
                                    </div>
                                    <!-- Price -->
                                    <p class="price"><span class="old-price">250$</span>300$</p>
                                    <!-- Rating Block -->
                                    <div class="rating-block d-flex  mt--10 mb--15">
                                        <p class="rating-text"><a href="#comment-form">See all features</a></p>
                                    </div>
                                    <!-- Blog Short Description -->
                                    <div class="product-short-para">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est
                                            tristique auctor. Donec non est at libero vulputate rutrum.
                                        </p>
                                    </div>
                                    <div class="status">
                                        <i class="fas fa-check-circle"></i>300 IN STOCK
                                    </div>
                                    <!-- Amount and Add to cart -->
                                    <form action="https://demo.hasthemes.com/petmark-v5/petmark/" class="add-to-cart">
                                        <div class="count-input-block">
                                            <input type="number" class="form-control text-center" value="1">
                                        </div>
                                        <div class="btn-block">
                                            <a href="#" class="btn btn-rounded btn-outlined--primary">Add to cart</a>
                                        </div>
                                    </form>
                                    <!-- Sharing Block 2 -->
                                    <div class="share-block-2 mt--30">
                                        <h4>SHARE THIS PRODUCT</h4>
                                        <ul class="social-btns social-btns-3">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promotion Block 1 -->
        <section class="pt--50 space-db--30">
            <h2 class="d-none">Promotion Block
            </h2>
            <div class="container">
                <a class="promo-image overflow-image">
                    <img src="image/product/promo-product-image-huge.jpg" alt="">
                </a>
            </div>
        </section>
        <!-- Slider Block Two -->
        <div class="pt--50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-title">
                            <h2>TOP CATEGORIES THIS WEEK</h2>
                        </div>
                        <!-- Two row Three Column Slider -->
                        <div class="petmark-slick-slider border grid-column-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 3,
                            "rows" :2,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-7.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-2.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-1.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-3.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-4.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-5.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-6.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-7.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt--50 pt-lg-0">
                        <div class="block-title">
                            <h2>NEW PRODUCTS</h2>
                        </div>
                        <!--Two Row One Column Slider -->
                        <div class="petmark-slick-slider border one-column-slider two-row" data-slick-setting='{
                            "autoplaySpeed": 3000,
                            "slidesToShow": 1,
                            "rows" :2,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 1} },
                            {"breakpoint":575, "settings": {"slidesToShow": 1} }
                        ]'>
                            <div class="single-slide">
                                <div class="pm-product product-type-list">
                                    <a href="product-details.html" class="image">
                                        <img src="image/product/home-1/product-1.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="rating-widget mt--20">
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                                            <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded btn-mid">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product product-type-list">
                                    <a href="product-details.html" class="image">
                                        <img src="image/product/home-1/product-8.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="rating-widget mt--20">
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                                            <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded btn-mid">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product product-type-list">
                                    <a href="product-details.html" class="image">
                                        <img src="image/product/home-1/product-3.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="rating-widget mt--20">
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                                            <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded btn-mid">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product product-type-list">
                                    <a href="product-details.html" class="image">
                                        <img src="image/product/home-1/product-4.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="rating-widget mt--20">
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                                            <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                                            <a href="#" class="single-rating"><i class="far fa-star"></i></a>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded btn-mid">Add to
                                                Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLider Block 3 / Tab -->
        <div class="pt--50">
            <div class="container">

                <div class="slider-header-block tab-header d-flex">
                    <div class="block-title">
                        <h2>TOP CATEGORIES THIS WEEK</h2>
                    </div>



                    <ul class="pm-tab-nav nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Dry Kibbles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Wet Dog Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Puppy Food</a>
                        </li>
                    </ul>
                </div>



                <div class="tab-content pm-slider-tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="petmark-slick-slider border grid-column-slider  arrow-type-two" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "rows" :2,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-7.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-6.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-5.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-4.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-3.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-2.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-1.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-9.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-11.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-10.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-7.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-1.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="petmark-slick-slider border grid-column-slider  arrow-type-two" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "rows" :2,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-2.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-3.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-4.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-5.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-6.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-7.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-8.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-9.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-10.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-11.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-5.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-4.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="petmark-slick-slider border grid-column-slider  arrow-type-two" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "rows" :2,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-1.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-2.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-3.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-4.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-5.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-6.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-8.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-10.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-5.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-4.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-2.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="pm-product">
                                    <div class="image">
                                        <a href="product-details.html"><img src="image/product/home-1/product-1.jpg"
                                                alt=""></a>
                                        <div class="hover-conents">
                                            <ul class="product-btns">
                                                <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                            class="ion-ios-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="onsale-badge">Sale!</span>
                                    </div>
                                    <div class="content">
                                        <h3>Convallis quam sit</h3>
                                        <div class="price text-red">
                                            <span class="old">$200</span>
                                            <span>$300</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Promotion Block 2 -->
        <section class="pt--50 space-db--30">
            <h2 class="d-none">Promotion Block
            </h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <a class="promo-image overflow-image">
                            <img src="image/product/promo-product-image-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a class="promo-image overflow-image  promo-small ">
                            <img src="image/product/promo-product-image-sm.jpg" alt="">
                        </a>
                        <a class="promo-image overflow-image  promo-small ">
                            <img src="image/product/promo-product-image-sm-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a class="promo-image overflow-image">
                            <img src="image/product/promo-product-image.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider bLock 4 -->
        <div class="pt--50">
            <div class="container">

                <div class="block-title">
                    <h2>TOP CATEGORIES THIS WEEK</h2>
                </div>
                <div class="petmark-slick-slider border grid-column-slider " data-slick-setting='{
            "autoplay": true,
            "autoplaySpeed": 3000,
            "slidesToShow": 5,
            "rows" :2,
            "arrows": true
        }' data-slick-responsive='[
            {"breakpoint":991, "settings": {"slidesToShow": 3} },
            {"breakpoint":768, "settings": {"slidesToShow": 2} },
            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
        ]'>

                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-1.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-2.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-3.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-4.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-5.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-6.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-11.jpg"
                                        alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-8.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-6.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-7.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-2.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-2.jpg" alt=""></a>
                                <div class="hover-conents">
                                    <ul class="product-btns">
                                        <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                        <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#quickModal"><i
                                                    class="ion-ios-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- slide Block 5 / Normal Slider -->
        <div class="pt--50">
            <div class="container">
                <div class="block-title">
                    <h2>TOP CATEGORIES THIS WEEK</h2>
                </div>
                <div class="petmark-slick-slider border normal-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 3,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                            {"breakpoint":768, "settings": {"slidesToShow": 1} }
                        ]'>

                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-7.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-8.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-6.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-7.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-3.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-2.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-1.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="pm-product  product-type-list">
                            <div class="image">
                                <a href="product-details.html"><img src="image/product/home-1/product-9.jpg" alt=""></a>

                                <span class="onsale-badge">Sale!</span>
                            </div>
                            <div class="content">
                                <h3>Convallis quam sit</h3>
                                <div class="price text-red">
                                    <span class="old">$200</span>
                                    <span>$300</span>
                                </div>
                                <div class="btn-block">
                                    <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- slide Block 3 / Normal Slider -->
        <div class="pt--50 pb--50">
            <div class="container">

                <div class="petmark-slick-slider brand-slider  border normal-slider grid-border-none"
                    data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 4} },
                            {"breakpoint":768, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 2} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>

                    <div class="single-slide">
                        <a href="#" class="overflow-image brand-image">
                            <img src="image/brand/brand.png" alt="">
                        </a>
                    </div>
                    <div class="single-slide">
                        <a href="#" class="overflow-image brand-image">
                            <img src="image/brand/brand-2.png" alt="">
                        </a>
                    </div>
                    <div class="single-slide">
                        <a href="#" class="overflow-image brand-image">
                            <img src="image/brand/brand-3.png" alt="">
                        </a>
                    </div>
                    <div class="single-slide">
                        <a href="#" class="overflow-image brand-image">
                            <img src="image/brand/brand-4.png" alt="">
                        </a>
                    </div>
                    <div class="single-slide">
                        <a href="#" class="overflow-image brand-image">
                            <img src="image/brand/brand-5.png" alt="">
                        </a>
                    </div>
                    <div class="single-slide">
                        <a href="#" class="overflow-image brand-image">
                            <img src="image/brand/brand-6.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">Contact</h3>
                            <div class="single-footer-content">
                                <p class="text-italic">We are a team of designers and developers that create high
                                    quality Wordpress, Magento, Prestashop, Opencart.</p>
                                <p class="font-weight-500 text-white"><span class="d-block">Contact info:</span>
                                    169-C, Technohub, Dubai Silicon Oasis.</p>
                                <p class="social-icons">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fas fa-rss"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">Information</h3>
                            <div class="single-footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">CUSTOMER CARE</h3>
                            <div class="single-footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Notification</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">SUBSCRIBE TO OUR NEWSLETTER</h3>
                            <div class="single-footer-content">
                                <p>
                                    Subscribe to the Petmark mailing list to receive updates on new arrivals, special
                                    offers and other discount information.
                                </p>
                                <div class="pt-2">
                                    <div class="input-box-with-icon">
                                        <input type="text" placeholder="Enter Your email">
                                        <button><i class="fas fa-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-block-2 text-center">
                    <ul class="footer-list list-inline justify-content-center">
                        <li><a href="#">Online Shopping</a></li>

                        <li><a href="#">Promotions</a></li>

                        <li><a href="#"> My Orders</a></li>

                        <li><a href="#">Help</a></li>

                        <li><a href="#">Customer Service</a></li>

                        <li><a href="#">Support</a></li>

                        <li><a href="#"> Most Populars</a></li>

                        <li><a href="#">New Arrivals</a></li>

                        <li><a href="#">Special Products</a></li>

                        <li><a href="#">Manufacturers</a></li>

                        <li><a href="#">Our Stores</a></li>
                    </ul>
                    <ul class="footer-list list-inline justify-content-center">
                        <li><a href="#">Shipping</a></li>

                        <li><a href="#">Payments</a></li>

                        <li><a href="#">Warantee</a></li>

                        <li><a href="#">Refunds</a></li>

                        <li><a href="#">Checkout</a></li>

                        <li><a href="#">Discount</a></li>

                        <li><a href="#">Terms & Conditions</a></li>

                        <li><a href="#"> Policy</a></li>

                        <li><a href="#">Special Products</a></li>

                        <li><a href="#">Manufacturers</a></li>

                        <li><a href="#">Our Stores</a></li>
                    </ul>
                    <div class="payment-block pt-3">
                        <img src="image/icon-logo/payment-icons.png" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>Copyright © 2018 <a href="#">Petmark.com</a>. All Rights Reserved</p>
            </div>
        </footer>
    </div>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:24:15 GMT -->

</html>
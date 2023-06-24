@extends('ecommerce::layouts.master')

@section('content')
<div class="page-wrapper">
    <header class="header header-14">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                </div><!-- End .header-left -->

                <div class="header-right">

                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul class="menus">
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">USD</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="#">Eur</a></li>
                                                <li><a href="#">Usd</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div><!-- End .header-dropdown -->
                                </li>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">Engligh</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Spanish</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div><!-- End .header-dropdown -->
                                </li>
                                <li class="login">
                                    <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        <a href="index.html" class="logo">
                            <img src="modules/ecommerce/images/demos/demo-14/logo.png" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .col-xl-3 col-xxl-2 -->

                    <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                        <div class="row">
                            <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                                <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                    <form action="#" method="get">
                                        <div class="header-search-wrapper search-wrapper-wide">

                                            <div class="select-custom">
                                                <select id="cat" name="cat">
                                                    <option value="">All Departments</option>
                                                    <option value="1">Fashion</option>
                                                    <option value="2">- Women</option>
                                                    <option value="3">- Men</option>
                                                    <option value="4">- Jewellery</option>
                                                    <option value="5">- Kids Fashion</option>
                                                    <option value="6">Electronics</option>
                                                    <option value="7">- Smart TVs</option>
                                                    <option value="8">- Cameras</option>
                                                    <option value="9">- Games</option>
                                                    <option value="10">Home &amp; Garden</option>
                                                    <option value="11">Motors</option>
                                                    <option value="12">- Cars and Trucks</option>
                                                    <option value="15">- Boats</option>
                                                    <option value="16">- Auto Tools &amp; Supplies</option>
                                                </select>
                                            </div><!-- End .select-custom -->
                                            <label for="q" class="sr-only">Search</label>
                                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>

                                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                        </div><!-- End .header-search-wrapper -->
                                    </form>
                                </div><!-- End .header-search -->
                            </div><!-- End .col-xxl-4-5col -->

                            <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                                <div class="header-dropdown-link">
                                    <div class="dropdown compare-dropdown">
                                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                            <i class="icon-random"></i>
                                            <span class="compare-txt">Compare</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="compare-products">
                                                <li class="compare-product">
                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                    <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                                </li>
                                                <li class="compare-product">
                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                    <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                                </li>
                                            </ul>

                                            <div class="compare-actions">
                                                <a href="#" class="action-link">Clear All</a>
                                                <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                            </div>
                                        </div><!-- End .dropdown-menu -->
                                    </div><!-- End .compare-dropdown -->

                                    <a href="wishlist.html" class="wishlist-link">
                                        <i class="icon-heart-o"></i>
                                        <span class="wishlist-count">3</span>
                                        <span class="wishlist-txt">Wishlist</span>
                                    </a>

                                    <div class="dropdown cart-dropdown">
                                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                            <i class="icon-shopping-cart"></i>
                                            <span class="cart-count">2</span>
                                            <span class="cart-txt">Cart</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-cart-products">
                                                <div class="product">
                                                    <div class="product-cart-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">Beige knitted elastic runner shoes</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span>
                                                            x $84.00
                                                        </span>
                                                    </div><!-- End .product-cart-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="modules/ecommerce/images/products/cart/product-1.jpg" alt="product">
                                                        </a>
                                                    </figure>
                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                </div><!-- End .product -->

                                                <div class="product">
                                                    <div class="product-cart-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">Blue utility pinafore denim dress</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span>
                                                            x $76.00
                                                        </span>
                                                    </div><!-- End .product-cart-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="modules/ecommerce/images/products/cart/product-2.jpg" alt="product">
                                                        </a>
                                                    </figure>
                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                </div><!-- End .product -->
                                            </div><!-- End .cart-product -->

                                            <div class="dropdown-cart-total">
                                                <span>Total</span>

                                                <span class="cart-total-price">$160.00</span>
                                            </div><!-- End .dropdown-cart-total -->

                                            <div class="dropdown-cart-action">
                                                <a href="cart.html" class="btn btn-primary">View Cart</a>
                                                <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .dropdown-cart-total -->
                                        </div><!-- End .dropdown-menu -->
                                    </div><!-- End .cart-dropdown -->
                                </div>
                            </div><!-- End .col-xxl-5col -->
                        </div><!-- End .row -->
                    </div><!-- End .col-xl-9 col-xxl-10 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .header-middle -->

        <div class="header-bottom sticky-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
                        <div class="dropdown category-dropdown show is-on" data-visible="true">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories
                            </a>

                            <div class="dropdown-menu show">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#"><i class="icon-laptop"></i>Electronics</a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Laptops & Computers</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Desktop Computers</a></li>
                                                                        <li><a href="#">Monitors</a></li>
                                                                        <li><a href="#">Laptops</a></li>
                                                                        <li><a href="#">iPad & Tablets</a></li>
                                                                        <li><a href="#">Hard Drives & Storage</a></li>
                                                                        <li><a href="#">Printers & Supplies</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                    </ul>

                                                                    <div class="menu-title">TV & Video</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">TVs</a></li>
                                                                        <li><a href="#">Home Audio Speakers</a></li>
                                                                        <li><a href="#">Projectors</a></li>
                                                                        <li><a href="#">Media Streaming Devices</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->

                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Cell Phones</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Carrier Phones</a></li>
                                                                        <li><a href="#">Unlocked Phones</a></li>
                                                                        <li><a href="#">Phone & Cellphone Cases</a></li>
                                                                        <li><a href="#">Cellphone Chargers </a></li>
                                                                    </ul>

                                                                    <div class="menu-title">Digital Cameras</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Digital SLR Cameras</a></li>
                                                                        <li><a href="#">Sports & Action Cameras</a></li>
                                                                        <li><a href="#">Camcorders</a></li>
                                                                        <li><a href="#">Camera Lenses</a></li>
                                                                        <li><a href="#">Photo Printer</a></li>
                                                                        <li><a href="#">Digital Memory Cards</a></li>
                                                                        <li><a href="#">Camera Bags, Backpacks & Cases</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="modules/ecommerce/images/demos/demo-13/menu/banner-1.jpg" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#"><i class="icon-couch"></i>Furniture</a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Bedroom</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Beds, Frames & Bases</a></li>
                                                                        <li><a href="#">Dressers</a></li>
                                                                        <li><a href="#">Nightstands</a></li>
                                                                        <li><a href="#">Kids' Beds & Headboards</a></li>
                                                                        <li><a href="#">Armoires</a></li>
                                                                    </ul>

                                                                    <div class="menu-title">Living Room</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Coffee Tables</a></li>
                                                                        <li><a href="#">Chairs</a></li>
                                                                        <li><a href="#">Tables</a></li>
                                                                        <li><a href="#">Futons & Sofa Beds</a></li>
                                                                        <li><a href="#">Cabinets & Chests</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->

                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Office</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Office Chairs</a></li>
                                                                        <li><a href="#">Desks</a></li>
                                                                        <li><a href="#">Bookcases</a></li>
                                                                        <li><a href="#">File Cabinets</a></li>
                                                                        <li><a href="#">Breakroom Tables</a></li>
                                                                    </ul>

                                                                    <div class="menu-title">Kitchen & Dining</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Dining Sets</a></li>
                                                                        <li><a href="#">Kitchen Storage Cabinets</a></li>
                                                                        <li><a href="#">Bakers Racks</a></li>
                                                                        <li><a href="#">Dining Chairs</a></li>
                                                                        <li><a href="#">Dining Room Tables</a></li>
                                                                        <li><a href="#">Bar Stools</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="modules/ecommerce/images/demos/demo-13/menu/banner-2.jpg" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#"><i class="icon-concierge-bell"></i>Cooking</a>

                                            <div class="megamenu">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="menu-title">Cookware</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Cookware Sets</a></li>
                                                                <li><a href="#">Pans, Griddles & Woks</a></li>
                                                                <li><a href="#">Pots</a></li>
                                                                <li><a href="#">Skillets & Grill Pans</a></li>
                                                                <li><a href="#">Kettles</a></li>
                                                                <li><a href="#">Soup & Stockpots</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="menu-title">Dinnerware & Tabletop</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Plates</a></li>
                                                                <li><a href="#">Cups & Mugs</a></li>
                                                                <li><a href="#">Trays & Platters</a></li>
                                                                <li><a href="#">Coffee & Tea Serving</a></li>
                                                                <li><a href="#">Salt & Pepper Shaker</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="menu-title">Cooking Appliances</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Microwaves</a></li>
                                                                <li><a href="#">Coffee Makers</a></li>
                                                                <li><a href="#">Mixers & Attachments</a></li>
                                                                <li><a href="#">Slow Cookers</a></li>
                                                                <li><a href="#">Air Fryers</a></li>
                                                                <li><a href="#">Toasters & Ovens</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="row menu-banners">
                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    <img src="modules/ecommerce/images/demos/demo-13/menu/1.jpg" alt="image">
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    <img src="modules/ecommerce/images/demos/demo-13/menu/2.jpg" alt="image">
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    <img src="modules/ecommerce/images/demos/demo-13/menu/3.jpg" alt="image">
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#"><i class="icon-tshirt"></i>Clothing</a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Women</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                        <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                        <li><a href="#"><strong>Trending</strong></a></li>
                                                                        <li><a href="#">Clothing</a></li>
                                                                        <li><a href="#">Shoes</a></li>
                                                                        <li><a href="#">Bags</a></li>
                                                                        <li><a href="#">Accessories</a></li>
                                                                        <li><a href="#">Jewlery & Watches</a></li>
                                                                        <li><a href="#"><strong>Sale</strong></a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->

                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Men</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                        <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                        <li><a href="#"><strong>Trending</strong></a></li>
                                                                        <li><a href="#">Clothing</a></li>
                                                                        <li><a href="#">Shoes</a></li>
                                                                        <li><a href="#">Bags</a></li>
                                                                        <li><a href="#">Accessories</a></li>
                                                                        <li><a href="#">Jewlery & Watches</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="modules/ecommerce/images/demos/demo-13/menu/banner-3.jpg" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->

                                                <div class="menu-col menu-brands">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="modules/ecommerce/images/brands/1.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="modules/ecommerce/images/brands/2.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="modules/ecommerce/images/brands/3.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="modules/ecommerce/images/brands/4.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="modules/ecommerce/images/brands/5.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="modules/ecommerce/images/brands/6.png" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-brands -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li><a href="#"><i class="icon-blender"></i>Home Appliances</a></li>
                                        <li><a href="#"><i class="icon-heartbeat"></i>Healthy & Beauty</a></li>
                                        <li><a href="#"><i class="icon-shoe-prints"></i>Shoes & Boots</a></li>
                                        <li><a href="#"><i class="icon-map-signs"></i>Travel & Outdoor</a></li>
                                        <li><a href="#"><i class="icon-mobile-alt"></i>Smart Phones</a></li>
                                        <li><a href="#"><i class="icon-tv"></i>TV & Audio</a></li>
                                        <li><a href="#"><i class="icon-shopping-bag"></i>Backpack & Bag</a></li>
                                        <li><a href="#"><i class="icon-music"></i>Musical Instruments</a></li>
                                        <li><a href="#"><i class="icon-gift"></i>Gift Ideas</a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .col-xl-3 col-xxl-2 -->

                    <div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                    <div class="menu-col">
                                        <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                        <div class="demo-list">
                                            <div class="demo-item">
                                                <a href="index-1.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/1.jpg);"></span>
                                                    <span class="demo-title">01 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-2.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/2.jpg);"></span>
                                                    <span class="demo-title">02 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-3.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/3.jpg);"></span>
                                                    <span class="demo-title">03 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-4.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/4.jpg);"></span>
                                                    <span class="demo-title">04 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-5.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/5.jpg);"></span>
                                                    <span class="demo-title">05 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-6.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/6.jpg);"></span>
                                                    <span class="demo-title">06 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-7.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/7.jpg);"></span>
                                                    <span class="demo-title">07 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-8.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/8.jpg);"></span>
                                                    <span class="demo-title">08 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-9.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/9.jpg);"></span>
                                                    <span class="demo-title">09 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-10.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/10.jpg);"></span>
                                                    <span class="demo-title">10 - shoes store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-11.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/11.jpg);"></span>
                                                    <span class="demo-title">11 - furniture simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-12.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/12.jpg);"></span>
                                                    <span class="demo-title">12 - fashion simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-13.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/13.jpg);"></span>
                                                    <span class="demo-title">13 - market</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-14.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/14.jpg);"></span>
                                                    <span class="demo-title">14 - market fullwidth</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-15.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/15.jpg);"></span>
                                                    <span class="demo-title">15 - lookbook 1</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-16.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/16.jpg);"></span>
                                                    <span class="demo-title">16 - lookbook 2</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-17.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/17.jpg);"></span>
                                                    <span class="demo-title">17 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-18.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/18.jpg);"></span>
                                                    <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-19.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/19.jpg);"></span>
                                                    <span class="demo-title">19 - games store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-20.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/20.jpg);"></span>
                                                    <span class="demo-title">20 - book store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-21.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/21.jpg);"></span>
                                                    <span class="demo-title">21 - sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-22.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/22.jpg);"></span>
                                                    <span class="demo-title">22 - tools store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-23.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/23.jpg);"></span>
                                                    <span class="demo-title">23 - fashion left navigation store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-24.html">
                                                    <span class="demo-bg" style="background-image: url(modules/ecommerce/images/menu/demos/24.jpg);"></span>
                                                    <span class="demo-title">24 - extreme sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                        </div><!-- End .demo-list -->

                                        <div class="megamenu-action text-center">
                                            <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .text-center -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">Shop</a>

                                    <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-list.html">Shop List</a></li>
                                                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                            <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>

                                                        <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->

                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="dashboard.html">My Account</a></li>
                                                            <li><a href="#">Lookbook</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-8 -->

                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="category.html" class="banner banner-menu">
                                                    <img src="modules/ecommerce/images/menu/banner-1.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner banner-overlay -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="product.html">Default</a></li>
                                                        <li><a href="product-centered.html">Centered</a></li>
                                                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                        <li><a href="product-gallery.html">Gallery</a></li>
                                                        <li><a href="product-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                        <li><a href="product-fullwidth.html">Full Width</a></li>
                                                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="modules/ecommerce/images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="about.html">About 01</a></li>
                                                <li><a href="about-2.html">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="sf-with-ul">Contact</a>

                                            <ul>
                                                <li><a href="contact.html">Contact 01</a></li>
                                                <li><a href="contact-2.html">Contact 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html" class="sf-with-ul">Blog</a>

                                    <ul>
                                        <li><a href="blog.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Single Post</a>
                                            <ul>
                                                <li><a href="single.html">Default with sidebar</a></li>
                                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                    <ul>
                                        <li><a href="elements-products.html">Products</a></li>
                                        <li><a href="elements-typography.html">Typography</a></li>
                                        <li><a href="elements-titles.html">Titles</a></li>
                                        <li><a href="elements-banners.html">Banners</a></li>
                                        <li><a href="elements-product-category.html">Product Category</a></li>
                                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                                        <li><a href="elements-buttons.html">Buttons</a></li>
                                        <li><a href="elements-accordions.html">Accordions</a></li>
                                        <li><a href="elements-tabs.html">Tabs</a></li>
                                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                                        <li><a href="elements-cta.html">Call to Action</a></li>
                                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .col-xl-9 col-xxl-10 -->

                    <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                        <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
                    </div>
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .header-bottom -->
    </header><!-- End .header -->

    <main class="main">
        <div class="mb-lg-2"></div><!-- End .mb-lg-2 -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
                    <div class="intro-slider-container slider-container-ratio mb-2">
                        <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": true
                            }'>
                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)" srcset="modules/ecommerce/images/demos/demo-14/slider/slide-1-480w.jpg">
                                        <img src="modules/ecommerce/images/demos/demo-14/slider/slide-1.jpg" alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">New Arrivals</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title text-white">
                                        The New Way <br>To Buy Furniture
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-text text-white">
                                        Spring Collections 2019
                                    </div><!-- End .intro-text -->

                                    <a href="category.html" class="btn btn-primary">
                                        <span>Discover Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->

                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)" srcset="modules/ecommerce/images/demos/demo-14/slider/slide-2-480w.jpg">
                                        <img src="modules/ecommerce/images/demos/demo-14/slider/slide-2.jpg" alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">Hottest Deals</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">
                                        <span>Wherever You Go</span> <br>DJI Mavic 2 Pro
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup>from</sup>
                                        <span>
                                            $1,948<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary">
                                        <span>Discover Here</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->

                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)" srcset="modules/ecommerce/images/demos/demo-14/slider/slide-3-480w.jpg">
                                        <img src="modules/ecommerce/images/demos/demo-14/slider/slide-3.jpg" alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle">Limited Quantities</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">
                                        Refresh Your <br>Wardrobe
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-text">
                                        Summer Collection 2019
                                    </div><!-- End .intro-text -->

                                    <a href="category.html" class="btn btn-primary">
                                        <span>Discover Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->
                        </div><!-- End .intro-slider owl-carousel owl-simple -->

                        <span class="slider-loader"></span><!-- End .slider-loader -->
                    </div><!-- End .intro-slider-container -->
                </div><!-- End .col-xl-9 col-xxl-10 -->

                <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
                    <div class="banner banner-overlay  banner-content-stretch ">
                        <a href="#">
                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc">
                        </a>
                        <div class="banner-content text-right">
                            <div class="price text-center">
                                <sup class="text-white">from</sup>
                                <span class="text-white">
                                    <strong>$199</strong><sup class="text-white">,99</sup>
                                </span>
                            </div>
                            <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .col-xl-3 col-xxl-2 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-10">
                    <div class="row">
                        <div class="col-lg-12 col-xxl-4-5col">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-2.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Hottest Deals</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Detox And Beautify <br>For Spring <br><span>Up To  20% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-3.png" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Deal of the Day</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Headphones <br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-3 col-xxl-4-5col -->

                        <div class="col-12 col-xxl-5col d-none d-xxl-block">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="modules/ecommerce/images/demos/demo-14/banners/banner-4.jpg" alt="Banner img desc">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Seating and Tables Clearance</a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner banner-overlay -->
                        </div><!-- End .col-lg-3 col-xxl-2 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="owl-carousel owl-simple brands-carousel" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1600": {
                                    "items":6,
                                    "nav": true
                                }
                            }
                        }'>
                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/1.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/2.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/3.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/4.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/5.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/6.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="modules/ecommerce/images/brands/7.png" alt="Brand Name">
                        </a>
                    </div><!-- End .owl-carousel -->

                    <div class="mb-5"></div><!-- End .mb-5 -->

                    <div class="bg-lighter trending-products">
                        <div class="heading heading-flex mb-3">
                            <div class="heading-left">
                                <h2 class="title">Trending Today</h2><!-- End .title -->
                            </div><!-- End .heading-left -->

                           <div class="heading-right">
                                <ul class="nav nav-pills justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trending-elec-link" data-toggle="tab" href="#trending-elec-tab" role="tab" aria-controls="trending-elec-tab" aria-selected="false">Electronics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trending-furn-link" data-toggle="tab" href="#trending-furn-tab" role="tab" aria-controls="trending-furn-tab" aria-selected="false">Furniture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trending-cloth-link" data-toggle="tab" href="#trending-cloth-tab" role="tab" aria-controls="trending-cloth-tab" aria-selected="false">Clothes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trending-acc-link" data-toggle="tab" href="#trending-acc-tab" role="tab" aria-controls="trending-acc-tab" aria-selected="false">Accessories</a>
                                    </li>
                                </ul>
                           </div><!-- End .heading-right -->
                        </div><!-- End .heading -->

                        <div class="tab-content tab-content-carousel">
                            <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3,
                                                "nav": true
                                            },
                                            "1600": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$251.99</span>
                                                <span class="old-price">Was $290.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$179.99</span>
                                                <span class="old-price">Was $199.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $3,050.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 8 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $240.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,699.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 10 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Laptops</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,199.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="trending-elec-tab" role="tabpanel" aria-labelledby="trending-elec-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3,
                                                "nav": true
                                            },
                                            "1600": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $3,050.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 8 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $240.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$251.99</span>
                                                <span class="old-price">Was $290.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$179.99</span>
                                                <span class="old-price">Was $199.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Laptops</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,199.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,699.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 10 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="trending-furn-tab" role="tabpanel" aria-labelledby="trending-furn-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3,
                                                "nav": true
                                            },
                                            "1600": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Laptops</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,199.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$179.99</span>
                                                <span class="old-price">Was $199.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $3,050.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 8 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$251.99</span>
                                                <span class="old-price">Was $290.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,699.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 10 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $240.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="trending-cloth-tab" role="tabpanel" aria-labelledby="trending-cloth-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3,
                                                "nav": true
                                            },
                                            "1600": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$251.99</span>
                                                <span class="old-price">Was $290.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,699.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 10 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Laptops</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,199.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$179.99</span>
                                                <span class="old-price">Was $199.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $3,050.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 8 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane p-0 fade" id="trending-acc-tab" role="tabpanel" aria-labelledby="trending-acc-link">
                                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                    data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3,
                                                "nav": true
                                            },
                                            "1600": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $240.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $3,050.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 8 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$179.99</span>
                                                <span class="old-price">Was $199.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Electronics</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,699.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 10 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->

                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-top">Top</span>
                                            <a href="product.html">
                                                <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Laptops</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $1,199.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .owl-carousel -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .bg-lighter -->

                    <div class="mb-5"></div><!-- End .mb-5 -->

                    <div class="row cat-banner-row electronics">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(modules/ecommerce/images/demos/demo-14/banners/banner-bg-1.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Electronics</a></h2>

                                        <ul>
                                            <li><a href="#">Cell Phones</a></li>
                                            <li><a href="#">Computers</a></li>
                                            <li><a href="#">TV & Video</a></li>
                                            <li><a href="#">Smart Home</a></li>
                                            <li><a href="#">Audi</a></li>
                                            <li><a href="#">Home Audio & Theater</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-5.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Canon EOS <br>Mega Sale <br><span>Up To 20% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": true,
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":3
                                        },
                                        "1600": {
                                            "items":4
                                        }
                                    }
                                }'>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-top">Top</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Laptops</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $1,199.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-7.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Audio</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $79.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-8.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tablets</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro <br>with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $899.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-top">Top</span>
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-9.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cell Phone</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$350.00</span>
                                            <span class="old-price">Was $410.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 10 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-top">Top</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Laptops</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $1,199.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row cat-banner-row furniture">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(modules/ecommerce/images/demos/demo-14/banners/banner-bg-2.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Furniture </a></h2>

                                        <ul>
                                            <li><a href="#">Bedroom </a></li>
                                            <li><a href="#">Office</a></li>
                                            <li><a href="#">Living Room</a></li>
                                            <li><a href="#">Kitchen & Dining</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Outdoor</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-6.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Furniture Sets <br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": true,
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":3
                                        },
                                        "1600": {
                                            "items":4
                                        }
                                    }
                                }'>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-10.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tables</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Block Side Table/Trolley</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $299.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-11.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Sofas</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $1,199.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-12.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Carronade Large <br>Suspension Lamp</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$892.99</span>
                                            <span class="old-price">Was $931.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #f7f6f5;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-13.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Chairs</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $210.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-10.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tables</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Block Side Table/Trolley</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $299.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="modules/ecommerce/images/demos/demo-14/banners/banner-7.jpg" alt="Banner img desc">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Spring Sale is Coming</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Floral T-shirts and Vests  <br><span>Spring Sale</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="modules/ecommerce/images/demos/demo-14/banners/banner-8.jpg" alt="Banner img desc">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">Upgrade and Save <br><span>On The Latest Apple Devices</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner banner-overlay -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row cat-banner-row clothing">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(modules/ecommerce/images/demos/demo-14/banners/banner-bg-3.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Clothing  </a></h2>

                                        <ul>
                                            <li><a href="#">Best Sellers</a></li>
                                            <li><a href="#">Trending</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-9.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Clearance <br>Outerwear<br><span>Up To 70% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": true,
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":3
                                        },
                                        "1600": {
                                            "items":4
                                        }
                                    }
                                }'>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-14.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Beige faux suede runner  trainers</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $64.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-15.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Accessories</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Black boucle check scarf</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $36.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-16.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">T-Shirts</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Carronade Large <br>Suspension Lamp</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $56.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-17.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Bags</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Triple compartment cross body bag</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $64.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-14.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Beige faux suede runner  trainers</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $64.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="row cat-banner-row cooking">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(modules/ecommerce/images/demos/demo-14/banners/banner-bg-4.jpg);">
                                    <div class="banner-list-content">
                                        <h2><a href="#">Cooking </a></h2>

                                        <ul>
                                            <li><a href="#">Cookware</a></li>
                                            <li><a href="#">Dinnerware</a></li>
                                            <li><a href="#">Cups</a></li>
                                            <li><a href="#">Microwaves</a></li>
                                            <li><a href="#">Toasters</a></li>
                                            <li><a href="#">Coffee Makers</a></li>
                                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                                        </ul>
                                    </div><!-- End .banner-list-content -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6 col-xl-12 col-xxl-6">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-10.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                            <h3 class="banner-title text-white"><a href="#">Cooking <br>Appliances <br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .cat-banner -->
                        </div><!-- End .col-xl-3 -->

                        <div class="col-xl-9 col-xxl-8">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": true,
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":3
                                        },
                                        "1600": {
                                            "items":4
                                        }
                                    }
                                }'>
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-18.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cooking Appliances</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">KitchenAid Professional  500 Series Stand Mixer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$249.99</span>
                                            <span class="old-price">Was $299.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 7 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-19.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Dinnerware</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">MoDRN Industrial 7 Piece</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $40.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-20.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cookware</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Cuisinart French Classic 3 Piece</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $44.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-21.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cooking Appliances</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">KitchenAid - KSB1570WH Classic 5-Speed Blender</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $75.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #c00b1b;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="modules/ecommerce/images/demos/demo-14/products/product-18.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cooking Appliances</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">KitchenAid Professional  500 Series Stand Mixer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$249.99</span>
                                            <span class="old-price">Was $299.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 7 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .col-xl-9 -->
                    </div><!-- End .row cat-banner-row -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    <div class="icon-boxes-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-rocket"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                            <p>Orders $50 or more</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-rotate-left"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                            <p>Within 30 days</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-info-circle"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                            <p>When you sign up</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-sm-6 col-lg-3">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="icon-life-ring"></i>
                                        </span>

                                        <div class="icon-box-content">
                                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                            <p>24/7 amazing services</p>
                                        </div><!-- End .icon-box-content -->
                                    </div><!-- End .icon-box -->
                                </div><!-- End .col-sm-6 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container-fluid -->
                    </div><!-- End .icon-boxes-container -->

                    <div class="mb-5"></div><!-- End .mb-5 -->
                </div><!-- End .col-lg-9 col-xxl-10 -->

                <aside class="col-xl-3 col-xxl-2 order-xl-first">
                    <div class="sidebar sidebar-home">
                        <div class="row">
                            <div class="col-sm-6 col-xl-12">
                                <div class="widget widget-banner">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-11.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content banner-content-top banner-content-right text-right">
                                            <h3 class="banner-title text-white"><a href="#">Maximum Comfort <span>Sofas -20% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .widget widget-banner -->
                            </div><!-- End .col-sm-6 col-xl-12 -->

                            <div class="col-sm-6 col-xl-12 mb-2">
                                <div class="widget widget-products">
                                    <h4 class="widget-title"><span>Bestsellers</span></h4><!-- End .widget-title -->

                                    <div class="products">
                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/products/small/product-1.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Sceptre 50" Class FHD (1080P) LED TV</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $199.99
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/products/small/product-2.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Red Cookware Set, 9 Piece</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $24.95
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/products/small/product-3.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Epson WorkForce WF-2750 All-in-One Wireless</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $49.99
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/products/small/product-4.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Stainless Steel Microwave Oven</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $64.84
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/products/small/product-5.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Fatboy Original Beanbag</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $49.99
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->
                                    </div><!-- End .products -->
                                </div><!-- End .widget widget-products -->
                            </div><!-- End .col-sm-6 col-xl-12 -->

                            <div class="col-12">
                                <div class="widget widget-deals">
                                    <h4 class="widget-title"><span>Special Offer</span></h4><!-- End .widget-title -->

                                    <div class="row">
                                        <div class="col-sm-6 col-xl-12">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Deal of the week</span>
                                                    <a href="product.html">
                                                        <img src="modules/ecommerce/images/demos/demo-14/products/deals/product-1.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Audio</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">Bose SoundLink Micro speaker</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$99.99</span>
                                                        <span class="old-price">Was $110.99</span>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 4 Reviews )</span>
                                                    </div><!-- End .rating-container -->

                                                    <div class="product-nav product-nav-dots">
                                                        <a href="#" class="active" style="background: #f3815f;"><span class="sr-only">Color name</span></a>
                                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                    </div><!-- End .product-nav -->
                                                </div><!-- End .product-body -->

                                                <div class="product-countdown" data-until="+44h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-xl-12 -->

                                        <div class="col-sm-6 col-xl-12">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <span class="product-label label-sale">Deal of the week</span>
                                                    <a href="product.html">
                                                        <img src="modules/ecommerce/images/demos/demo-14/products/deals/product-2.jpg" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#">Cameras</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="product.html">GoPro HERO Session Waterproof HD Action Camera</a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price">$196.99</span>
                                                        <span class="old-price">Was $210.99</span>
                                                    </div><!-- End .product-price -->
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                        <span class="ratings-text">( 19 Reviews )</span>
                                                    </div><!-- End .rating-container -->
                                                </div><!-- End .product-body -->

                                                <div class="product-countdown" data-until="+52h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-xl-12 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget widget-deals -->
                            </div><!-- End .col-sm-6 col-lg-xl -->

                            <div class="col-sm-6 col-xl-12">
                                <div class="widget widget-banner">
                                    <div class="banner banner-overlay">
                                        <a href="#">
                                            <img src="modules/ecommerce/images/demos/demo-14/banners/banner-12.jpg" alt="Banner img desc">
                                        </a>

                                        <div class="banner-content banner-content-top">
                                            <h3 class="banner-title text-white"><a href="#">Take Better Photos <br><span>With</span> Canon EOS <br><span>Up To 20% Off</span></a></h3><!-- End .banner-title -->
                                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .banner-content -->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .widget widget-banner -->
                            </div><!-- End .col-sm-6 col-lg-12 -->

                            <div class="col-sm-6 col-xl-12">
                                <div class="widget widget-posts">
                                    <h4 class="widget-title"><span>Latest Blog Posts</span></h4><!-- End .widget-title -->

                                    <div class="owl-carousel owl-simple" data-toggle="owl"
                                        data-owl-options='{
                                            "nav":false,
                                            "dots": true,
                                            "loop": false,
                                            "autoHeight": true
                                        }'>
                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/blog/post-1.jpg" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Sed adipiscing ornare.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Lorem ipsum dolor consectetuer adipiscing elit. Phasellus hendrerit. Pelletesque aliquet nibh ...</p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->

                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/blog/post-2.jpg" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Vivamus vestibulum ntulla.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Phasellus hendrerit. Pelletesque aliquet nibh necurna In nisi neque, aliquet vel, dapibus id ... </p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->

                                        <article class="entry">
                                            <figure class="entry-media">
                                                <a href="single.html">
                                                    <img src="modules/ecommerce/images/demos/demo-14/blog/post-3.jpg" alt="image desc">
                                                </a>
                                            </figure><!-- End .entry-media -->

                                            <div class="entry-body">
                                                <div class="entry-meta">
                                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                                </div><!-- End .entry-meta -->

                                                <h5 class="entry-title">
                                                    <a href="single.html">Praesent placerat risus.</a>
                                                </h5><!-- End .entry-title -->

                                                <div class="entry-content">
                                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc ...</p>
                                                    <a href="single.html" class="read-more">Read More</a>
                                                </div><!-- End .entry-content -->
                                            </div><!-- End .entry-body -->
                                        </article><!-- End .entry -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- End .widget widget-posts -->
                            </div><!-- End .col-sm-6 col-xl-12 -->
                        </div><!-- End .row -->
                    </div><!-- End .sidebar sidebar-home -->
                </aside><!-- End .col-lg-3 col-xxl-2 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </main><!-- End .main -->

    <footer class="footer">
        <div class="cta cta-horizontal cta-horizontal-box bg-dark bg-image" style="background-image: url('modules/ecommerce/images/demos/demo-14/bg-1.jpg');">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="row align-items-center">
                            <div class="col-lg-5 cta-txt">
                                <h3 class="cta-title text-primary">Join Our Newsletter</h3><!-- End .cta-title -->
                                <p class="cta-desc text-light">Subcribe to get information about products and coupons</p><!-- End .cta-desc -->
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-7">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">Subscribe</button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .col-lg-7 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-xl-8 offset-2 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .cta -->
        <div class="footer-middle border-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="widget widget-about">
                            <img src="modules/ecommerce/images/demos/demo-14/logo-footer.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>

                            <div class="widget-about-info">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <span class="widget-about-title">Got Question? Call us 24/7</span>
                                        <a href="tel:123456789">+0123 456 789</a>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-md-8">
                                        <span class="widget-about-title">Payment Method</span>
                                        <figure class="footer-payments">
                                            <img src="modules/ecommerce/images/payments.png" alt="Payment methods" width="272" height="20">
                                        </figure><!-- End .footer-payments -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget-about-info -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-12 col-lg-4 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">About Molla</a></li>
                                <li><a href="#">How to shop on Molla</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="login.html">Log in</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Sign In</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget widget-newsletter">
                            <h4 class="widget-title">Sign Up to Newsletter</h4><!-- End .widget-title -->

                            <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan.</p>

                            <form action="#">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-dark" type="submit"><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-2 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container-fluid">
                <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                <div class="social-icons social-icons-color">
                    <span class="social-label">Social Media</span>
                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div><!-- End .soial-icons -->
            </div><!-- End .container-fluid -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->


<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
@endsection

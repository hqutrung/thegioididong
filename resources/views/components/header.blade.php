<header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Begin Header Top Left Area -->
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-left">
                        <ul class="phone-wrap">
                            <li><span>Liên hệ:</span><a href="#">(+84) 904.777.528</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Left Area End Here -->
                <!-- Begin Header Top Right Area -->
                <div class="col-lg-9 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                            <li><a href="login-register.html">Tài khoản</a></li>
                            <li><a href="checkout.html">Thanh toán</a></li>
                            <li><a href="login-register.html">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Top Area End Here -->
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="{{route('home')}}">
                            <img src="/images/menu/logo/logo.png" style="height: 60px;" alt="">
                        </a>
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form action="#" class="hm-searchbox">
                        <select class="nice-select select-search-category">
                            <option value="0">All</option>
                            @if(isset($categories))
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->c_name}}</option>
                            @endforeach
                            @endif
                        </select>
                        <input type="text" placeholder="Nhập từ khóa ...">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <!-- Begin Header Middle Wishlist Area -->
                            <li class="hm-wishlist">
                                <a href="wishlist.html">
                                    <span class="cart-item-count wishlist-item-count">0</span>
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </li>
                            <!-- Header Middle Wishlist Area End Here -->
                            <!-- Begin Header Mini Cart Area -->
                            <li class="hm-minicart">
                                <div class="hm-minicart-trigger">
                                    <span class="item-icon"></span>
                                    <span class="item-text">160.000.000 đ
                                        <span class="cart-item-count">2</span>
                                    </span>
                                </div>
                                <span></span>
                                <div class="minicart">
                                    <ul class="minicart-product-list">
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="/images/product/small-size/3.jpg" alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                <span>£80 x 1</span>
                                            </div>
                                            <button class="close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="/images/product/small-size/4.jpg" alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                <span>£80 x 1</span>
                                            </div>
                                            <button class="close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </li>
                                    </ul>
                                    <p class="minicart-total">SUBTOTAL: <span>£160</span></p>
                                    <div class="minicart-button">
                                        <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                            <span>View Full Cart</span>
                                        </a>
                                        <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- Header Mini Cart Area End Here -->
                        </ul>
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu hb-menu-2 d-xl-block">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">Trang chủ</a></li>
                                <!-- <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="shop-left-sidebar.html">Shop Page Layout</a>
                                            <ul>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product-gallery-left.html">Single Product Style</a>
                                            <ul>
                                                <li><a href="single-product-carousel.html">Single Product Carousel</a></li>
                                                <li><a href="single-product-gallery-left.html">Single Product Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Single Product Gallery Right</a></li>
                                                <li><a href="single-product-tab-style-top.html">Single Product Tab Style Top</a></li>
                                                <li><a href="single-product-tab-style-left.html">Single Product Tab Style Left</a></li>
                                                <li><a href="single-product-tab-style-right.html">Single Product Tab Style Right</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product.html">Single Products</a>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a>
                                    <ul class="hb-dropdown">
                                        <li class="sub-dropdown-holder"><a href="blog-left-sidebar.html">Blog Grid View</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-list-left-sidebar.html">Blog List View</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-details-left-sidebar.html">Blog Details</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-gallery-format.html">Blog Format</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="megamenu-static-holder"><a href="index.html">Pages</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="blog-left-sidebar.html">Blog Layouts</a>
                                            <ul>
                                                <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>
                                            <ul>
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Other Pages</a>
                                            <ul>
                                                <li><a href="login-register.html">My Account</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Other Pages 2</a>
                                            <ul>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li> -->
                                <!-- Begin Header Bottom Menu Information Area -->
                                <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                    <span>CÔNG TY TNHH TM DV THIẾT BỊ ĐIỆN MẠNH TÙNG</span>
                                </li>
                                <!-- Header Bottom Menu Information Area End Here -->
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
        <div class="container">
            <div class="row">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End Here -->
</header>
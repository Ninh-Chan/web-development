<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/dest/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/vendors/colorbox/example3/colorbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/responsive.css')}}">
    <link rel="stylesheet" title="style" href="{{asset('assets/dest/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/css/animate.css')}}">
    <link rel="stylesheet" title="style" href="{{asset('assets/dest/css/huong-style.css')}}">
</head>
<body style="background-color: lightcyan">

<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i>Số 21A lê Thanh Nghị</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0933 213 212</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <li><a href="{{route('info')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li><a href="{{route('customers.register')}}}">Đăng kí</a></li>
                    <li><a href="{{route('customers.login')}}">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{route('home')}}" id="logo"><img src="{{asset('uploads/logo.png')}}" height="100px" width="150px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item">
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-caption">
                                <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="product_type.html">Sản phẩm 1</a></li>
                            <li><a href="product_type.html">Sản phẩm 2</a></li>
                            <li><a href="product_type.html">Sản phẩm 4</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="contacts.html">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
<div class="rev-slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer" >
                <div class="banner" >
                    <ul>
                        @foreach($slide as $sl)
                        <!-- THE FIRST SLIDE -->
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="uploads/slide/{{$sl->image}}" data-src="uploads/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('uploads/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($new_product as $new)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($new->promotion_price != 0)
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$new->image}}" alt="" width="200px" height="160px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$new->name}}</p>
                                            <p class="single-item-price">
                                                @if($new->promotion_price == 0)
                                                    <span class="flash-del">{{$new->price}}$</span>
                                                @else
                                                    <span class="flash-del">{{$new->price}}$</span>
                                                    <span class="flash-sale">{{$new->promotion_price}}$</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $new->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach($new_product as $new)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($new->promotion_price != 0)
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$new->image}}" alt="" width="200px" height="160px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$new->name}}</p>
                                            <p class="single-item-price">
                                                @if($new->promotion_price == 0)
                                                    <span class="flash-del">{{$new->price}}$</span>
                                                @else
                                                    <span class="flash-del">{{$new->price}}$</span>
                                                    <span class="flash-sale">{{$new->promotion_price}}$</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $new->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach($promotion_product as $pro)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$pro->image}}" alt="" width="150px" height="300px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$pro->name}}</p>
                                            <p class="single-item-price">
                                                <span class="flash-del">{{$pro->price}}$</span>
                                                <span class="flash-sale">{{$pro->promotion_price}}$</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $pro->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach($promotion_product as $pro)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$pro->image}}" alt="" width="150px" height="300px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$pro->name}}</p>
                                            <p class="single-item-price">
                                                <span class="flash-del">{{$pro->price}}$</span>
                                                <span class="flash-sale">{{$pro->promotion_price}}$</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $pro->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach($promotion_product as $pro)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$pro->image}}" alt="" width="150px" height="300px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$pro->name}}</p>
                                            <p class="single-item-price">
                                                <span class="flash-del">{{$pro->price}}$</span>
                                                <span class="flash-sale">{{$pro->promotion_price}}$</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $pro->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            {{$new_product ->links()}}
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phẩm Khuyến mại</h4>
                        <div class="row">
                            @foreach($new_product as $new)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($new->promotion_price != 0)
                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$new->image}}" alt="" width="200px" height="160px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$new->name}}</p>
                                            <p class="single-item-price">
                                                @if($new->promotion_price == 0)
                                                    <span class="flash-del">{{$new->price}}$</span>
                                                @else
                                                    <span class="flash-del">{{$new->price}}$</span>
                                                    <span class="flash-sale">{{$new->promotion_price}}$</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $new->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach($promotion_product as $pro)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="uploads/product/{{$pro->image}}" alt="" width="150px" height="300px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$pro->name}}</p>
                                            <p class="single-item-price">
                                                <span class="flash-del">{{$pro->price}}$</span>
                                                <span class="flash-sale">{{$pro->promotion_price}}$</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('product_detail', ['id' => $pro->id]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            {{$promotion_product->links()}}
                        </div>
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Instagram Feed</h4>
                    <div id="beta-instagram-feed"><div></div></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Information</h4>
                    <div>
                        <ul>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <p>21A Lê Thanh Nghị Phone: +84 123 456 78</p>
                                <p>Bạn muốn mua lego hãy đến chỗ chúng tôi. Chúng tôi đáp ứng đủ tất cả các nhu cầu của bạn mà không cần trả phí trừ mua hàng. OwO !!!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Hãy mua và Supscribe cho chúng tôi nha</h4>
                    <form action="#" method="post">
                        Nhập email của bạn
                        <input type="email" name="your_email">
                        <button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->

<!-- include js files -->
<script src="{{asset('assets/dest/js/jquery.js')}}"></script>
<script src="{{asset('assets/dest/css/font-awesome.min.css')}}assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('assets/dest/vendors/animo/Animo.js')}}"></script>
<script src="{{asset('assets/dest/vendors/dug/dug.js')}}"></script>
<script src="{{asset('assets/dest/js/scripts.min.js')}}"></script>
<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/dest/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/dest/js/wow.min.js')}}"></script>
<!--customjs-->
<script src="{{asset('assets/dest/js/custom2.js')}}"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
</script>
</body>
</html>

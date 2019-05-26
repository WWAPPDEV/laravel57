<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
        <?php $__env->startSection('title'); ?>
        | UnityMB
        <?php echo $__env->yieldSection(); ?>
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/lib.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/black.css')); ?>">
    <style>
      .dropdown-item:active{
            background-color: transparent !important;
        }
      .indexpage.navbar-nav >.nav-item .nav-link:hover {
          color: #01bc8c;
      }
    </style>
    <!--end of global css-
    <!--page level css-->
    <?php echo $__env->yieldContent('header_styles'); ?>
    <!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!--Icon Section Start-->
    <div class="icon-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-8 col-md-4 mt10">
                    <ul class="list-inline">
                        <li>
                            <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                            data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        </ul>
                </div>
                <div class="col-lg-8 col-4 col-md-8 text-right mt10">
                    <ul class="list-inline">
                        <li>
                            <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true"
                                                 data-c="#fff"
                                                 data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                    href="mailto:"
                                    class="text-white">info@joshadmin.com</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true"
                                              data-c="#fff"
                                              data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a href="tel:"
                                                                                                           class="text-white">(703)
                                717-4200</a></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container indexpage">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>"
                                                                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  margin_right">
                    <li  class="nav-item <?php echo (Request::is('/') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('home')); ?>" class="nav-link"> Home</a>
                    </li>
                    <li class=" nav-item dropdown  <?php echo (Request::is('typography') || Request::is('advancedfeatures') || Request::is('grid') ? 'active' : ''); ?>">
                        <a href="#" aria-expanded="false" class="nav-link"> Features</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(URL::to('typography')); ?>" class="dropdown-item">Typography</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('advancedfeatures')); ?>" class="dropdown-item">Advanced Features</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('grid')); ?>" class="dropdown-item">Grid System</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item dropdown <?php echo (Request::is('aboutus') || Request::is('timeline') || Request::is('faq') || Request::is('blank_page')  ? 'active' : ''); ?>">
                        <a href="#" class="nav-link"> Pages</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(URL::to('aboutus')); ?>" class="dropdown-item">About Us</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('timeline')); ?>" class="dropdown-item">Timeline</a></li>
                            <li><a href="<?php echo e(URL::to('price')); ?>" class="dropdown-item">Price</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('404')); ?>" class="dropdown-item">404 Error</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('500')); ?>" class="dropdown-item">500 Error</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('faq')); ?>" class="dropdown-item">FAQ</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('blank_page')); ?>" class="dropdown-item">Blank</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?php echo (Request::is('products') || Request::is('single_product') || Request::is('compareproducts') || Request::is('category')  ? 'active' : ''); ?>">
                        <a href="#" class="nav-link"> Shop</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(URL::to('products')); ?>" class="dropdown-item">Products</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('single_product')); ?>" class="dropdown-item">Single Product</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('compareproducts')); ?>" class="dropdown-item">Compare Products</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('category')); ?>"  class="dropdown-item">Categories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown <?php echo (Request::is('portfolio') || Request::is('portfolioitem') ? 'active' : ''); ?>">
                        <a href="#" class="nav-link"> Portfolio</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(URL::to('portfolio')); ?>">Portfolio</a>
                            </li>
                            <li><a href="<?php echo e(URL::to('portfolioitem')); ?>">Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <?php if(Sentinel::check()): ?>
                    <li class=" nav-item dropdown <?php echo (Request::is('user_emails/inbox') || Request::is('user_emails/compose') || Request::is('user_emails/sent') ? 'active' : ''); ?>">
                        <a href="#" aria-expanded="false" class="nav-link"> Emails</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(URL::to('user_emails/compose')); ?>" class="dropdown-item">Compose</a>
                            </li>
                            <li>
                                <a href="<?php echo e(URL::to('user_emails/inbox')); ?>" class="dropdown-item">Inbox</a>
                            </li>
                            <li>
                                <a href="<?php echo e(URL::to('user_emails/sent')); ?>" class="dropdown-item">Sent</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                    <li class="nav-item <?php echo (Request::is(
                    'news*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('news')); ?>" class="nav-link">News</a>
                    </li>
                    <li class="nav-item <?php echo (Request::is(
                    'blog') || Request::is('blogitem/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('blog')); ?>" class="nav-link">
                    Blog</a>
                    </li>
                    <li class="nav-item <?php echo (Request::is(
                    'contact') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('contact')); ?>" class="nav-link">Contact</a>
                    </li>

                    
                    <?php if(Sentinel::guest()): ?>
                    <li class="nav-item"><a href="<?php echo e(URL::to('login')); ?>" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo e(URL::to('register')); ?>" class="nav-link">Register</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item <?php echo e((Request::is('my-account') ? 'active' : '')); ?>"><a href="<?php echo e(URL::to('my-account')); ?>" class="nav-link">My
                        Account</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo e(URL::to('logout')); ?>" class="nav-link">Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </div>
</header>

<!-- //Header End -->

<!-- slider / breadcrumbs section -->
<?php echo $__env->yieldContent('top'); ?>

<!-- Content -->
<?php echo $__env->yieldContent('content'); ?>

<!-- Footer Section Start -->
<footer>
    <div class=" container">
        <div class="footer-text">
            <!-- About Us Section Start -->
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                    <h4>About Us</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industryzzzz's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <hr id="hr_border2">
                    <h4 class="menu">Follow Us</h4>
                    <ul class="list-inline mb-2">
                        <li>
                            <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //About us Section End -->
                <!-- Contact Section Start -->
                <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                    <h4>Contact Us</h4>
                    <ul class="list-unstyled">
                        <li>35,Lorem Lis Street, Park Ave</li>
                        <li>Lis Street, India.</li>
                        <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true"
                               data-c="#ccc" data-hc="#ccc"></i>Phone:9140 123 4588
                        </li>
                        <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true"
                               data-c="#ccc" data-hc="#ccc"></i> Fax:400 423 1456
                        </li>
                        <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc"
                               data-hc="#ccc"></i> Email:<span class="text-success" style="cursor: pointer;">
                        info@joshadmin.com</span>
                        </li>
                        <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true"
                               data-c="#ccc" data-hc="#ccc"></i> Skype:
                            <span class="text-success" style="cursor: pointer;">Joshadmin</span>
                        </li>
                    </ul>
                    <hr id="hr_border">
                    <div class="news menu">
                        <h4>News letter</h4>
                        <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="yourmail@mail.com"
                                   aria-describedby="basic-addon2">
                            <a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>
                        </div>
                    </div>
                </div>
                <!-- //Contact Section End -->
                <!-- Recent post Section Start -->
                <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                    <h4>Recent Posts</h4>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="<?php echo e(asset('images/image_14.jpg')); ?>"
                             alt="image">
                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Sam Bellows</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="<?php echo e(asset('images/image_15.jpg')); ?>"
                             alt="image">

                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Emilly Barbosa Cunha</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="<?php echo e(asset('images/image_13.jpg')); ?>"
                             alt="image">
                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Sinikka Oramo</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="<?php echo e(asset('images/c1.jpg')); ?>"
                             alt="image">

                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Samsa Parras</i></p>
                        </div>
                    </div>
                    <!-- //Recent Post Section End -->
                </div>
            </div>
        </div>
    </div>
<!-- //Footer Section End -->
<div class=" col-12 copyright">
    <div class="container">
        <p>Copyright &copy; Josh Admin Template, 2017</p>
    </div>
</div>
</footer>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-original-title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>



<!--global js starts-->
<script type="text/javascript" src="<?php echo e(asset('js/frontend/lib.js')); ?>"></script>
<!--global js end-->
<!-- begin page level js -->
<?php echo $__env->yieldContent('footer_scripts'); ?>
<!-- end page level js -->
<script>
    $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
</script>
</body>

</html>

<?php

/* ::base.html.twig */
class __TwigTemplate_b976f460ddc8cffce8c268c3ece254eda36ce735938fecf191e7a5d3301c746c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de9de7d1c2533e5fe28609de5c5767bb01d1304229808f37d4d278891f8baee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de9de7d1c2533e5fe28609de5c5767bb01d1304229808f37d4d278891f8baee->enter($__internal_2de9de7d1c2533e5fe28609de5c5767bb01d1304229808f37d4d278891f8baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7693338e5104739ec79bf33a8324a6bcea7247ed4ce9bfe198f3a0a8b220e2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7693338e5104739ec79bf33a8324a6bcea7247ed4ce9bfe198f3a0a8b220e2fd->enter($__internal_7693338e5104739ec79bf33a8324a6bcea7247ed4ce9bfe198f3a0a8b220e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class=\"not-ie\" lang=\"en\"> <!--<![endif]-->

<!-- Mirrored from www.entiri.net/troy/1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2017 21:44:15 GMT -->
<head>
    <!-- Basic Meta Tags -->
    <meta charset=\"utf-8\">
    <title>KARHBTY</title>
    <meta name=\"description\" content=\"your description\">
    <meta name=\"keywords\" content=\"your keywords\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\">
    <!-- Bootstrap style -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Font Awesome Style -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Animate Style -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/animate.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" media=\"screen\" />
    <!-- Lightbox -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Flexslider Style -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Style css -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Components css -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Color style css -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/color/color-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" id=\"color\" />
    <!-- Responsive css -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/css/extralayers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'>
    <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"/http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <!-- Modernizr js -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/modernizr.js"), "html", null, true);
        echo "\"></script>
</head>
";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 1336
        echo "<footer class=\"footer\">  <!-- footer -->
    <div class=\"footer-top\">
        <div class=\"footer-top-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>Hot</h4>
                        <ul class=\"list-2\">
                            <li><a href=\"#\">Timeline</a></li>
                            <li><a href=\"#\">Messages</a></li>
                            <li><a href=\"#\">Statistics</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Log in</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>Services</h4>
                        <ul class=\"list-2\">
                            <li><a href=\"#\">Timeline</a></li>
                            <li><a href=\"#\">Messages</a></li>
                            <li><a href=\"#\">Statistics</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Log in</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>About us</h4>
                        <ul class=\"list-2\">
                            <li><a href=\"#\">Timeline</a></li>
                            <li><a href=\"#\">Messages</a></li>
                            <li><a href=\"#\">Statistics</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Log in</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>Follow us</h4>
                        <ul class=\"colored-social-icons-2\">
                            <li><a href=\"#\" rel=\"external\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"dribbble\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                        </ul>
                        <div class=\"spacer25\"></div>
                        <h4>Subscribe</h4>
                        <form role=\"form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control footer-form-control\" placeholder=\"E-mail\">
                                <span class=\"input-group-addon\">
                    <button class=\"btn btn-default\" type=\"button\"> <i class=\"fa fa-angle-right\"></i> </button>
                  </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"footer-bottom-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h4>Info</h4>
                        <p>Nullam sagittis. Quisque id odio. Curabitur nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Fusce egestas elit eget lorem.</p>
                        <div class=\"spacer50\"></div>
                        <div class=\"spacer1\"></div>
                        <p>&copy; TROY. 2014 - Created by <a href=\"#\">entiri</a>.</p>
                    </div>
                    <div class=\"col-sm-3\">
                        <h4>Address</h4>
                        <ul class=\"list-3\">
                            <li>920 Reserve Dr. Suite 140</li>
                            <li>Roseville, CA 95678</li>
                            <li>&nbsp;</li>
                            <li>(415) 496-9612</li>
                            <li>&nbsp;</li>
                            <li><a href=\"mailto:info@domain.com\">info@domain.com</a></li>
                        </ul>

                    </div>
                    <div class=\"col-sm-3\">
                        <h4>Contact</h4>
                        <ul class=\"list-3\">
                            <li>(415) 496-9612</li>
                            <li>(415) 496-9613</li>
                            <li>(415) 496-9614</li>
                        </ul>
                        <div class=\"spacer15\"></div>
                        <a class=\"btn btn-default\" href=\"mailto:email@example.com\" role=\"button\">Email us</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer> <!-- Footer ends -->
<a href=\"#\" class=\"back-to-top\"><span></span></a>

<script src=\"";
        // line 1438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/retina.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/ion.rangeSlider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/selectnav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/js/functions.js"), "html", null, true);
        echo "\"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type=\"text/javascript\" src=\"";
        // line 1458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/rs-plugin/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

    jQuery(document).ready(function() {



        jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay:\"none\",
                    delay:16000,
                    startwidth:1920,
                    startheight:800,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,

                    navigationType:\"none\",
                    navigationArrows:\"solo\",
                    navigationStyle:\"preview1\",

                    touchenabled:\"on\",
                    onHoverStop:\"off\",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax:\"mouse\",
                    parallaxBgFreeze:\"on\",
                    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                    keyboardNavigation:\"off\",

                    navigationHAlign:\"center\",
                    navigationVAlign:\"bottom\",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:\"left\",
                    soloArrowLeftValign:\"center\",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:\"right\",
                    soloArrowRightValign:\"center\",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:\"on\",
                    fullScreen:\"off\",

                    spinner:\"spinner4\",

                    stopLoop:\"off\",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:\"off\",

                    autoHeight:\"off\",
                    forceFullWidth:\"off\",



                    hideThumbsOnMobile:\"off\",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:\"off\",
                    hideArrowsOnMobile:\"off\",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0,
                    videoJsPath:\"rs-plugin/videojs/\",
                    fullScreenOffsetContainer: \"\"
                });




    });\t//ready

</script>

</body>

<!-- Mirrored from www.entiri.net/troy/1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2017 21:50:30 GMT -->
</html>";
        
        $__internal_2de9de7d1c2533e5fe28609de5c5767bb01d1304229808f37d4d278891f8baee->leave($__internal_2de9de7d1c2533e5fe28609de5c5767bb01d1304229808f37d4d278891f8baee_prof);

        
        $__internal_7693338e5104739ec79bf33a8324a6bcea7247ed4ce9bfe198f3a0a8b220e2fd->leave($__internal_7693338e5104739ec79bf33a8324a6bcea7247ed4ce9bfe198f3a0a8b220e2fd_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_82a2c568e8f29f940c2f32de01fd55257ebc8a237724ad3ba51511c732c018ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a2c568e8f29f940c2f32de01fd55257ebc8a237724ad3ba51511c732c018ed->enter($__internal_82a2c568e8f29f940c2f32de01fd55257ebc8a237724ad3ba51511c732c018ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac98d7769a4533cb255f01d95b2f66d015db52f625e252ab8959a3e2f0c60bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac98d7769a4533cb255f01d95b2f66d015db52f625e252ab8959a3e2f0c60bbe->enter($__internal_ac98d7769a4533cb255f01d95b2f66d015db52f625e252ab8959a3e2f0c60bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "<body>

<div class=\"color-picker\">
    <a href=\"#\" class=\"handle\"><i class=\"fa fa-cog\"></i></a>
    <div class=\"settings-header\">
        <h3>Setting panel</h3>
    </div>
    <div class=\"section\">
        <h4 class=\"color\"><i class=\"icon-tint\"></i> Color schemes:</h4>
        <div class=\"colors\">
            <a href=\"#\" class=\"color-1\" ></a>
            <a href=\"#\" class=\"color-2\" ></a>
            <a href=\"#\" class=\"color-3\" ></a>
            <a href=\"#\" class=\"color-4\" ></a>
            <a href=\"#\" class=\"color-5\" ></a>
        </div>
    </div>
</div>

<div id=\"loading-wrap\">
    <div id=\"loading\">
        <i class=\"fa fa-cog fa-spin\"></i>
    </div>
</div>

<header class=\"home-header\"> <!-- header -->

    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-inner\">
                <!-- logo-->
                <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"Home\" class=\"logo pull-left\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                <!-- logo ends -->

                <!-- Menu -->
                <ul class=\"nav pull-left\" id=\"nav\">
                    <li class=\"selected\"><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"\">Home</a></li>
                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Annonces");
        echo "\" title=\"\">Catalog</a>

                    </li>
                    <li><a href=\"components.html\" title=\"\">Pages</a>
                        <!-- sub menu -->
                        <ul>
                            <li><a href=\"components.html\" title=\"\">Components</a></li>
                            <li><a href=\"about-us.html\" title=\"\">About us</a></li>
                            <li><a href=\"services.html\" title=\"\">Services</a></li>
                            <li><a href=\"gallery-4.html\" title=\"\">Gallery</a>
                                <!-- sub sub menu -->
                                <ul>
                                    <li><a href=\"gallery-4.html\" title=\"\">Gallery 4 columns</a></li>
                                    <li><a href=\"gallery-3.html\" title=\"\">Gallery 3 columns</a></li>
                                    <li><a href=\"gallery-2.html\" title=\"\">Gallery 2 columns</a></li>
                                </ul>
                                <!-- sub sub menu ends -->
                            </li>
                        </ul>
                        <!-- sub menu ends -->
                    </li>
                    <li><a href=\"shop-right.html\" title=\"\">Shop</a>
                        <ul>
                            <li><a href=\"shop-right.html\">Right sidebar</a></li>
                            <li><a href=\"shop-left.html\">Left sidebar</a></li>
                            <li><a href=\"shop.html\">Without sidebar</a></li>
                            <li><a href=\"shop-product-detail.html\">Shop Product detail</a></li>
                            <li><a href=\"shop-cart.html\">Cart</a></li>
                            <li><a href=\"shop-checkout.html\">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog-right.html\" title=\"\">Blog</a>
                        <ul>
                            <li><a href=\"blog-right.html\">Right sidebar</a></li>
                            <li><a href=\"blog-left.html\">Left sidebar</a></li>
                            <li><a href=\"blog.html\">Without sidebar</a></li>
                            <li><a href=\"blog-masonry.html\">Blog masonry</a></li>
                            <li><a href=\"blog-detail.html\">Blog detail</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\" title=\"\">contact</a></li>
                </ul>
                <!-- Menu ends -->
                <div class=\"menu-right-bar\">
                    <ul class=\"menu-right-bar-ul\">
                        <li class=\"text hidden-sm hidden-xs\">1-800-555-6789</li>
                        <li><a href=\"shop-cart.html\" class=\"button btn btn-primary\" role=\"button\"><i class=\"fa fa-shopping-cart\"></i> (2)</a></li>
                        ";
        // line 133
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 134
            echo "                            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                            -
                            <a href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                        ";
        } else {
            // line 138
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 139
        echo "                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"singInForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    <h3 class=\"modal-title\" id=\"myModalLabel\">Please Sing Up</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"login-name\" class=\"control-label\">Login name:</label>
                        <input type=\"text\" class=\"form-control\" id=\"login-name\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"control-label\">Password:</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                     <button type=\"button\" class=\"btn btn-primary\"><a href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Log in</a></button>
                </div>
            </div>
        </div>
    </div>


    <div class=\"tp-banner-container main-slider\">
        <div class=\"tp-banner\" >
            <ul>
                <!-- SLIDE  -->
                <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1500\" data-thumb=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-main/1.jpg"), "html", null, true);
        echo "\" data-delay=\"8000\"  data-saveperformance=\"off\"  data-title=\"Our Workplace\">
                    <!-- MAIN IMAGE -->
                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-main/1.jpg"), "html", null, true);
        echo "\"  alt=\"kenburns1\"  data-bgposition=\"left center\" data-kenburns=\"on\" data-duration=\"9000\" data-ease=\"Linear.easeNone\" data-bgfit=\"100\" data-bgfitend=\"130\" data-bgpositionend=\"right center\">
                    <!-- LAYERS -->

                    <div class=\"caption tp-resizeme skewfromrightshort big-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"-70\"
                         data-speed=\"500\"
                         data-start=\"500\"
                         data-easing=\"easeOutExpo\"
                         data-splitin=\"chars\"
                         data-splitout=\"none\"
                         data-elementdelay=\"0.1\"
                         data-endelementdelay=\"0.1\"
                    >Troy Presents
                    </div>


                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"0\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Ultra Responsive Design
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"50\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Lot of Shortcodes
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"100\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Retina Ready
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"150\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Color Styles
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"200\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Premium Support
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"250\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Shop elements
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition=\"slidedown\" data-slotamount=\"1\" data-masterspeed=\"1500\" data-thumb=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-main/2.jpg"), "html", null, true);
        echo "\" data-delay=\"8000\"  data-saveperformance=\"off\"  data-title=\"New York City\">
                    <!-- MAIN IMAGE -->
                    <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-main/2.jpg"), "html", null, true);
        echo "\"  alt=\"kenburns6\"  data-bgposition=\"center top\" data-kenburns=\"on\" data-duration=\"9000\" data-ease=\"Linear.easeNone\" data-bgfit=\"110\" data-bgfitend=\"100\" data-bgpositionend=\"center center\">
                    <!-- LAYERS -->
                    <div class=\"caption tp-resizeme skewfromrightshort big-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"-70\"
                         data-speed=\"500\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\"
                         data-splitin=\"chars\"
                         data-splitout=\"none\"
                         data-elementdelay=\"0.1\"
                         data-endelementdelay=\"0.1\"
                    >MERCEDES
                    </div>


                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"0\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >6.5l engine
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"50\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >120 000km
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"100\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >250 mph
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout medium-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"150\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Only: <strong>155 000\$</strong>
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption-2\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"220\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    ><a href=\"product-detail.html\" class=\"btn btn-default btn-lg\" role=\"button\">See details</a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition=\"slideleft\" data-slotamount=\"1\" data-masterspeed=\"1500\" data-thumb=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-main/3.jpg"), "html", null, true);
        echo "\" data-delay=\"8000\"  data-saveperformance=\"off\"  data-title=\"Nerd Wisdom\">
                    <!-- MAIN IMAGE -->
                    <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-main/3.jpg"), "html", null, true);
        echo "\"  alt=\"kenburns3\"  data-bgposition=\"left top\" data-kenburns=\"on\" data-duration=\"9000\" data-ease=\"Linear.easeNone\" data-bgfit=\"130\" data-bgfitend=\"100\" data-bgpositionend=\"right bottom\">
                    <!-- LAYERS -->
                    <div class=\"caption tp-resizeme skewfromrightshort big-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"-70\"
                         data-speed=\"500\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\"
                         data-splitin=\"chars\"
                         data-splitout=\"none\"
                         data-elementdelay=\"0.1\"
                         data-endelementdelay=\"0.1\"
                    >NISSAN GTR
                    </div>


                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"0\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >6.5l engine
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"50\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >100 000km
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"100\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >250 mph
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout medium-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"150\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Only: <strong>555 000\$</strong>
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption-2\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"220\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    ><a href=\"product-detail.html\" class=\"btn btn-default btn-lg\" role=\"button\">See details</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</header>



<section> <!-- section -->
    <div class=\"promo-video-container alert fade in\">
        <div class=\"promo-video\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <span class=\"promo-video-text\">Play our promotion video and learn more</span>
                        <a href=\"https://www.youtube.com/watch?v=pCspLo74BI8\"  class=\"popup-youtube promo-video-link\" rel=\"external\"><i class=\"fa fa-play\"></i></a>
                        <span class=\"promo-video-text\">You can make the world a better place</span>

                    </div>
                </div>
            </div>
        </div>
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">x</a>
    </div>


    <div class=\"f-bg big-search-container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"big-search-heading\">Popular searches: <span class=\"theme-color\">Autosalon, Automobile, Car</span></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                    <form role=\"form\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Search</span>
                            <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Type and hit enter...\">
                            <span class=\"input-group-addon\">
                <button class=\"btn btn-default btn-lg\" type=\"button\"><i class=\"fa fa-search\"></i></button>
              </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"spacer30\"></div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p><a href=\"#\" id=\"advanced-serach-container-button\" class=\"advanced-serach-container-button\">Advanced search.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-bg advanced-search-container\" id=\"advanced-search-container\">
        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <form role=\"form\" class=\"form-dark\">

                        <div class=\"row\">
                            <div class=\"form-group col-sm-3\">
                                <label for=\"a0\">Country</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Austria</option>
                                    <option>Germany</option>
                                    <option>Spain</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"a1\">State</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a1\"  data-style=\"btn-primary btn-lg\" disabled>
                                    <option>All</option>
                                    <option>Salzburg (2)</option>
                                    <option>Vienna (1)</option>
                                    <option>Tyrol (3)</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"a2\">City</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a2\" data-style=\"btn-primary btn-lg\" disabled>
                                    <option>All</option>
                                    <option>Salzburg (2)</option>
                                    <option>Vienna (1)</option>
                                    <option>Tyrol (3)</option>
                                </select>
                            </div>
                            <div class=\"form-group col-sm-3\">
                                <label for=\"a3\">Condition</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a3\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Only new cars</option>
                                    <option>Only used cars</option>
                                </select>
                            </div>



                        </div>

                        <div class=\"row\">

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b0\">Brand</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"b0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>BMW</option>
                                    <option>Audi</option>
                                    <option>Mazda</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b1\">Model</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"b1\" disabled data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Seria 1</option>
                                    <option>Seria 3</option>
                                    <option>Seria 5</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b2\">Price from</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"b2\" placeholder=\"\$\">
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b3\">Price to</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"b3\" placeholder=\"\$\">
                            </div>

                        </div>

                        <div class=\"row\">

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c0\">Year from</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"c0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>1990</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c1\">Year to</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"c1\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c2\">Mileage from</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"c2\" placeholder=\"0\">
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c3\">Mileage to</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"c3\" placeholder=\"0\">
                            </div>

                        </div>


                        <div class=\"row\">

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d0\">Fuel type</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Diesel</option>
                                    <option>Petrol</option>
                                    <option>Gas (LPG)</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d1\">Gearbox</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d1\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Automatic</option>
                                    <option>Manula</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d2\">Body type</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d2\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Sedan</option>
                                    <option>Hatchback</option>
                                    <option>SUV</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d3\">Doors</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d3\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>


                        <div class=\"spacer20\"></div>
                        <div class=\"row\">

                            <div class=\"col-sm-2 col-sm-offset-5\">
                                <button type=\"submit\" class=\"btn btn-default btn-lg btn-big-border col-xs-12\">Submit</button>
                            </div>




                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>


    <div class=\"spacer60\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">

                <div class=\"r-bg\">
                    <div class=\"widget\">
                        <h3 class=\"big\">Price range</h3>
                        <input type=\"text\" id=\"car_price\" name=\"example_name\" value=\"\" />
                        <h4>Popular cars</h4>
                        <ul class=\"list-1\">
                            <li><a href=\"#\">Honda CRX</a></li>
                            <li><a href=\"#\">Toyota MX5</a></li>
                            <li><a href=\"#\">BMW X5</a></li>
                            <li><a href=\"#\">Porsche 911</a></li>
                        </ul>
                    </div>
                    <div class=\"widget\">
                        <h4>Latest comments</h4>
                        <ul class=\"list-1\">
                            <li>Entiri on <a href=\"#\">Honda CRX</a></li>
                            <li>John Doe on <a href=\"#\">Toyota MX5</a></li>
                            <li>Samantha on <a href=\"#\">BMW X5</a></li>
                        </ul>
                    </div>
                </div>






                <div class=\"r-bg\">
                    <div class=\"widget\">
                        <h3 class=\"big\"><i class=\"fa fa-calculator\"></i> Loan calculator</h3>
                        <form role=\"form\">

                            <div class=\"row\">
                                <div class=\"form-group form-group-small col-xs-12\">
                                    <label for=\"loan0\" class=\"label-small\">Loan Amount (\$)</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan0\" placeholder=\"\$\" value=\"2400\">
                                </div>
                                <div class=\"form-group form-group-small col-xs-12\">
                                    <label for=\"loan1\" class=\"label-small\">Annual Interest Rate (%)</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan1\" placeholder=\"\" value=\"4.5\">
                                </div>
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                    <label for=\"loan2\" class=\"label-small\">Term of Loan</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan2\" placeholder=\"4 years\" value=\"4\">
                                </div>
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                    <label for=\"loan3\" class=\"label-small\">Payments</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan3\" placeholder=\"48\" value=\"48\" disabled>
                                </div>
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-12\">
                                    <label for=\"loan4\" class=\"label-small\">Monthly payment (\$)</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan4\" placeholder=\"\" value=\"125\" disabled>
                                </div>
                            </div>
                            <div class=\"spacer10\"></div>
                            <div class=\"row\">
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-12\">
                                    <button class=\"btn btn-default col-xs-12\" type=\"button\">Calculate</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


                <div class=\"r-bg\">
                    <div class=\"widget\">
                        <h3>Recent news</h3>
                        <ul class=\"news-box-ul\">
                            <li>
                <span class=\"image\">
                  <img src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/latest-blog/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </span>
                                <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"blog-detail.html\">The journey of the Beatles</a>
                </span>
                                    <span class=\"text\">by Yino Huan</span>
                                </div>
                            </li>
                            <li>
                <span class=\"image\">
                  <img src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/latest-blog/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </span>
                                <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"blog-detail.html\">The journey of the Beatles</a>
                </span>
                                    <span class=\"text\">by Yino Huan</span>
                                </div>
                            </li>
                            <li>
                <span class=\"image\">
                  <img src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/latest-blog/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </span>
                                <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"blog-detail.html\">The journey of the Beatles</a>
                </span>
                                    <span class=\"text\">by Yino Huan</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class=\"col-sm-8\">
                <div class=\"r-bg\">
                    <h3>Search results</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"search-result-heading\">
                                <div class=\"search-result form-group pull-left\">
                                    <select class=\"form-control selectpicker\" id=\"sel1\" data-style=\"btn-default\">
                                        <option>Price (Low to High)</option>
                                        <option>Price (Hight to Low)</option>
                                        <option>Name (A to Z)</option>
                                        <option>Name (Z to A)</option>
                                    </select>
                                </div>
                                <div class=\"btn-group\">
                                    <a href=\"#\" id=\"grid-view\" class=\"btn btn-default active\"><i class=\"fa fa-th i-margin\"></i></a>
                                    <a href=\"#\" id=\"list-view\" class=\"btn btn-default \"><i class=\"fa fa-list i-margin\"></i></a>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div id=\"products\" class=\"row\">
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 0 km</li>
                                        <li><strong>Condition:</strong> new</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 849
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 921
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">Toyota</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">Seat Toledo</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"";
        // line 996
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/car/9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">Fiat Punto</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class=\"spacer20\"></div>
                <div class=\"row\">

                    <div class=\"col-xs-12\">
                        <ul class=\"pagination\">
                            <li><a href=\"#\"><i class=\"fa fa-angle-left\"></i> Back</a></li>
                            <li class=\"active\"><a href=\"#\">1</a></li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">...</a></li>
                            <li><a href=\"#\">998</a></li>
                            <li><a href=\"#\">999</a></li>
                            <li><a href=\"#\">Next <i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>




        </div>
    </div>
    <div class=\"spacer60\"></div>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"full-tabs\">

                <!-- Navigation Buttons -->
                <div class=\"col-xs-4 col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"myTabs\">
                        <li class=\"active\"><a href=\"";
        // line 1057
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                        <li><a href=\"#profile\">Profile</a></li>
                        <li><a href=\"#messages\">Messages</a></li>
                        <li><a href=\"#messages1\">Style</a></li>
                    </ul>
                </div>

                <!-- Content -->
                <div class=\"col-xs-8 col-sm-9\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"home\">
                            <div class=\"overlay\">
                                <div class=\"title\">Vestibulum Primis</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"profile\">
                            <div class=\"overlay\">
                                <div class=\"title\">Porsche GTX</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"messages\">
                            <div class=\"overlay\">
                                <div class=\"title\">Mazda MX5</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"messages1\">
                            <div class=\"overlay\">
                                <div class=\"title\">Ford Mustang GT</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- /row -->
    </div>

    <div class=\"spacer40\"></div>


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"news-box\">
                    <img src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/blog-detail/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"table-cont\">
                            <div class=\"table-cell\">
                                <h4>Donec posuere</h4>
                                <p class=\"hidden-sm hidden-xs\">At first, for some time,<br> I was not able to answer<br> him one word; but as...</p>
                                <a class=\"btn btn-warning\" role=\"button\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"news-box\">
                    <img src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/blog-detail/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"table-cont\">
                            <div class=\"table-cell\">
                                <h4>Donec posuere</h4>
                                <p class=\"hidden-sm hidden-xs\">At first, for some time,<br> I was not able to answer<br> him one word; but as...</p>
                                <a class=\"btn btn-warning\" role=\"button\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"news-box\">
                    <img src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/blog-detail/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"table-cont\">
                            <div class=\"table-cell\">
                                <h4>Donec posuere</h4>
                                <p class=\"hidden-sm hidden-xs\">At first, for some time,<br> I was not able to answer<br> him one word; but as...</p>
                                <a class=\"btn btn-warning\" role=\"button\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"r-bg\">
                    <h3 class=\"big\">Categories</h3>
                    <h4>New cars</h4>
                    <ul class=\"list-1\">
                        <li><a href=\"#\">Honda CRX</a></li>
                        <li><a href=\"#\">Toyota MX5</a></li>
                        <li><a href=\"#\">Brand old car</a></li>
                        <li><a href=\"#\">Porsche 911</a></li>
                    </ul>
                    <h4>Old cars</h4>
                    <ul class=\"list-1\">
                        <li><a href=\"#\">Honda CRX</a></li>
                        <li><a href=\"#\">Toyota MX5</a></li>
                        <li><a href=\"#\">Brand old car</a></li>
                        <li><a href=\"#\">Porsche 911</a></li>
                        <li><a href=\"#\">Audi TT</a></li>
                        <li><a href=\"#\">Mazda</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"r-bg\">
                    <h3 class=\"big\">Offer</h3>
                    <form role=\"form\" class=\"form-left\">

                        <div class=\"form-group col-sm-6\">
                            <label for=\"name1\">Name</label>
                            <input type=\"text\" class=\"form-control input-lg\" id=\"name1\" placeholder=\"Enter name\">
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <label for=\"email1\">E-mail</label>
                            <input type=\"email\" class=\"form-control input-lg\" id=\"email1\" placeholder=\"Enter e-mail\">
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <label for=\"subject1\">Subject</label>
                            <input type=\"text\" class=\"form-control input-lg\" id=\"subject1\" placeholder=\"Enter subject\">
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <label for=\"select1\">Price range</label>
                            <select class=\"form-control input-lg selectpicker\" id=\"select1\"   data-style=\"btn-default btn-lg\">
                                <option>\$100 - \$5.000</option>
                                <option>\$5.001 - \$10.000</option>
                                <option>\$10.001 - \$15.000</option>
                                <option>\$15.001 - \$20.000</option>
                                <option>\$20.001 - \$25.000</option>
                            </select>
                        </div>
                        <div class=\"form-group col-sm-12\">
                            <label for=\"message2\">Message</label>
                            <textarea class=\"form-control\" id=\"message2\" name=\"messag2\" onblur=\"if(this.value == '') this.value='Message'\" onfocus=\"if(this.value == 'Message') this.value=''\">Message</textarea>
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Send me a copy
                                </label>
                            </div>
                        </div>

                        <div class=\"form-group col-sm-6 text-right\">
                            <button type=\"submit\" class=\"btn btn-default btn-lg\">Submit</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>








    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <ul class=\"nav nav-tabs responsive\" id=\"myTab1\">
                    <li class=\"active\"><a href=\"#first0\" data-toggle=\"tab\">Categories</a></li>
                    <li><a href=\"#profile0\" data-toggle=\"tab\">Featured</a></li>
                    <li><a href=\"#messages0\" data-toggle=\"tab\">Locations</a></li>
                </ul>
                <div class=\"tab-content  responsive\" id=\"myTabContent\">
                    <div class=\"tab-pane fade in active\" id=\"first0\"><p><img src=\"";
        // line 1243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/mockup/1.jpg"), "html", null, true);
        echo "\" class=\"img-left thumbnail\" alt=\"\">Venim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p><p>Venim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. runch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        <div class=\"share-box-container text-right\">
                            <a class=\"share-box\"><span class=\"like\"><i class=\"fa fa-heart\"></i>Like</span></a>
                            <a class=\"share-box\"><span class=\"respond\"><i class=\"fa fa-comment\"></i>Respond</span></a>
                            <a class=\"share-box\"><span class=\"share\"><i class=\"fa fa-share-alt\"></i>Share</span></a>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"profile0\"><img src=\"";
        // line 1250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/mockup/2.jpg"), "html", null, true);
        echo "\" class=\"img-right thumbnail\" alt=\"\">Eprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</div>
                    <div class=\"tab-pane fade\" id=\"messages0\">Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"clasic-slider flexslider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"caption\">
                                <div class=\"table-cont\">
                                    <div class=\"table-cell\">
                                        <h2>Mazda MX5</h2>
                                        <p>used, 6.5l, 300 000 km, manual.</p>
                                        <p>Only: <strong>\$25.000</strong></p>
                                        <a href=\"#\" class=\"btn btn-warning btn-lg margin-top-10\" role=\"button\">See details</a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 1273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-content/1.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>
                        </li>
                        <li>
                            <div class=\"caption\">
                                <div class=\"table-cont\">
                                    <div class=\"table-cell\">
                                        <h2>Audi TT</h2>
                                        <p>used, 6.5l, 300 000 km, manual.</p>
                                        <p>Only: <strong>\$25.000</strong></p>
                                        <a href=\"#\" class=\"btn btn-default btn-lg margin-top-10\" role=\"button\">See details</a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 1286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-content/2.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>
                        </li>
                        <li>
                            <div class=\"caption\">
                                <div class=\"table-cont\">
                                    <div class=\"table-cell\">
                                        <h2>Honda</h2>
                                        <p>used, 6.5l, 300 000 km, manual.</p>
                                        <p>Only: <strong>\$25.000</strong></p>
                                        <a href=\"#\" class=\"btn btn-danger btn-lg margin-top-10\" role=\"button\">See details</a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 1299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/slider-content/3.jpg"), "html", null, true);
        echo "\"  alt=\"\"/>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>




    <div class=\"spacer60\"></div>


    <div class=\"promo-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-10 col-sm-offset-1 col-xs-12\">
                    <form role=\"form\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon white hidden-xs\">Subscribe to our newsletter</span>
                            <input type=\"text\" class=\"form-control white input-lg\" placeholder=\"E-mail\">
                            <span class=\"input-group-addon\">
                <button class=\"btn btn-inverted btn-lg text-right\" type=\"button\">Subscribe</button>
              </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section> <!-- section ends -->

";
        
        $__internal_ac98d7769a4533cb255f01d95b2f66d015db52f625e252ab8959a3e2f0c60bbe->leave($__internal_ac98d7769a4533cb255f01d95b2f66d015db52f625e252ab8959a3e2f0c60bbe_prof);

        
        $__internal_82a2c568e8f29f940c2f32de01fd55257ebc8a237724ad3ba51511c732c018ed->leave($__internal_82a2c568e8f29f940c2f32de01fd55257ebc8a237724ad3ba51511c732c018ed_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1777 => 1299,  1761 => 1286,  1745 => 1273,  1719 => 1250,  1709 => 1243,  1597 => 1134,  1580 => 1120,  1563 => 1106,  1511 => 1057,  1447 => 996,  1419 => 971,  1391 => 946,  1363 => 921,  1336 => 897,  1309 => 873,  1282 => 849,  1255 => 825,  1228 => 801,  1181 => 757,  1167 => 746,  1153 => 735,  756 => 341,  751 => 339,  674 => 265,  669 => 263,  580 => 177,  575 => 175,  561 => 164,  534 => 139,  528 => 138,  523 => 136,  517 => 134,  515 => 133,  505 => 126,  462 => 86,  458 => 85,  448 => 80,  415 => 49,  406 => 48,  301 => 1459,  297 => 1458,  292 => 1456,  288 => 1455,  284 => 1454,  280 => 1453,  276 => 1452,  272 => 1451,  268 => 1450,  264 => 1449,  260 => 1448,  256 => 1447,  252 => 1446,  248 => 1445,  244 => 1444,  240 => 1443,  236 => 1442,  232 => 1441,  228 => 1440,  224 => 1439,  220 => 1438,  116 => 1336,  114 => 48,  109 => 46,  97 => 37,  93 => 36,  88 => 34,  83 => 32,  78 => 30,  73 => 28,  68 => 26,  63 => 24,  58 => 22,  53 => 20,  48 => 18,  43 => 16,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class=\"not-ie\" lang=\"en\"> <!--<![endif]-->

<!-- Mirrored from www.entiri.net/troy/1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2017 21:44:15 GMT -->
<head>
    <!-- Basic Meta Tags -->
    <meta charset=\"utf-8\">
    <title>KARHBTY</title>
    <meta name=\"description\" content=\"your description\">
    <meta name=\"keywords\" content=\"your keywords\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->
    <link href=\"{{ asset('template/img/favicon.png')}}\" rel=\"icon\" type=\"image/png\">
    <!-- Bootstrap style -->
    <link href=\"{{ asset('template/css/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Font Awesome Style -->
    <link href=\"{{ asset('template/css/font-awesome.min.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Animate Style -->
    <link href=\"{{ asset('template/css/animate.css\" rel=\"stylesheet')}}\" media=\"screen\" />
    <!-- Lightbox -->
    <link href=\"{{ asset('template/css/magnific-popup.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Flexslider Style -->
    <link href=\"{{ asset('template/css/flexslider.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Style css -->
    <link href=\"{{ asset('template/css/style.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Components css -->
    <link href=\"{{ asset('template/css/components.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Color style css -->
    <link href=\"{{ asset('template/css/color/color-1.css')}}\" rel=\"stylesheet\" media=\"screen\" id=\"color\" />
    <!-- Responsive css -->
    <link href=\"{{ asset('template/css/responsive.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href=\"{{ asset('template/css/extralayers.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('template/rs-plugin/css/settings.css') }}\" rel=\"stylesheet\" media=\"screen\" />
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'>
    <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"/http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <!-- Modernizr js -->
    <script src=\"{{ asset('template/js/modernizr.js') }}\"></script>
</head>
{% block body %}
<body>

<div class=\"color-picker\">
    <a href=\"#\" class=\"handle\"><i class=\"fa fa-cog\"></i></a>
    <div class=\"settings-header\">
        <h3>Setting panel</h3>
    </div>
    <div class=\"section\">
        <h4 class=\"color\"><i class=\"icon-tint\"></i> Color schemes:</h4>
        <div class=\"colors\">
            <a href=\"#\" class=\"color-1\" ></a>
            <a href=\"#\" class=\"color-2\" ></a>
            <a href=\"#\" class=\"color-3\" ></a>
            <a href=\"#\" class=\"color-4\" ></a>
            <a href=\"#\" class=\"color-5\" ></a>
        </div>
    </div>
</div>

<div id=\"loading-wrap\">
    <div id=\"loading\">
        <i class=\"fa fa-cog fa-spin\"></i>
    </div>
</div>

<header class=\"home-header\"> <!-- header -->

    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-inner\">
                <!-- logo-->
                <a href=\"{{ path('home') }}\" title=\"Home\" class=\"logo pull-left\"><img src=\"{{ asset('template/img/logo.png')}}\" alt=\"logo\"></a>
                <!-- logo ends -->

                <!-- Menu -->
                <ul class=\"nav pull-left\" id=\"nav\">
                    <li class=\"selected\"><a href=\"{{ path('home') }}\" title=\"\">Home</a></li>
                    <li><a href=\"{{ path('Annonces') }}\" title=\"\">Catalog</a>

                    </li>
                    <li><a href=\"components.html\" title=\"\">Pages</a>
                        <!-- sub menu -->
                        <ul>
                            <li><a href=\"components.html\" title=\"\">Components</a></li>
                            <li><a href=\"about-us.html\" title=\"\">About us</a></li>
                            <li><a href=\"services.html\" title=\"\">Services</a></li>
                            <li><a href=\"gallery-4.html\" title=\"\">Gallery</a>
                                <!-- sub sub menu -->
                                <ul>
                                    <li><a href=\"gallery-4.html\" title=\"\">Gallery 4 columns</a></li>
                                    <li><a href=\"gallery-3.html\" title=\"\">Gallery 3 columns</a></li>
                                    <li><a href=\"gallery-2.html\" title=\"\">Gallery 2 columns</a></li>
                                </ul>
                                <!-- sub sub menu ends -->
                            </li>
                        </ul>
                        <!-- sub menu ends -->
                    </li>
                    <li><a href=\"shop-right.html\" title=\"\">Shop</a>
                        <ul>
                            <li><a href=\"shop-right.html\">Right sidebar</a></li>
                            <li><a href=\"shop-left.html\">Left sidebar</a></li>
                            <li><a href=\"shop.html\">Without sidebar</a></li>
                            <li><a href=\"shop-product-detail.html\">Shop Product detail</a></li>
                            <li><a href=\"shop-cart.html\">Cart</a></li>
                            <li><a href=\"shop-checkout.html\">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog-right.html\" title=\"\">Blog</a>
                        <ul>
                            <li><a href=\"blog-right.html\">Right sidebar</a></li>
                            <li><a href=\"blog-left.html\">Left sidebar</a></li>
                            <li><a href=\"blog.html\">Without sidebar</a></li>
                            <li><a href=\"blog-masonry.html\">Blog masonry</a></li>
                            <li><a href=\"blog-detail.html\">Blog detail</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{ path('contact') }}\" title=\"\">contact</a></li>
                </ul>
                <!-- Menu ends -->
                <div class=\"menu-right-bar\">
                    <ul class=\"menu-right-bar-ul\">
                        <li class=\"text hidden-sm hidden-xs\">1-800-555-6789</li>
                        <li><a href=\"shop-cart.html\" class=\"button btn btn-primary\" role=\"button\"><i class=\"fa fa-shopping-cart\"></i> (2)</a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            Connecté en tant que {{ app.user.username }}
                            -
                            <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                        {% else %}
                            <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                        {% endif %}                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"singInForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    <h3 class=\"modal-title\" id=\"myModalLabel\">Please Sing Up</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <label for=\"login-name\" class=\"control-label\">Login name:</label>
                        <input type=\"text\" class=\"form-control\" id=\"login-name\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"control-label\">Password:</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                     <button type=\"button\" class=\"btn btn-primary\"><a href=\"{{ path('fos_user_security_login') }}\">Log in</a></button>
                </div>
            </div>
        </div>
    </div>


    <div class=\"tp-banner-container main-slider\">
        <div class=\"tp-banner\" >
            <ul>
                <!-- SLIDE  -->
                <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1500\" data-thumb=\"{{ asset('template/img/slider-main/1.jpg')}}\" data-delay=\"8000\"  data-saveperformance=\"off\"  data-title=\"Our Workplace\">
                    <!-- MAIN IMAGE -->
                    <img src=\"{{ asset('template/img/slider-main/1.jpg')}}\"  alt=\"kenburns1\"  data-bgposition=\"left center\" data-kenburns=\"on\" data-duration=\"9000\" data-ease=\"Linear.easeNone\" data-bgfit=\"100\" data-bgfitend=\"130\" data-bgpositionend=\"right center\">
                    <!-- LAYERS -->

                    <div class=\"caption tp-resizeme skewfromrightshort big-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"-70\"
                         data-speed=\"500\"
                         data-start=\"500\"
                         data-easing=\"easeOutExpo\"
                         data-splitin=\"chars\"
                         data-splitout=\"none\"
                         data-elementdelay=\"0.1\"
                         data-endelementdelay=\"0.1\"
                    >Troy Presents
                    </div>


                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"0\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Ultra Responsive Design
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"50\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Lot of Shortcodes
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"100\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Retina Ready
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"150\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Color Styles
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"200\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Premium Support
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"250\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Shop elements
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition=\"slidedown\" data-slotamount=\"1\" data-masterspeed=\"1500\" data-thumb=\"{{ asset('template/img/slider-main/2.jpg')}}\" data-delay=\"8000\"  data-saveperformance=\"off\"  data-title=\"New York City\">
                    <!-- MAIN IMAGE -->
                    <img src=\"{{ asset('template/img/slider-main/2.jpg')}}\"  alt=\"kenburns6\"  data-bgposition=\"center top\" data-kenburns=\"on\" data-duration=\"9000\" data-ease=\"Linear.easeNone\" data-bgfit=\"110\" data-bgfitend=\"100\" data-bgpositionend=\"center center\">
                    <!-- LAYERS -->
                    <div class=\"caption tp-resizeme skewfromrightshort big-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"-70\"
                         data-speed=\"500\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\"
                         data-splitin=\"chars\"
                         data-splitout=\"none\"
                         data-elementdelay=\"0.1\"
                         data-endelementdelay=\"0.1\"
                    >MERCEDES
                    </div>


                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"0\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >6.5l engine
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"50\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >120 000km
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"100\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >250 mph
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout medium-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"150\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Only: <strong>155 000\$</strong>
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption-2\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"220\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    ><a href=\"product-detail.html\" class=\"btn btn-default btn-lg\" role=\"button\">See details</a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition=\"slideleft\" data-slotamount=\"1\" data-masterspeed=\"1500\" data-thumb=\"{{ asset('template/img/slider-main/3.jpg')}}\" data-delay=\"8000\"  data-saveperformance=\"off\"  data-title=\"Nerd Wisdom\">
                    <!-- MAIN IMAGE -->
                    <img src=\"{{ asset('template/img/slider-main/3.jpg')}}\"  alt=\"kenburns3\"  data-bgposition=\"left top\" data-kenburns=\"on\" data-duration=\"9000\" data-ease=\"Linear.easeNone\" data-bgfit=\"130\" data-bgfitend=\"100\" data-bgpositionend=\"right bottom\">
                    <!-- LAYERS -->
                    <div class=\"caption tp-resizeme skewfromrightshort big-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"-70\"
                         data-speed=\"500\"
                         data-start=\"1000\"
                         data-easing=\"easeOutExpo\"
                         data-splitin=\"chars\"
                         data-splitout=\"none\"
                         data-elementdelay=\"0.1\"
                         data-endelementdelay=\"0.1\"
                    >NISSAN GTR
                    </div>


                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"0\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >6.5l engine
                    </div>
                    <div class=\"caption tp-resizeme lfr fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"50\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"2500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >100 000km
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"100\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"3000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >250 mph
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout medium-caption\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"150\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4000\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    >Only: <strong>555 000\$</strong>
                    </div>
                    <div class=\"caption tp-resizeme lfl fadeout small-caption-2\"
                         data-x=\"center\"
                         data-y=\"center\"
                         data-voffset=\"220\"
                         data-hoffset = \"0\"
                         data-speed=\"500\"
                         data-start=\"4500\"
                         data-easing=\"easeOutExpot\"
                         data-splitout=\"none\"
                    ><a href=\"product-detail.html\" class=\"btn btn-default btn-lg\" role=\"button\">See details</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</header>



<section> <!-- section -->
    <div class=\"promo-video-container alert fade in\">
        <div class=\"promo-video\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <span class=\"promo-video-text\">Play our promotion video and learn more</span>
                        <a href=\"https://www.youtube.com/watch?v=pCspLo74BI8\"  class=\"popup-youtube promo-video-link\" rel=\"external\"><i class=\"fa fa-play\"></i></a>
                        <span class=\"promo-video-text\">You can make the world a better place</span>

                    </div>
                </div>
            </div>
        </div>
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">x</a>
    </div>


    <div class=\"f-bg big-search-container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"big-search-heading\">Popular searches: <span class=\"theme-color\">Autosalon, Automobile, Car</span></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                    <form role=\"form\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Search</span>
                            <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Type and hit enter...\">
                            <span class=\"input-group-addon\">
                <button class=\"btn btn-default btn-lg\" type=\"button\"><i class=\"fa fa-search\"></i></button>
              </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"spacer30\"></div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <p><a href=\"#\" id=\"advanced-serach-container-button\" class=\"advanced-serach-container-button\">Advanced search.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-bg advanced-search-container\" id=\"advanced-search-container\">
        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <form role=\"form\" class=\"form-dark\">

                        <div class=\"row\">
                            <div class=\"form-group col-sm-3\">
                                <label for=\"a0\">Country</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Austria</option>
                                    <option>Germany</option>
                                    <option>Spain</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"a1\">State</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a1\"  data-style=\"btn-primary btn-lg\" disabled>
                                    <option>All</option>
                                    <option>Salzburg (2)</option>
                                    <option>Vienna (1)</option>
                                    <option>Tyrol (3)</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"a2\">City</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a2\" data-style=\"btn-primary btn-lg\" disabled>
                                    <option>All</option>
                                    <option>Salzburg (2)</option>
                                    <option>Vienna (1)</option>
                                    <option>Tyrol (3)</option>
                                </select>
                            </div>
                            <div class=\"form-group col-sm-3\">
                                <label for=\"a3\">Condition</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"a3\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Only new cars</option>
                                    <option>Only used cars</option>
                                </select>
                            </div>



                        </div>

                        <div class=\"row\">

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b0\">Brand</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"b0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>BMW</option>
                                    <option>Audi</option>
                                    <option>Mazda</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b1\">Model</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"b1\" disabled data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Seria 1</option>
                                    <option>Seria 3</option>
                                    <option>Seria 5</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b2\">Price from</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"b2\" placeholder=\"\$\">
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"b3\">Price to</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"b3\" placeholder=\"\$\">
                            </div>

                        </div>

                        <div class=\"row\">

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c0\">Year from</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"c0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>1990</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c1\">Year to</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"c1\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c2\">Mileage from</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"c2\" placeholder=\"0\">
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"c3\">Mileage to</label>
                                <input type=\"text\" class=\"form-control input-lg\" id=\"c3\" placeholder=\"0\">
                            </div>

                        </div>


                        <div class=\"row\">

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d0\">Fuel type</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d0\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Diesel</option>
                                    <option>Petrol</option>
                                    <option>Gas (LPG)</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d1\">Gearbox</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d1\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Automatic</option>
                                    <option>Manula</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d2\">Body type</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d2\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>Sedan</option>
                                    <option>Hatchback</option>
                                    <option>SUV</option>
                                </select>
                            </div>

                            <div class=\"form-group col-sm-3\">
                                <label for=\"d3\">Doors</label>
                                <select class=\"form-control input-lg selectpicker\" id=\"d3\" data-style=\"btn-primary btn-lg\">
                                    <option>All</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>


                        <div class=\"spacer20\"></div>
                        <div class=\"row\">

                            <div class=\"col-sm-2 col-sm-offset-5\">
                                <button type=\"submit\" class=\"btn btn-default btn-lg btn-big-border col-xs-12\">Submit</button>
                            </div>




                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>


    <div class=\"spacer60\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">

                <div class=\"r-bg\">
                    <div class=\"widget\">
                        <h3 class=\"big\">Price range</h3>
                        <input type=\"text\" id=\"car_price\" name=\"example_name\" value=\"\" />
                        <h4>Popular cars</h4>
                        <ul class=\"list-1\">
                            <li><a href=\"#\">Honda CRX</a></li>
                            <li><a href=\"#\">Toyota MX5</a></li>
                            <li><a href=\"#\">BMW X5</a></li>
                            <li><a href=\"#\">Porsche 911</a></li>
                        </ul>
                    </div>
                    <div class=\"widget\">
                        <h4>Latest comments</h4>
                        <ul class=\"list-1\">
                            <li>Entiri on <a href=\"#\">Honda CRX</a></li>
                            <li>John Doe on <a href=\"#\">Toyota MX5</a></li>
                            <li>Samantha on <a href=\"#\">BMW X5</a></li>
                        </ul>
                    </div>
                </div>






                <div class=\"r-bg\">
                    <div class=\"widget\">
                        <h3 class=\"big\"><i class=\"fa fa-calculator\"></i> Loan calculator</h3>
                        <form role=\"form\">

                            <div class=\"row\">
                                <div class=\"form-group form-group-small col-xs-12\">
                                    <label for=\"loan0\" class=\"label-small\">Loan Amount (\$)</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan0\" placeholder=\"\$\" value=\"2400\">
                                </div>
                                <div class=\"form-group form-group-small col-xs-12\">
                                    <label for=\"loan1\" class=\"label-small\">Annual Interest Rate (%)</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan1\" placeholder=\"\" value=\"4.5\">
                                </div>
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                    <label for=\"loan2\" class=\"label-small\">Term of Loan</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan2\" placeholder=\"4 years\" value=\"4\">
                                </div>
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                    <label for=\"loan3\" class=\"label-small\">Payments</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan3\" placeholder=\"48\" value=\"48\" disabled>
                                </div>
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-12\">
                                    <label for=\"loan4\" class=\"label-small\">Monthly payment (\$)</label>
                                    <input type=\"text\" class=\"form-control\" id=\"loan4\" placeholder=\"\" value=\"125\" disabled>
                                </div>
                            </div>
                            <div class=\"spacer10\"></div>
                            <div class=\"row\">
                                <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-12\">
                                    <button class=\"btn btn-default col-xs-12\" type=\"button\">Calculate</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


                <div class=\"r-bg\">
                    <div class=\"widget\">
                        <h3>Recent news</h3>
                        <ul class=\"news-box-ul\">
                            <li>
                <span class=\"image\">
                  <img src=\"{{ asset('template/img/latest-blog/1.jpg')}}\" alt=\"\">
                </span>
                                <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"blog-detail.html\">The journey of the Beatles</a>
                </span>
                                    <span class=\"text\">by Yino Huan</span>
                                </div>
                            </li>
                            <li>
                <span class=\"image\">
                  <img src=\"{{ asset('template/img/latest-blog/2.jpg')}}\" alt=\"\">
                </span>
                                <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"blog-detail.html\">The journey of the Beatles</a>
                </span>
                                    <span class=\"text\">by Yino Huan</span>
                                </div>
                            </li>
                            <li>
                <span class=\"image\">
                  <img src=\"{{ asset('template/img/latest-blog/3.jpg')}}\" alt=\"\">
                </span>
                                <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"blog-detail.html\">The journey of the Beatles</a>
                </span>
                                    <span class=\"text\">by Yino Huan</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class=\"col-sm-8\">
                <div class=\"r-bg\">
                    <h3>Search results</h3>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"search-result-heading\">
                                <div class=\"search-result form-group pull-left\">
                                    <select class=\"form-control selectpicker\" id=\"sel1\" data-style=\"btn-default\">
                                        <option>Price (Low to High)</option>
                                        <option>Price (Hight to Low)</option>
                                        <option>Name (A to Z)</option>
                                        <option>Name (Z to A)</option>
                                    </select>
                                </div>
                                <div class=\"btn-group\">
                                    <a href=\"#\" id=\"grid-view\" class=\"btn btn-default active\"><i class=\"fa fa-th i-margin\"></i></a>
                                    <a href=\"#\" id=\"list-view\" class=\"btn btn-default \"><i class=\"fa fa-list i-margin\"></i></a>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div id=\"products\" class=\"row\">
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/1.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/2.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 0 km</li>
                                        <li><strong>Condition:</strong> new</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/3.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/4.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/5.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/6.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">BMW M3</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/7.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">Toyota</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/8.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">Seat Toledo</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <div class=\"search-result-item-container\">
                                <div class=\"search-result-item-media\">
                                    <img src=\"{{ asset('template/img/car/9.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"search-result-item-content\">
                                    <div class=\"title\"><a href=\"product-detail.html\">Fiat Punto</a></div>
                                    <ul class=\"tags grid-hidden\">
                                        <li><a href=\"#\">Lpg</a></li>
                                        <li><a href=\"#\">Used</a></li>
                                        <li><a href=\"#\">2l</a></li>
                                    </ul>
                                    <ul class=\"list-4\">
                                        <li><strong>Location:</strong> Los Angels</li>
                                        <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                        <li><strong>Mileage:</strong> 30000 km</li>
                                        <li><strong>Condition:</strong> used</li>
                                    </ul>
                                    <p class=\"grid-hidden\">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <div class=\"price\">\$ 200,000</div>
                                    <a href=\"product-detail.html\" class=\"btn btn-default\" role=\"button\">Details</a>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class=\"spacer20\"></div>
                <div class=\"row\">

                    <div class=\"col-xs-12\">
                        <ul class=\"pagination\">
                            <li><a href=\"#\"><i class=\"fa fa-angle-left\"></i> Back</a></li>
                            <li class=\"active\"><a href=\"#\">1</a></li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">...</a></li>
                            <li><a href=\"#\">998</a></li>
                            <li><a href=\"#\">999</a></li>
                            <li><a href=\"#\">Next <i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>




        </div>
    </div>
    <div class=\"spacer60\"></div>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"full-tabs\">

                <!-- Navigation Buttons -->
                <div class=\"col-xs-4 col-sm-3\">
                    <ul class=\"nav nav-pills nav-stacked\" id=\"myTabs\">
                        <li class=\"active\"><a href=\"{{ path('home') }}\">Home</a></li>
                        <li><a href=\"#profile\">Profile</a></li>
                        <li><a href=\"#messages\">Messages</a></li>
                        <li><a href=\"#messages1\">Style</a></li>
                    </ul>
                </div>

                <!-- Content -->
                <div class=\"col-xs-8 col-sm-9\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"home\">
                            <div class=\"overlay\">
                                <div class=\"title\">Vestibulum Primis</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"profile\">
                            <div class=\"overlay\">
                                <div class=\"title\">Porsche GTX</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"messages\">
                            <div class=\"overlay\">
                                <div class=\"title\">Mazda MX5</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"messages1\">
                            <div class=\"overlay\">
                                <div class=\"title\">Ford Mustang GT</div>
                                <p>It was some time before he obtained<br> any answer, and the reply, when<br> made, was unpropitious.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- /row -->
    </div>

    <div class=\"spacer40\"></div>


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"news-box\">
                    <img src=\"{{ asset('template/img/blog-detail/1.jpg')}}\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"table-cont\">
                            <div class=\"table-cell\">
                                <h4>Donec posuere</h4>
                                <p class=\"hidden-sm hidden-xs\">At first, for some time,<br> I was not able to answer<br> him one word; but as...</p>
                                <a class=\"btn btn-warning\" role=\"button\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"news-box\">
                    <img src=\"{{ asset('template/img/blog-detail/2.jpg')}}\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"table-cont\">
                            <div class=\"table-cell\">
                                <h4>Donec posuere</h4>
                                <p class=\"hidden-sm hidden-xs\">At first, for some time,<br> I was not able to answer<br> him one word; but as...</p>
                                <a class=\"btn btn-warning\" role=\"button\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"news-box\">
                    <img src=\"{{ asset('template/img/blog-detail/3.jpg')}}\" alt=\"\">
                    <div class=\"overlay\">
                        <div class=\"table-cont\">
                            <div class=\"table-cell\">
                                <h4>Donec posuere</h4>
                                <p class=\"hidden-sm hidden-xs\">At first, for some time,<br> I was not able to answer<br> him one word; but as...</p>
                                <a class=\"btn btn-warning\" role=\"button\" href=\"#\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"r-bg\">
                    <h3 class=\"big\">Categories</h3>
                    <h4>New cars</h4>
                    <ul class=\"list-1\">
                        <li><a href=\"#\">Honda CRX</a></li>
                        <li><a href=\"#\">Toyota MX5</a></li>
                        <li><a href=\"#\">Brand old car</a></li>
                        <li><a href=\"#\">Porsche 911</a></li>
                    </ul>
                    <h4>Old cars</h4>
                    <ul class=\"list-1\">
                        <li><a href=\"#\">Honda CRX</a></li>
                        <li><a href=\"#\">Toyota MX5</a></li>
                        <li><a href=\"#\">Brand old car</a></li>
                        <li><a href=\"#\">Porsche 911</a></li>
                        <li><a href=\"#\">Audi TT</a></li>
                        <li><a href=\"#\">Mazda</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"r-bg\">
                    <h3 class=\"big\">Offer</h3>
                    <form role=\"form\" class=\"form-left\">

                        <div class=\"form-group col-sm-6\">
                            <label for=\"name1\">Name</label>
                            <input type=\"text\" class=\"form-control input-lg\" id=\"name1\" placeholder=\"Enter name\">
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <label for=\"email1\">E-mail</label>
                            <input type=\"email\" class=\"form-control input-lg\" id=\"email1\" placeholder=\"Enter e-mail\">
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <label for=\"subject1\">Subject</label>
                            <input type=\"text\" class=\"form-control input-lg\" id=\"subject1\" placeholder=\"Enter subject\">
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <label for=\"select1\">Price range</label>
                            <select class=\"form-control input-lg selectpicker\" id=\"select1\"   data-style=\"btn-default btn-lg\">
                                <option>\$100 - \$5.000</option>
                                <option>\$5.001 - \$10.000</option>
                                <option>\$10.001 - \$15.000</option>
                                <option>\$15.001 - \$20.000</option>
                                <option>\$20.001 - \$25.000</option>
                            </select>
                        </div>
                        <div class=\"form-group col-sm-12\">
                            <label for=\"message2\">Message</label>
                            <textarea class=\"form-control\" id=\"message2\" name=\"messag2\" onblur=\"if(this.value == '') this.value='Message'\" onfocus=\"if(this.value == 'Message') this.value=''\">Message</textarea>
                        </div>

                        <div class=\"form-group col-sm-6\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Send me a copy
                                </label>
                            </div>
                        </div>

                        <div class=\"form-group col-sm-6 text-right\">
                            <button type=\"submit\" class=\"btn btn-default btn-lg\">Submit</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>








    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <ul class=\"nav nav-tabs responsive\" id=\"myTab1\">
                    <li class=\"active\"><a href=\"#first0\" data-toggle=\"tab\">Categories</a></li>
                    <li><a href=\"#profile0\" data-toggle=\"tab\">Featured</a></li>
                    <li><a href=\"#messages0\" data-toggle=\"tab\">Locations</a></li>
                </ul>
                <div class=\"tab-content  responsive\" id=\"myTabContent\">
                    <div class=\"tab-pane fade in active\" id=\"first0\"><p><img src=\"{{ asset('template/img/mockup/1.jpg')}}\" class=\"img-left thumbnail\" alt=\"\">Venim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p><p>Venim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. runch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        <div class=\"share-box-container text-right\">
                            <a class=\"share-box\"><span class=\"like\"><i class=\"fa fa-heart\"></i>Like</span></a>
                            <a class=\"share-box\"><span class=\"respond\"><i class=\"fa fa-comment\"></i>Respond</span></a>
                            <a class=\"share-box\"><span class=\"share\"><i class=\"fa fa-share-alt\"></i>Share</span></a>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"profile0\"><img src=\"{{ asset('template/img/mockup/2.jpg')}}\" class=\"img-right thumbnail\" alt=\"\">Eprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</div>
                    <div class=\"tab-pane fade\" id=\"messages0\">Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,  wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"clasic-slider flexslider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"caption\">
                                <div class=\"table-cont\">
                                    <div class=\"table-cell\">
                                        <h2>Mazda MX5</h2>
                                        <p>used, 6.5l, 300 000 km, manual.</p>
                                        <p>Only: <strong>\$25.000</strong></p>
                                        <a href=\"#\" class=\"btn btn-warning btn-lg margin-top-10\" role=\"button\">See details</a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"{{ asset('template/img/slider-content/1.jpg')}}\"  alt=\"\"/>
                        </li>
                        <li>
                            <div class=\"caption\">
                                <div class=\"table-cont\">
                                    <div class=\"table-cell\">
                                        <h2>Audi TT</h2>
                                        <p>used, 6.5l, 300 000 km, manual.</p>
                                        <p>Only: <strong>\$25.000</strong></p>
                                        <a href=\"#\" class=\"btn btn-default btn-lg margin-top-10\" role=\"button\">See details</a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"{{ asset('template/img/slider-content/2.jpg')}}\"  alt=\"\"/>
                        </li>
                        <li>
                            <div class=\"caption\">
                                <div class=\"table-cont\">
                                    <div class=\"table-cell\">
                                        <h2>Honda</h2>
                                        <p>used, 6.5l, 300 000 km, manual.</p>
                                        <p>Only: <strong>\$25.000</strong></p>
                                        <a href=\"#\" class=\"btn btn-danger btn-lg margin-top-10\" role=\"button\">See details</a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"{{ asset('template/img/slider-content/3.jpg')}}\"  alt=\"\"/>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>




    <div class=\"spacer60\"></div>


    <div class=\"promo-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-10 col-sm-offset-1 col-xs-12\">
                    <form role=\"form\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon white hidden-xs\">Subscribe to our newsletter</span>
                            <input type=\"text\" class=\"form-control white input-lg\" placeholder=\"E-mail\">
                            <span class=\"input-group-addon\">
                <button class=\"btn btn-inverted btn-lg text-right\" type=\"button\">Subscribe</button>
              </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section> <!-- section ends -->

{% endblock body %}
<footer class=\"footer\">  <!-- footer -->
    <div class=\"footer-top\">
        <div class=\"footer-top-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>Hot</h4>
                        <ul class=\"list-2\">
                            <li><a href=\"#\">Timeline</a></li>
                            <li><a href=\"#\">Messages</a></li>
                            <li><a href=\"#\">Statistics</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Log in</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>Services</h4>
                        <ul class=\"list-2\">
                            <li><a href=\"#\">Timeline</a></li>
                            <li><a href=\"#\">Messages</a></li>
                            <li><a href=\"#\">Statistics</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Log in</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>About us</h4>
                        <ul class=\"list-2\">
                            <li><a href=\"#\">Timeline</a></li>
                            <li><a href=\"#\">Messages</a></li>
                            <li><a href=\"#\">Statistics</a></li>
                            <li><a href=\"#\">Settings</a></li>
                            <li><a href=\"#\">Log in</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3 col-xs-6\">
                        <h4>Follow us</h4>
                        <ul class=\"colored-social-icons-2\">
                            <li><a href=\"#\" rel=\"external\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"dribbble\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\" rel=\"external\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                        </ul>
                        <div class=\"spacer25\"></div>
                        <h4>Subscribe</h4>
                        <form role=\"form\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control footer-form-control\" placeholder=\"E-mail\">
                                <span class=\"input-group-addon\">
                    <button class=\"btn btn-default\" type=\"button\"> <i class=\"fa fa-angle-right\"></i> </button>
                  </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"footer-bottom-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h4>Info</h4>
                        <p>Nullam sagittis. Quisque id odio. Curabitur nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Fusce egestas elit eget lorem.</p>
                        <div class=\"spacer50\"></div>
                        <div class=\"spacer1\"></div>
                        <p>&copy; TROY. 2014 - Created by <a href=\"#\">entiri</a>.</p>
                    </div>
                    <div class=\"col-sm-3\">
                        <h4>Address</h4>
                        <ul class=\"list-3\">
                            <li>920 Reserve Dr. Suite 140</li>
                            <li>Roseville, CA 95678</li>
                            <li>&nbsp;</li>
                            <li>(415) 496-9612</li>
                            <li>&nbsp;</li>
                            <li><a href=\"mailto:info@domain.com\">info@domain.com</a></li>
                        </ul>

                    </div>
                    <div class=\"col-sm-3\">
                        <h4>Contact</h4>
                        <ul class=\"list-3\">
                            <li>(415) 496-9612</li>
                            <li>(415) 496-9613</li>
                            <li>(415) 496-9614</li>
                        </ul>
                        <div class=\"spacer15\"></div>
                        <a class=\"btn btn-default\" href=\"mailto:email@example.com\" role=\"button\">Email us</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer> <!-- Footer ends -->
<a href=\"#\" class=\"back-to-top\"><span></span></a>

<script src=\"{{ asset('template/js/jquery.js')}}\"></script>
<script src=\"{{ asset('template/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.easing.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.isotope.min.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.fitvids.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.appear.js')}}\"></script>
<script src=\"{{ asset('template/js/retina.js')}}\"></script>
<script src=\"{{ asset('template/js/respond.min.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.parallax-1.1.3.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.magnific-popup.min.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.sticky.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.countTo.js')}}\"></script>
<script src=\"{{ asset('template/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('template/js/jquery.flexslider-min.js')}}\"></script>
<script src=\"{{ asset('template/js/ion.rangeSlider.min.js')}}\"></script>
<script src=\"{{ asset('template/js/selectnav.js')}}\"></script>
<script src=\"{{ asset('template/js/responsive-tabs.js')}}\"></script>
<script src=\"{{ asset('template/js/bootstrap-select.min.js')}}\"></script>
<script src=\"{{ asset('template/js/functions.js')}}\"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type=\"text/javascript\" src=\"{{ asset('template/rs-plugin/js/jquery.themepunch.tools.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('template/rs-plugin/js/jquery.themepunch.revolution.min.js')}}\"></script>

<script type=\"text/javascript\">

    jQuery(document).ready(function() {



        jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay:\"none\",
                    delay:16000,
                    startwidth:1920,
                    startheight:800,
                    hideThumbs:200,

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,

                    navigationType:\"none\",
                    navigationArrows:\"solo\",
                    navigationStyle:\"preview1\",

                    touchenabled:\"on\",
                    onHoverStop:\"off\",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax:\"mouse\",
                    parallaxBgFreeze:\"on\",
                    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                    keyboardNavigation:\"off\",

                    navigationHAlign:\"center\",
                    navigationVAlign:\"bottom\",
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:\"left\",
                    soloArrowLeftValign:\"center\",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:\"right\",
                    soloArrowRightValign:\"center\",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    shadow:0,
                    fullWidth:\"on\",
                    fullScreen:\"off\",

                    spinner:\"spinner4\",

                    stopLoop:\"off\",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,

                    shuffle:\"off\",

                    autoHeight:\"off\",
                    forceFullWidth:\"off\",



                    hideThumbsOnMobile:\"off\",
                    hideNavDelayOnMobile:1500,
                    hideBulletsOnMobile:\"off\",
                    hideArrowsOnMobile:\"off\",
                    hideThumbsUnderResolution:0,

                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    startWithSlide:0,
                    videoJsPath:\"rs-plugin/videojs/\",
                    fullScreenOffsetContainer: \"\"
                });




    });\t//ready

</script>

</body>

<!-- Mirrored from www.entiri.net/troy/1.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2017 21:50:30 GMT -->
</html>", "::base.html.twig", "C:\\wamp\\www\\PI\\app/Resources\\views/base.html.twig");
    }
}

<?php

/* PIPIBundle:PI:Annonces.html.twig */
class __TwigTemplate_54f6f047928372387677aad64782309449d7580ee6da02295a18db9fd768fcce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIPIBundle:PI:Annonces.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d23dd3abcea707c7a7f232fde80db06c44919462fd3a076ddb7aedb6833cbd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23dd3abcea707c7a7f232fde80db06c44919462fd3a076ddb7aedb6833cbd8b->enter($__internal_d23dd3abcea707c7a7f232fde80db06c44919462fd3a076ddb7aedb6833cbd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIPIBundle:PI:Annonces.html.twig"));

        $__internal_3ed6f0f4d299ed67e7dfe4c8197a6952da9cf67815b552202a2e44973958436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed6f0f4d299ed67e7dfe4c8197a6952da9cf67815b552202a2e44973958436c->enter($__internal_3ed6f0f4d299ed67e7dfe4c8197a6952da9cf67815b552202a2e44973958436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIPIBundle:PI:Annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d23dd3abcea707c7a7f232fde80db06c44919462fd3a076ddb7aedb6833cbd8b->leave($__internal_d23dd3abcea707c7a7f232fde80db06c44919462fd3a076ddb7aedb6833cbd8b_prof);

        
        $__internal_3ed6f0f4d299ed67e7dfe4c8197a6952da9cf67815b552202a2e44973958436c->leave($__internal_3ed6f0f4d299ed67e7dfe4c8197a6952da9cf67815b552202a2e44973958436c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd94214e0e3f61e5f63a2a8c8eb99362e15c574881a20436b62c6e9c8fce3e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd94214e0e3f61e5f63a2a8c8eb99362e15c574881a20436b62c6e9c8fce3e6b->enter($__internal_cd94214e0e3f61e5f63a2a8c8eb99362e15c574881a20436b62c6e9c8fce3e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce661918b6b32e5769bc8743dff6ebed3558185a1fd2c23a0c70b02292f7426c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce661918b6b32e5769bc8743dff6ebed3558185a1fd2c23a0c70b02292f7426c->enter($__internal_ce661918b6b32e5769bc8743dff6ebed3558185a1fd2c23a0c70b02292f7426c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    </head>

    <body class=\"no-main-slider\">

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
                    <a href=\"index-2.html\" title=\"Home\" class=\"logo pull-left\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                    <!-- logo ends -->

                    <!-- Menu -->
                    <ul class=\"nav pull-left\" id=\"nav\">
                        <li><a href=\"index-2.html\" title=\"\">Home</a></li>
                        <li class=\"selected\"><a href=\"catalog-right.html\" title=\"\">Catalog</a>
                            <ul>
                                <li><a href=\"catalog-right.html\">Right sidebar</a></li>
                                <li class=\"selected\"><a href=\"catalog-left.html\">Left sidebar</a></li>
                                <li><a href=\"catalog.html\">Without sidebar</a></li>
                                <li><a href=\"product-detail.html\">Product detail</a></li>
                            </ul>
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
                        <li><a href=\"contact.html\" title=\"\">Contact</a></li>
                    </ul>
                    <!-- Menu ends -->
                    <div class=\"menu-right-bar\">
                        <ul class=\"menu-right-bar-ul\">
                            <li class=\"text hidden-sm hidden-xs\">1-800-555-6789</li>
                            <li><a href=\"shop-cart.html\" class=\"button btn btn-primary\" role=\"button\"><i class=\"fa fa-shopping-cart\"></i> (2)</a></li>
                            ";
        // line 96
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 97
            echo "                                Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                -
                                <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                            ";
        } else {
            // line 101
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                            ";
        }
        // line 102
        echo "                          </ul>
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
                        <button type=\"button\" class=\"btn btn-primary\">Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>





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
                        <p>Looking cautiously round, to ascertain that they were not overheard.</p>
                    </div>
                </div>
            </div>
        </div>



        <div class=\"page-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"page-title\">Cataloge</div>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"index-2.html\">Home</a></li>
                            <li><a href=\"#\">Cataloge</a></li>
                            <li class=\"active\">Cataloge left sidebar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">

                    <div class=\"r-bg\">
                        <div class=\"widget\">
                            <h3 class=\"big\">Price range</h3>
                            <input type=\"text\" id=\"car_price\" name=\"example_name\" value=\"\" />
                        </div>
                    </div>


                    <div class=\"r-bg\">
                        <div class=\"widget\">
                            <h3 class=\"big\"><i class=\"fa fa-search\"></i> Search</h3>
                            <form role=\"form\">

                                <div class=\"row\">
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a0\" class=\"label-small\">Country</label>
                                        <select class=\"form-control  selectpicker\" data-style=\"btn-default\" id=\"a0\">
                                            <option>All</option>
                                            <option>Austria</option>
                                            <option>Germany</option>
                                            <option>Spain</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a1\" class=\"label-small\">State</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"a1\" disabled>
                                            <option>All</option>
                                            <option>Salzburg (2)</option>
                                            <option>Vienna (1)</option>
                                            <option>Tyrol (3)</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a2\" class=\"label-small\">City</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"a2\" disabled>
                                            <option>All</option>
                                            <option>Salzburg (2)</option>
                                            <option>Vienna (1)</option>
                                            <option>Tyrol (3)</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a3\" class=\"label-small\">Condition</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"a3\">
                                            <option>All</option>
                                            <option>Only new cars</option>
                                            <option>Only used cars</option>
                                        </select>
                                    </div>



                                </div>

                                <div class=\"row\">

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b0\" class=\"label-small\">Brand</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"b0\">
                                            <option>All</option>
                                            <option>Audi</option>
                                            <option>Mazda</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b1\" class=\"label-small\">Model</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"b1\" disabled>
                                            <option>All</option>
                                            <option>Seria 3</option>
                                            <option>Seria 5</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d0\" class=\"label-small\">Fuel type</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d0\">
                                            <option>All</option>
                                            <option>Petrol</option>
                                            <option>Gas (LPG)</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d1\" class=\"label-small\">Gearbox</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d1\">
                                            <option>All</option>
                                            <option>Manula</option>
                                            <option>Hybrid</option>
                                        </select>
                                    </div>


                                </div>

                                <div class=\"row\">
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d3\" class=\"label-small\">Body type</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d3\">
                                            <option>All</option>
                                            <option>Hatchback</option>
                                            <option>SUV</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d4\" class=\"label-small\">Doors</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d4\">
                                            <option>All</option>
                                            <option>3</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c0\" class=\"label-small\">Year from</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"c0\">
                                            <option>All</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c1\" class=\"label-small\">Year to</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"c1\">
                                            <option>All</option>
                                            <option>2013</option>
                                            <option>2012</option>
                                        </select>
                                    </div>



                                </div>


                                <div class=\"row\">

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c2\" class=\"label-small\">Mileage from</label>
                                        <input type=\"text\" class=\"form-control\" id=\"c2\" placeholder=\"0\">
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c3\" class=\"label-small\">Mileage to</label>
                                        <input type=\"text\" class=\"form-control\"  id=\"c3\" placeholder=\"0\">
                                    </div>



                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b2\" class=\"label-small\">Price from</label>
                                        <input type=\"text\" class=\"form-control\" id=\"b2\" placeholder=\"\$\">
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b3\" class=\"label-small\">Price to</label>
                                        <input type=\"text\" class=\"form-control\"  id=\"b3\" placeholder=\"\$\">
                                    </div>


                                </div>


                                <div class=\"spacer10\"></div>
                                <div class=\"row\">

                                    <div class=\"form-group col-xs-12\">
                                        <button type=\"submit\" class=\"btn btn-default col-xs-12\">Search</button>
                                    </div>




                                </div>

                            </form>
                        </div>
                    </div>


                    <div class=\"r-bg\">
                        <div class=\"widget\">
                            <h3>Latest additions</h3>
                            <ul class=\"recent-items-ul\">
                                <li>
                <span class=\"image\">
                  <img src=\"img/latest-car/1.jpg\" alt=\"\">
                </span>
                                    <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"product-detail.html\">Porsche GTX</a>
                </span>
                                        <span class=\"small-text\">used, 1.4l</span>
                                        <span class=\"text\">\$ 10.000</span>
                                    </div>
                                </li>
                                <li>
                <span class=\"image\">
                  <img src=\"img/latest-car/2.jpg\" alt=\"\">
                </span>
                                    <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"product-detail.html\">AUDI TT</a>
                </span>
                                        <span class=\"small-text\">used, 1.4l</span>
                                        <span class=\"text\">\$ 12.000</span>
                                    </div>
                                </li>
                                <li>
                <span class=\"image\">
                  <img src=\"img/latest-car/3.jpg\" alt=\"\">
                </span>
                                    <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"product-detail.html\">Subaru Impreza</a>
                </span>
                                        <span class=\"small-text\">used, 1.4l</span>
                                        <span class=\"text\">\$ 10.000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>

                <div class=\"col-sm-8\">
                    <div class=\"r-bg\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h3>Popular cars</h3>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"search-result-heading\">
                                    <div class=\"search-result form-group\">
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
                                        <img src=\"img/car/1.jpg\" alt=\"\">
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
                                        <img src=\"img/car/2.jpg\" alt=\"\">
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
                                        <img src=\"img/car/3.jpg\" alt=\"\">
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
                                        <img src=\"img/car/4.jpg\" alt=\"\">
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
                                        <img src=\"img/car/5.jpg\" alt=\"\">
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
                                        <img src=\"img/car/6.jpg\" alt=\"\">
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
                                        <img src=\"img/car/7.jpg\" alt=\"\">
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
                                        <img src=\"img/car/8.jpg\" alt=\"\">
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
                                        <img src=\"img/car/9.jpg\" alt=\"\">
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

                        <div class=\"col-xs-12 text-center\">
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
                <div class=\"col-md-4\">
                    <h3>Clients</h3>
                    <p>Duden flows by their place and supplies it
                        with the necessary regelialia. It is a paradisem country, in which roasted parts of sentences
                        into your mouth.
                    </p>

                </div>
                <div class=\"col-md-8\">
                    <div class=\"row\">
                        <div class=\"clients\">
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/1.jpg\" alt=\"client1\"></a></div>
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/2.jpg\" alt=\"client1\"></a></div>
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/3.jpg\" alt=\"client1\"></a></div>
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/4.jpg\" alt=\"client1\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"spacer60\"></div>

        <div class=\"f-bg big-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <h3>Hot Items</h3>
                        <div class=\"related-items-slider\">
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/1.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/3.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/5.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/6.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
        
        $__internal_ce661918b6b32e5769bc8743dff6ebed3558185a1fd2c23a0c70b02292f7426c->leave($__internal_ce661918b6b32e5769bc8743dff6ebed3558185a1fd2c23a0c70b02292f7426c_prof);

        
        $__internal_cd94214e0e3f61e5f63a2a8c8eb99362e15c574881a20436b62c6e9c8fce3e6b->leave($__internal_cd94214e0e3f61e5f63a2a8c8eb99362e15c574881a20436b62c6e9c8fce3e6b_prof);

    }

    public function getTemplateName()
    {
        return "PIPIBundle:PI:Annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 102,  155 => 101,  150 => 99,  144 => 97,  142 => 96,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}


{% block body %}
    </head>

    <body class=\"no-main-slider\">

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
                    <a href=\"index-2.html\" title=\"Home\" class=\"logo pull-left\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                    <!-- logo ends -->

                    <!-- Menu -->
                    <ul class=\"nav pull-left\" id=\"nav\">
                        <li><a href=\"index-2.html\" title=\"\">Home</a></li>
                        <li class=\"selected\"><a href=\"catalog-right.html\" title=\"\">Catalog</a>
                            <ul>
                                <li><a href=\"catalog-right.html\">Right sidebar</a></li>
                                <li class=\"selected\"><a href=\"catalog-left.html\">Left sidebar</a></li>
                                <li><a href=\"catalog.html\">Without sidebar</a></li>
                                <li><a href=\"product-detail.html\">Product detail</a></li>
                            </ul>
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
                        <li><a href=\"contact.html\" title=\"\">Contact</a></li>
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
                            {% endif %}                          </ul>
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
                        <button type=\"button\" class=\"btn btn-primary\">Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>





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
                        <p>Looking cautiously round, to ascertain that they were not overheard.</p>
                    </div>
                </div>
            </div>
        </div>



        <div class=\"page-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"page-title\">Cataloge</div>
                        <ol class=\"breadcrumb\">
                            <li><a href=\"index-2.html\">Home</a></li>
                            <li><a href=\"#\">Cataloge</a></li>
                            <li class=\"active\">Cataloge left sidebar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">

                    <div class=\"r-bg\">
                        <div class=\"widget\">
                            <h3 class=\"big\">Price range</h3>
                            <input type=\"text\" id=\"car_price\" name=\"example_name\" value=\"\" />
                        </div>
                    </div>


                    <div class=\"r-bg\">
                        <div class=\"widget\">
                            <h3 class=\"big\"><i class=\"fa fa-search\"></i> Search</h3>
                            <form role=\"form\">

                                <div class=\"row\">
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a0\" class=\"label-small\">Country</label>
                                        <select class=\"form-control  selectpicker\" data-style=\"btn-default\" id=\"a0\">
                                            <option>All</option>
                                            <option>Austria</option>
                                            <option>Germany</option>
                                            <option>Spain</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a1\" class=\"label-small\">State</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"a1\" disabled>
                                            <option>All</option>
                                            <option>Salzburg (2)</option>
                                            <option>Vienna (1)</option>
                                            <option>Tyrol (3)</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a2\" class=\"label-small\">City</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"a2\" disabled>
                                            <option>All</option>
                                            <option>Salzburg (2)</option>
                                            <option>Vienna (1)</option>
                                            <option>Tyrol (3)</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"a3\" class=\"label-small\">Condition</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"a3\">
                                            <option>All</option>
                                            <option>Only new cars</option>
                                            <option>Only used cars</option>
                                        </select>
                                    </div>



                                </div>

                                <div class=\"row\">

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b0\" class=\"label-small\">Brand</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"b0\">
                                            <option>All</option>
                                            <option>Audi</option>
                                            <option>Mazda</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b1\" class=\"label-small\">Model</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"b1\" disabled>
                                            <option>All</option>
                                            <option>Seria 3</option>
                                            <option>Seria 5</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d0\" class=\"label-small\">Fuel type</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d0\">
                                            <option>All</option>
                                            <option>Petrol</option>
                                            <option>Gas (LPG)</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d1\" class=\"label-small\">Gearbox</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d1\">
                                            <option>All</option>
                                            <option>Manula</option>
                                            <option>Hybrid</option>
                                        </select>
                                    </div>


                                </div>

                                <div class=\"row\">
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d3\" class=\"label-small\">Body type</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d3\">
                                            <option>All</option>
                                            <option>Hatchback</option>
                                            <option>SUV</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"d4\" class=\"label-small\">Doors</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"d4\">
                                            <option>All</option>
                                            <option>3</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c0\" class=\"label-small\">Year from</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"c0\">
                                            <option>All</option>
                                            <option>1991</option>
                                            <option>1992</option>
                                        </select>
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c1\" class=\"label-small\">Year to</label>
                                        <select class=\"form-control selectpicker\" data-style=\"btn-default\" id=\"c1\">
                                            <option>All</option>
                                            <option>2013</option>
                                            <option>2012</option>
                                        </select>
                                    </div>



                                </div>


                                <div class=\"row\">

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c2\" class=\"label-small\">Mileage from</label>
                                        <input type=\"text\" class=\"form-control\" id=\"c2\" placeholder=\"0\">
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"c3\" class=\"label-small\">Mileage to</label>
                                        <input type=\"text\" class=\"form-control\"  id=\"c3\" placeholder=\"0\">
                                    </div>



                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b2\" class=\"label-small\">Price from</label>
                                        <input type=\"text\" class=\"form-control\" id=\"b2\" placeholder=\"\$\">
                                    </div>

                                    <div class=\"form-group form-group-small col-xs-12 col-sm-12 col-md-6\">
                                        <label for=\"b3\" class=\"label-small\">Price to</label>
                                        <input type=\"text\" class=\"form-control\"  id=\"b3\" placeholder=\"\$\">
                                    </div>


                                </div>


                                <div class=\"spacer10\"></div>
                                <div class=\"row\">

                                    <div class=\"form-group col-xs-12\">
                                        <button type=\"submit\" class=\"btn btn-default col-xs-12\">Search</button>
                                    </div>




                                </div>

                            </form>
                        </div>
                    </div>


                    <div class=\"r-bg\">
                        <div class=\"widget\">
                            <h3>Latest additions</h3>
                            <ul class=\"recent-items-ul\">
                                <li>
                <span class=\"image\">
                  <img src=\"img/latest-car/1.jpg\" alt=\"\">
                </span>
                                    <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"product-detail.html\">Porsche GTX</a>
                </span>
                                        <span class=\"small-text\">used, 1.4l</span>
                                        <span class=\"text\">\$ 10.000</span>
                                    </div>
                                </li>
                                <li>
                <span class=\"image\">
                  <img src=\"img/latest-car/2.jpg\" alt=\"\">
                </span>
                                    <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"product-detail.html\">AUDI TT</a>
                </span>
                                        <span class=\"small-text\">used, 1.4l</span>
                                        <span class=\"text\">\$ 12.000</span>
                                    </div>
                                </li>
                                <li>
                <span class=\"image\">
                  <img src=\"img/latest-car/3.jpg\" alt=\"\">
                </span>
                                    <div class=\"table-content\">
                <span class=\"title\">
                    <a href=\"product-detail.html\">Subaru Impreza</a>
                </span>
                                        <span class=\"small-text\">used, 1.4l</span>
                                        <span class=\"text\">\$ 10.000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>

                <div class=\"col-sm-8\">
                    <div class=\"r-bg\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h3>Popular cars</h3>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"search-result-heading\">
                                    <div class=\"search-result form-group\">
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
                                        <img src=\"img/car/1.jpg\" alt=\"\">
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
                                        <img src=\"img/car/2.jpg\" alt=\"\">
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
                                        <img src=\"img/car/3.jpg\" alt=\"\">
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
                                        <img src=\"img/car/4.jpg\" alt=\"\">
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
                                        <img src=\"img/car/5.jpg\" alt=\"\">
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
                                        <img src=\"img/car/6.jpg\" alt=\"\">
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
                                        <img src=\"img/car/7.jpg\" alt=\"\">
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
                                        <img src=\"img/car/8.jpg\" alt=\"\">
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
                                        <img src=\"img/car/9.jpg\" alt=\"\">
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

                        <div class=\"col-xs-12 text-center\">
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
                <div class=\"col-md-4\">
                    <h3>Clients</h3>
                    <p>Duden flows by their place and supplies it
                        with the necessary regelialia. It is a paradisem country, in which roasted parts of sentences
                        into your mouth.
                    </p>

                </div>
                <div class=\"col-md-8\">
                    <div class=\"row\">
                        <div class=\"clients\">
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/1.jpg\" alt=\"client1\"></a></div>
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/2.jpg\" alt=\"client1\"></a></div>
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/3.jpg\" alt=\"client1\"></a></div>
                            <div class=\"col-xs-12 col-sm-3 col-md-3\"><a href=\"#\"><img src=\"img/clients/4.jpg\" alt=\"client1\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"spacer60\"></div>

        <div class=\"f-bg big-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <h3>Hot Items</h3>
                        <div class=\"related-items-slider\">
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/1.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/3.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/5.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"related-item-container\">
                                    <div class=\"related-item-media\">
                                        <img src=\"img/car-detail/6.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"related-item-content\">
                                        <div class=\"title\">Mazda MX5</div>
                                        <ul class=\"list-4\">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <div class=\"price\">\$ 200,000</div>
                                        <a href=\"#\" class=\"btn btn-default\" role=\"button\">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

{% endblock body %}", "PIPIBundle:PI:Annonces.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\PIBundle/Resources/views/PI/Annonces.html.twig");
    }
}

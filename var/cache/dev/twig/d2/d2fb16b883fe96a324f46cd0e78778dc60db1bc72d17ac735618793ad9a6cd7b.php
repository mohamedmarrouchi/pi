<?php

/* @PIPI/PI/contact.twig */
class __TwigTemplate_e289aa51dd355a587cade97422599cbbdf5959890e66f8fb40e8126cc68a383c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIPI/PI/contact.twig", 1);
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
        $__internal_81fc4629041d224ab5f0fea0da3fba69d75a3ffa4ec24091077bf3283e4c0d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fc4629041d224ab5f0fea0da3fba69d75a3ffa4ec24091077bf3283e4c0d95->enter($__internal_81fc4629041d224ab5f0fea0da3fba69d75a3ffa4ec24091077bf3283e4c0d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIPI/PI/contact.twig"));

        $__internal_2fb69c18ac83d347b51731c5b0dbdde2f24366cfb28d614bf24dfd6cbeac8551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb69c18ac83d347b51731c5b0dbdde2f24366cfb28d614bf24dfd6cbeac8551->enter($__internal_2fb69c18ac83d347b51731c5b0dbdde2f24366cfb28d614bf24dfd6cbeac8551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIPI/PI/contact.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fc4629041d224ab5f0fea0da3fba69d75a3ffa4ec24091077bf3283e4c0d95->leave($__internal_81fc4629041d224ab5f0fea0da3fba69d75a3ffa4ec24091077bf3283e4c0d95_prof);

        
        $__internal_2fb69c18ac83d347b51731c5b0dbdde2f24366cfb28d614bf24dfd6cbeac8551->leave($__internal_2fb69c18ac83d347b51731c5b0dbdde2f24366cfb28d614bf24dfd6cbeac8551_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0160e6a72f315d1387d8dadb949fe4323c357d7552a41ebdb7b35555eebd0e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0160e6a72f315d1387d8dadb949fe4323c357d7552a41ebdb7b35555eebd0e6f->enter($__internal_0160e6a72f315d1387d8dadb949fe4323c357d7552a41ebdb7b35555eebd0e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc204c42ef07ca8d7323ba3b3deffa9689fb39505973562aa362320405897950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc204c42ef07ca8d7323ba3b3deffa9689fb39505973562aa362320405897950->enter($__internal_cc204c42ef07ca8d7323ba3b3deffa9689fb39505973562aa362320405897950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body class=\"no-main-slider\">

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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"Home\" class=\"logo pull-left\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    <!-- logo ends -->

                    <!-- Menu -->
                    <ul class=\"nav pull-left\" id=\"nav\">
                        <li class=\"selected\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"\">Home</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Annonces");
        echo "\" title=\"\">Catalog</a>
                            <ul>
                                <li><a href=\"catalog-right.html\">Right sidebar</a></li>
                                <li><a href=\"catalog-left.html\">Left sidebar</a></li>
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
                        <li class=\"selected\"><a href=\"contact.html\" title=\"\">Contact</a></li>
                    </ul>
                    <!-- Menu ends -->
                    <div class=\"menu-right-bar\">
                        <ul class=\"menu-right-bar-ul\">
                            <li class=\"text hidden-sm hidden-xs\">1-800-555-6789</li>
                            <li><a href=\"shop-cart.html\" class=\"button btn btn-primary\" role=\"button\"><i class=\"fa fa-shopping-cart\"></i> (2)</a></li>
                            ";
        // line 92
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "                                Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                -
                                <a href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                            ";
        } else {
            // line 97
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                            ";
        }
        // line 98
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


    <div class=\"spacer60\"></div>


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
    <div class=\"spacer30\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">

                <div class=\"r-bg\">
                    <form role=\"form\" name=\"ajax-form\" id=\"ajax-form\" action=\"http://www.entiri.net/troy/1.1/php/mail-it.php\" method=\"post\" class=\"form-main\">


                        <div class=\"row\">
                            <div class=\"form-group col-xs-6\">
                                <label for=\"name2\">Name</label>
                                <input class=\"form-control input-lg\" id=\"name2\" name=\"name\" onblur=\"if(this.value == '') this.value='Name'\" onfocus=\"if(this.value == 'Name') this.value=''\" type=\"text\" value=\"Name\">
                                <div class=\"error\" id=\"err-name\" style=\"display: none;\">Please enter name</div>
                            </div>
                            <div class=\"form-group col-xs-6\">
                                <label for=\"email2\">Email</label>
                                <input class=\"form-control input-lg\" id=\"email2\" name=\"email\" type=\"text\" onfocus=\"if(this.value == 'E-mail') this.value='';\" onblur=\"if(this.value == '') this.value='E-mail';\" value=\"E-mail\">
                                <div class=\"error\" id=\"err-emailvld\" style=\"display: none;\">E-mail is not a valid format</div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <label for=\"message2\">Message</label>
                                <textarea class=\"form-control\" id=\"message2\" name=\"message\" onblur=\"if(this.value == '') this.value='Message'\" onfocus=\"if(this.value == 'Message') this.value=''\">Message</textarea>
                                <div class=\"error\" id=\"err-message\" style=\"display: none;\">Please enter message</div>

                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div id=\"ajaxsuccess\">E-mail was successfully sent.</div>
                                <div class=\"error\" id=\"err-form\" style=\"display: none;\">There was a problem validating the form please check!</div>
                                <div class=\"error\" id=\"err-timedout\">The connection to the server timed out!</div>
                                <div class=\"error\" id=\"err-state\"></div>

                                <button type=\"submit\" class=\"btn btn-default\" id=\"send\">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"col-sm-4\">
                <div class=\"r-bg\">
                    <h3>Office Hours</h3>
                    <ul class=\"list-1\">
                        <li><strong>Monday - Friday:</strong> 07:00 - 19:00</li>
                        <li><strong>Saturday:</strong> 07:00 - 11:00</li>
                        <li><strong>Sunday:</strong> closed</li>
                    </ul>
                </div>
                <div class=\"r-bg\">
                    <h3>Share</h3>
                    <ul class=\"colored-social-icons\">
                        <li><a href=\"#\" rel=\"external\" class=\"facebook\"><i class=\"fa fa-facebook\"></i>136</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i>15</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"twitter\"><i class=\"fa fa-twitter\"></i>24</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"pinterest\"><i class=\"fa fa-pinterest\"></i>31</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"youtube\"><i class=\"fa fa-youtube\"></i>60</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"dribbble\"><i class=\"fa fa-dribbble\"></i>125</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"tumblr\"><i class=\"fa fa-tumblr\"></i>201</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"instagram\"><i class=\"fa fa-instagram\"></i>305</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>


    <div class=\"spacer60\"></div>
    <iframe class=\"google-map\" src=\"https://maps.google.sk/maps/ms?msa=0&amp;msid=210946297010027755543.0004c74af772bb9276d33&amp;ie=UTF8&amp;ll=48.576981,19.13117&amp;spn=0,0&amp;t=m&amp;output=embed\"></iframe>


    <div class=\"hero-unit\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"div-table\">
                        <div class=\"div-table-cell\">
                            <div class=\"hero-text\">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those.</div>
                        </div>
                        <div class=\"div-table-cell\">
                            <button class=\"btn btn-lg btn-primary\">Purchase</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> <!-- section ends -->




</body>

<!-- Mirrored from www.entiri.net/troy/1.1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2017 21:58:16 GMT -->
</html>
";
        
        $__internal_cc204c42ef07ca8d7323ba3b3deffa9689fb39505973562aa362320405897950->leave($__internal_cc204c42ef07ca8d7323ba3b3deffa9689fb39505973562aa362320405897950_prof);

        
        $__internal_0160e6a72f315d1387d8dadb949fe4323c357d7552a41ebdb7b35555eebd0e6f->leave($__internal_0160e6a72f315d1387d8dadb949fe4323c357d7552a41ebdb7b35555eebd0e6f_prof);

    }

    public function getTemplateName()
    {
        return "@PIPI/PI/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 98,  163 => 97,  158 => 95,  152 => 93,  150 => 92,  95 => 40,  91 => 39,  81 => 34,  49 => 4,  40 => 3,  11 => 1,);
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
                    <a href=\"{{ path('home') }}\" title=\"Home\" class=\"logo pull-left\"><img src=\"{{ asset ('template/img/logo.png')}}\" alt=\"logo\"></a>
                    <!-- logo ends -->

                    <!-- Menu -->
                    <ul class=\"nav pull-left\" id=\"nav\">
                        <li class=\"selected\"><a href=\"{{ path('home') }}\" title=\"\">Home</a></li>
                        <li><a href=\"{{ path('Annonces') }}\" title=\"\">Catalog</a>
                            <ul>
                                <li><a href=\"catalog-right.html\">Right sidebar</a></li>
                                <li><a href=\"catalog-left.html\">Left sidebar</a></li>
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
                        <li class=\"selected\"><a href=\"contact.html\" title=\"\">Contact</a></li>
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


    <div class=\"spacer60\"></div>


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
    <div class=\"spacer30\"></div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">

                <div class=\"r-bg\">
                    <form role=\"form\" name=\"ajax-form\" id=\"ajax-form\" action=\"http://www.entiri.net/troy/1.1/php/mail-it.php\" method=\"post\" class=\"form-main\">


                        <div class=\"row\">
                            <div class=\"form-group col-xs-6\">
                                <label for=\"name2\">Name</label>
                                <input class=\"form-control input-lg\" id=\"name2\" name=\"name\" onblur=\"if(this.value == '') this.value='Name'\" onfocus=\"if(this.value == 'Name') this.value=''\" type=\"text\" value=\"Name\">
                                <div class=\"error\" id=\"err-name\" style=\"display: none;\">Please enter name</div>
                            </div>
                            <div class=\"form-group col-xs-6\">
                                <label for=\"email2\">Email</label>
                                <input class=\"form-control input-lg\" id=\"email2\" name=\"email\" type=\"text\" onfocus=\"if(this.value == 'E-mail') this.value='';\" onblur=\"if(this.value == '') this.value='E-mail';\" value=\"E-mail\">
                                <div class=\"error\" id=\"err-emailvld\" style=\"display: none;\">E-mail is not a valid format</div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <label for=\"message2\">Message</label>
                                <textarea class=\"form-control\" id=\"message2\" name=\"message\" onblur=\"if(this.value == '') this.value='Message'\" onfocus=\"if(this.value == 'Message') this.value=''\">Message</textarea>
                                <div class=\"error\" id=\"err-message\" style=\"display: none;\">Please enter message</div>

                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div id=\"ajaxsuccess\">E-mail was successfully sent.</div>
                                <div class=\"error\" id=\"err-form\" style=\"display: none;\">There was a problem validating the form please check!</div>
                                <div class=\"error\" id=\"err-timedout\">The connection to the server timed out!</div>
                                <div class=\"error\" id=\"err-state\"></div>

                                <button type=\"submit\" class=\"btn btn-default\" id=\"send\">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class=\"col-sm-4\">
                <div class=\"r-bg\">
                    <h3>Office Hours</h3>
                    <ul class=\"list-1\">
                        <li><strong>Monday - Friday:</strong> 07:00 - 19:00</li>
                        <li><strong>Saturday:</strong> 07:00 - 11:00</li>
                        <li><strong>Sunday:</strong> closed</li>
                    </ul>
                </div>
                <div class=\"r-bg\">
                    <h3>Share</h3>
                    <ul class=\"colored-social-icons\">
                        <li><a href=\"#\" rel=\"external\" class=\"facebook\"><i class=\"fa fa-facebook\"></i>136</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i>15</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"twitter\"><i class=\"fa fa-twitter\"></i>24</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"pinterest\"><i class=\"fa fa-pinterest\"></i>31</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"youtube\"><i class=\"fa fa-youtube\"></i>60</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"dribbble\"><i class=\"fa fa-dribbble\"></i>125</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"tumblr\"><i class=\"fa fa-tumblr\"></i>201</a></li>
                        <li><a href=\"#\" rel=\"external\" class=\"instagram\"><i class=\"fa fa-instagram\"></i>305</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>


    <div class=\"spacer60\"></div>
    <iframe class=\"google-map\" src=\"https://maps.google.sk/maps/ms?msa=0&amp;msid=210946297010027755543.0004c74af772bb9276d33&amp;ie=UTF8&amp;ll=48.576981,19.13117&amp;spn=0,0&amp;t=m&amp;output=embed\"></iframe>


    <div class=\"hero-unit\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"div-table\">
                        <div class=\"div-table-cell\">
                            <div class=\"hero-text\">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those.</div>
                        </div>
                        <div class=\"div-table-cell\">
                            <button class=\"btn btn-lg btn-primary\">Purchase</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> <!-- section ends -->




</body>

<!-- Mirrored from www.entiri.net/troy/1.1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2017 21:58:16 GMT -->
</html>
{% endblock body %}", "@PIPI/PI/contact.twig", "C:\\wamp\\www\\PI\\src\\PI\\PIBundle\\Resources\\views\\PI\\contact.twig");
    }
}

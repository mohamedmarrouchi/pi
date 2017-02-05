<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_80755de3fa059160be81caf9995d252e0bcdb52c00c04f7f0b6833143538afb9 extends Twig_Template
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
        $__internal_acccdddadb7b1d7d37a66ed5125940cfb98b13a157a51d6c9a3117d26d2e5b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acccdddadb7b1d7d37a66ed5125940cfb98b13a157a51d6c9a3117d26d2e5b17->enter($__internal_acccdddadb7b1d7d37a66ed5125940cfb98b13a157a51d6c9a3117d26d2e5b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_103f6d8f074f82857106321131d4558ab66992c3684c3fbb96a2d406ccdc475e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103f6d8f074f82857106321131d4558ab66992c3684c3fbb96a2d406ccdc475e->enter($__internal_103f6d8f074f82857106321131d4558ab66992c3684c3fbb96a2d406ccdc475e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_acccdddadb7b1d7d37a66ed5125940cfb98b13a157a51d6c9a3117d26d2e5b17->leave($__internal_acccdddadb7b1d7d37a66ed5125940cfb98b13a157a51d6c9a3117d26d2e5b17_prof);

        
        $__internal_103f6d8f074f82857106321131d4558ab66992c3684c3fbb96a2d406ccdc475e->leave($__internal_103f6d8f074f82857106321131d4558ab66992c3684c3fbb96a2d406ccdc475e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6779f573c7008f8d9b7fe66a2499a005dd9e4e52e60f640c0c1a7f34ab82825e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6779f573c7008f8d9b7fe66a2499a005dd9e4e52e60f640c0c1a7f34ab82825e->enter($__internal_6779f573c7008f8d9b7fe66a2499a005dd9e4e52e60f640c0c1a7f34ab82825e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4fd2ef19778e8146ad66a03eeb2c9556d2cebee72828de1d5bad261664268ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fd2ef19778e8146ad66a03eeb2c9556d2cebee72828de1d5bad261664268ab->enter($__internal_e4fd2ef19778e8146ad66a03eeb2c9556d2cebee72828de1d5bad261664268ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body class=\"no-main-slider\">

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
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"Home\" class=\"logo pull-left\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                <!-- logo ends -->

                <!-- Menu -->
                <ul class=\"nav pull-left\" id=\"nav\">
                    <li class=\"selected\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" title=\"\">Home</a></li>
                    <li><a href=\"";
        // line 39
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
        // line 91
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "                            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                            -
                            <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                        ";
        } else {
            // line 96
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                        ";
        }
        // line 97
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
<body>
<center>
<div style=\"padding-top: 100px; padding-bottom: 200px; padding-left: 40%\">
    <div class=\"col-xs-4\">
<form action=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <input type=\"text\"class=\"form-control \" id=\"username\" name=\"username\" required=\"required\" /></br>

    </div>
    <div id=\"btn\">
        <input type=\"submit\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

</form>
</div>
    </div>
    </center>
    </body>

";
        
        $__internal_e4fd2ef19778e8146ad66a03eeb2c9556d2cebee72828de1d5bad261664268ab->leave($__internal_e4fd2ef19778e8146ad66a03eeb2c9556d2cebee72828de1d5bad261664268ab_prof);

        
        $__internal_6779f573c7008f8d9b7fe66a2499a005dd9e4e52e60f640c0c1a7f34ab82825e->leave($__internal_6779f573c7008f8d9b7fe66a2499a005dd9e4e52e60f640c0c1a7f34ab82825e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 140,  206 => 134,  201 => 132,  164 => 97,  158 => 96,  153 => 94,  147 => 92,  145 => 91,  90 => 39,  86 => 38,  76 => 33,  44 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
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
<body>
<center>
<div style=\"padding-top: 100px; padding-bottom: 200px; padding-left: 40%\">
    <div class=\"col-xs-4\">
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>

        <input type=\"text\"class=\"form-control \" id=\"username\" name=\"username\" required=\"required\" /></br>

    </div>
    <div id=\"btn\">
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>

</form>
</div>
    </div>
    </center>
    </body>

{% endblock body %}", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}

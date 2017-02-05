<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4548dc2367ee1c1116401af15152d042b9d80fe250a14145f7dd513dc9fcdf96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b1db26ec0ed13561dadec551e07dc93c1f6ebaa187e335b3bb2220a8c95e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b1db26ec0ed13561dadec551e07dc93c1f6ebaa187e335b3bb2220a8c95e04->enter($__internal_a9b1db26ec0ed13561dadec551e07dc93c1f6ebaa187e335b3bb2220a8c95e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1cfcba584b6e278c7573d1d93cdaf33068196bdf37fc1782945a29666b5437b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfcba584b6e278c7573d1d93cdaf33068196bdf37fc1782945a29666b5437b7->enter($__internal_1cfcba584b6e278c7573d1d93cdaf33068196bdf37fc1782945a29666b5437b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b1db26ec0ed13561dadec551e07dc93c1f6ebaa187e335b3bb2220a8c95e04->leave($__internal_a9b1db26ec0ed13561dadec551e07dc93c1f6ebaa187e335b3bb2220a8c95e04_prof);

        
        $__internal_1cfcba584b6e278c7573d1d93cdaf33068196bdf37fc1782945a29666b5437b7->leave($__internal_1cfcba584b6e278c7573d1d93cdaf33068196bdf37fc1782945a29666b5437b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a1e33882be12e023e68a4102200b20904d7afa4cabebf5816a0709712203c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1e33882be12e023e68a4102200b20904d7afa4cabebf5816a0709712203c68->enter($__internal_1a1e33882be12e023e68a4102200b20904d7afa4cabebf5816a0709712203c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0672f9268d0d19b124b968c854d15029825250f9303d65113c952945384cf05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0672f9268d0d19b124b968c854d15029825250f9303d65113c952945384cf05f->enter($__internal_0672f9268d0d19b124b968c854d15029825250f9303d65113c952945384cf05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <body>
        <div>
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 12
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"></a>
            ";
        }
        // line 14
        echo "        </div>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <div>
            ";
        // line 25
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 27
        echo "        </div>
        </body>
    ";
        
        $__internal_0672f9268d0d19b124b968c854d15029825250f9303d65113c952945384cf05f->leave($__internal_0672f9268d0d19b124b968c854d15029825250f9303d65113c952945384cf05f_prof);

        
        $__internal_1a1e33882be12e023e68a4102200b20904d7afa4cabebf5816a0709712203c68->leave($__internal_1a1e33882be12e023e68a4102200b20904d7afa4cabebf5816a0709712203c68_prof);

    }

    // line 25
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8776990714ace04ae3489850933922e917f2503fe4d00a98a6acefc2df028d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8776990714ace04ae3489850933922e917f2503fe4d00a98a6acefc2df028d5d->enter($__internal_8776990714ace04ae3489850933922e917f2503fe4d00a98a6acefc2df028d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9e6a9e99a53caf36f13623da43547588fd14e7e1a212d55c3d02b7e3c038788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e6a9e99a53caf36f13623da43547588fd14e7e1a212d55c3d02b7e3c038788->enter($__internal_e9e6a9e99a53caf36f13623da43547588fd14e7e1a212d55c3d02b7e3c038788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 26
        echo "            ";
        
        $__internal_e9e6a9e99a53caf36f13623da43547588fd14e7e1a212d55c3d02b7e3c038788->leave($__internal_e9e6a9e99a53caf36f13623da43547588fd14e7e1a212d55c3d02b7e3c038788_prof);

        
        $__internal_8776990714ace04ae3489850933922e917f2503fe4d00a98a6acefc2df028d5d->leave($__internal_8776990714ace04ae3489850933922e917f2503fe4d00a98a6acefc2df028d5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 26,  128 => 25,  116 => 27,  114 => 25,  110 => 23,  104 => 22,  95 => 19,  90 => 18,  85 => 17,  81 => 16,  77 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    {% extends  'base.html.twig' %}
    {% block body %}
        <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\"></a>
            {% endif %}
        </div>

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
        </body>
    {% endblock body %}
", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}

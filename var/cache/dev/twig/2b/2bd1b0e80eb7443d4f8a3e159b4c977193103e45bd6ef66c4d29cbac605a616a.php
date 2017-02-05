<?php

/* @PIUser/User/layout.html.twig */
class __TwigTemplate_24d21811c37c5c31edf38c43d999706aad7b382c514cc6f8a97e59e508dce617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIUser/User/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0724398bb1079b9ce5da7f574fbb41752f43004ca194958d57bdd9acab759dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0724398bb1079b9ce5da7f574fbb41752f43004ca194958d57bdd9acab759dbb->enter($__internal_0724398bb1079b9ce5da7f574fbb41752f43004ca194958d57bdd9acab759dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/User/layout.html.twig"));

        $__internal_feb5f9f1545909dc19efeea06a716af1a91c3101276b2f4aff3104411dd421cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb5f9f1545909dc19efeea06a716af1a91c3101276b2f4aff3104411dd421cb->enter($__internal_feb5f9f1545909dc19efeea06a716af1a91c3101276b2f4aff3104411dd421cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0724398bb1079b9ce5da7f574fbb41752f43004ca194958d57bdd9acab759dbb->leave($__internal_0724398bb1079b9ce5da7f574fbb41752f43004ca194958d57bdd9acab759dbb_prof);

        
        $__internal_feb5f9f1545909dc19efeea06a716af1a91c3101276b2f4aff3104411dd421cb->leave($__internal_feb5f9f1545909dc19efeea06a716af1a91c3101276b2f4aff3104411dd421cb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1065057f7e8d6a767080e8e0460a8b98a30111abb319d98dbfaea5c4b56b64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1065057f7e8d6a767080e8e0460a8b98a30111abb319d98dbfaea5c4b56b64a->enter($__internal_e1065057f7e8d6a767080e8e0460a8b98a30111abb319d98dbfaea5c4b56b64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_838879b63ec1df5b7d3ba011825e3ccd586000d36bceb9203f5a60e78a02d5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838879b63ec1df5b7d3ba011825e3ccd586000d36bceb9203f5a60e78a02d5f3->enter($__internal_838879b63ec1df5b7d3ba011825e3ccd586000d36bceb9203f5a60e78a02d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<body>
<div>
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 11
            echo "        <input type=\"text\" name=\"\">
        <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 14
        echo "</div>

";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 18
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 20
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "
<div>
    ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "</div>
";
        
        $__internal_838879b63ec1df5b7d3ba011825e3ccd586000d36bceb9203f5a60e78a02d5f3->leave($__internal_838879b63ec1df5b7d3ba011825e3ccd586000d36bceb9203f5a60e78a02d5f3_prof);

        
        $__internal_e1065057f7e8d6a767080e8e0460a8b98a30111abb319d98dbfaea5c4b56b64a->leave($__internal_e1065057f7e8d6a767080e8e0460a8b98a30111abb319d98dbfaea5c4b56b64a_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68d762f2e0f20ba02715fbc5be4008bbe99fb41c1c1b3e0d00f4b006562df641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d762f2e0f20ba02715fbc5be4008bbe99fb41c1c1b3e0d00f4b006562df641->enter($__internal_68d762f2e0f20ba02715fbc5be4008bbe99fb41c1c1b3e0d00f4b006562df641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec0e3ae646bb11cb1db4871b2e67790bab791737bb7bced1e2a50ad84ae9b991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0e3ae646bb11cb1db4871b2e67790bab791737bb7bced1e2a50ad84ae9b991->enter($__internal_ec0e3ae646bb11cb1db4871b2e67790bab791737bb7bced1e2a50ad84ae9b991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "    ";
        
        $__internal_ec0e3ae646bb11cb1db4871b2e67790bab791737bb7bced1e2a50ad84ae9b991->leave($__internal_ec0e3ae646bb11cb1db4871b2e67790bab791737bb7bced1e2a50ad84ae9b991_prof);

        
        $__internal_68d762f2e0f20ba02715fbc5be4008bbe99fb41c1c1b3e0d00f4b006562df641->leave($__internal_68d762f2e0f20ba02715fbc5be4008bbe99fb41c1c1b3e0d00f4b006562df641_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/User/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 28,  135 => 27,  124 => 29,  122 => 27,  118 => 25,  111 => 23,  102 => 20,  97 => 19,  92 => 18,  87 => 17,  85 => 16,  81 => 14,  74 => 12,  71 => 11,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% block content %}
<body>
<div>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <input type=\"text\" name=\"\">
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>

{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}", "@PIUser/User/layout.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\User\\layout.html.twig");
    }
}

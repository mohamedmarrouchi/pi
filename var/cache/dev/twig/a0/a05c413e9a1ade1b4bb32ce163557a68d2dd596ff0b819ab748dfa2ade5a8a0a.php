<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_062d79898528cc0ea0b282a9d3fe127ff174eff067c46ffbe3db0985de2c84f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccfb96ceb4fbcb7dbd3e9b29f9a3fb34ee9370d002025674b0502298f98143d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfb96ceb4fbcb7dbd3e9b29f9a3fb34ee9370d002025674b0502298f98143d8->enter($__internal_ccfb96ceb4fbcb7dbd3e9b29f9a3fb34ee9370d002025674b0502298f98143d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_5626f6c1e7f84edb976f08bf411a17fad63c665b55aaa0eec300db48b8a09986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5626f6c1e7f84edb976f08bf411a17fad63c665b55aaa0eec300db48b8a09986->enter($__internal_5626f6c1e7f84edb976f08bf411a17fad63c665b55aaa0eec300db48b8a09986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ccfb96ceb4fbcb7dbd3e9b29f9a3fb34ee9370d002025674b0502298f98143d8->leave($__internal_ccfb96ceb4fbcb7dbd3e9b29f9a3fb34ee9370d002025674b0502298f98143d8_prof);

        
        $__internal_5626f6c1e7f84edb976f08bf411a17fad63c665b55aaa0eec300db48b8a09986->leave($__internal_5626f6c1e7f84edb976f08bf411a17fad63c665b55aaa0eec300db48b8a09986_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}

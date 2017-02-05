<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_2335daabf56dbee08e55ed1fca87fdf25e3dd6cf25b96da606b98708c4c527a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6400929e375f41e5719316aa50646c5ce5a5bff31d1a5ca44640af74c7222a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6400929e375f41e5719316aa50646c5ce5a5bff31d1a5ca44640af74c7222a1->enter($__internal_a6400929e375f41e5719316aa50646c5ce5a5bff31d1a5ca44640af74c7222a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_b325591d25a5fcf7dc548697224a883bf55a262c19b56034677ff1932e282c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b325591d25a5fcf7dc548697224a883bf55a262c19b56034677ff1932e282c5e->enter($__internal_b325591d25a5fcf7dc548697224a883bf55a262c19b56034677ff1932e282c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6400929e375f41e5719316aa50646c5ce5a5bff31d1a5ca44640af74c7222a1->leave($__internal_a6400929e375f41e5719316aa50646c5ce5a5bff31d1a5ca44640af74c7222a1_prof);

        
        $__internal_b325591d25a5fcf7dc548697224a883bf55a262c19b56034677ff1932e282c5e->leave($__internal_b325591d25a5fcf7dc548697224a883bf55a262c19b56034677ff1932e282c5e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d65de15afe51538ba93f9a122e99f277517347c3e95a3f63b2c8cf792e0cd0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65de15afe51538ba93f9a122e99f277517347c3e95a3f63b2c8cf792e0cd0eb->enter($__internal_d65de15afe51538ba93f9a122e99f277517347c3e95a3f63b2c8cf792e0cd0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e8bd422dbf1a51d798829ea782729dd3455e383068964935b502f1e233ee59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8bd422dbf1a51d798829ea782729dd3455e383068964935b502f1e233ee59e->enter($__internal_5e8bd422dbf1a51d798829ea782729dd3455e383068964935b502f1e233ee59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5e8bd422dbf1a51d798829ea782729dd3455e383068964935b502f1e233ee59e->leave($__internal_5e8bd422dbf1a51d798829ea782729dd3455e383068964935b502f1e233ee59e_prof);

        
        $__internal_d65de15afe51538ba93f9a122e99f277517347c3e95a3f63b2c8cf792e0cd0eb->leave($__internal_d65de15afe51538ba93f9a122e99f277517347c3e95a3f63b2c8cf792e0cd0eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}

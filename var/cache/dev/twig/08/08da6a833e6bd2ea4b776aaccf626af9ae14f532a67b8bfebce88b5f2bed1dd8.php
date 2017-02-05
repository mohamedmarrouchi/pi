<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_98a9f5d1a5f7c5aabbabe3548badccf95e3d1ebb0b97ed4bcb89fdb31b0003cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b47314c8f7527a40875c8cef0ff78e1ba8f457c98fd527c16ab3ca52eb8af482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47314c8f7527a40875c8cef0ff78e1ba8f457c98fd527c16ab3ca52eb8af482->enter($__internal_b47314c8f7527a40875c8cef0ff78e1ba8f457c98fd527c16ab3ca52eb8af482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5673c803f5955957fd8c29ca4e2e2e2a0779de93d32505d78a0e802f2d120597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5673c803f5955957fd8c29ca4e2e2e2a0779de93d32505d78a0e802f2d120597->enter($__internal_5673c803f5955957fd8c29ca4e2e2e2a0779de93d32505d78a0e802f2d120597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47314c8f7527a40875c8cef0ff78e1ba8f457c98fd527c16ab3ca52eb8af482->leave($__internal_b47314c8f7527a40875c8cef0ff78e1ba8f457c98fd527c16ab3ca52eb8af482_prof);

        
        $__internal_5673c803f5955957fd8c29ca4e2e2e2a0779de93d32505d78a0e802f2d120597->leave($__internal_5673c803f5955957fd8c29ca4e2e2e2a0779de93d32505d78a0e802f2d120597_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_083142f716d8284a755810a8dad01adfa5da80f013f2298082f59e2098bebcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083142f716d8284a755810a8dad01adfa5da80f013f2298082f59e2098bebcfc->enter($__internal_083142f716d8284a755810a8dad01adfa5da80f013f2298082f59e2098bebcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_511df6548f375fed35ba2099bcb654664c123f75da720e88e53832d23cce974b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511df6548f375fed35ba2099bcb654664c123f75da720e88e53832d23cce974b->enter($__internal_511df6548f375fed35ba2099bcb654664c123f75da720e88e53832d23cce974b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_511df6548f375fed35ba2099bcb654664c123f75da720e88e53832d23cce974b->leave($__internal_511df6548f375fed35ba2099bcb654664c123f75da720e88e53832d23cce974b_prof);

        
        $__internal_083142f716d8284a755810a8dad01adfa5da80f013f2298082f59e2098bebcfc->leave($__internal_083142f716d8284a755810a8dad01adfa5da80f013f2298082f59e2098bebcfc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\PI\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

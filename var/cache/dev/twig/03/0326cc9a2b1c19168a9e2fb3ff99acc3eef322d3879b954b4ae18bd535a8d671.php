<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_1230c169ef2a21bae2d8ccfd36e58a82ad0aeb5cbce0c2521848617bb4028c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e37c92febcb4d967753d666191538fc326ce9f7c929560a3332ccf45015eb926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37c92febcb4d967753d666191538fc326ce9f7c929560a3332ccf45015eb926->enter($__internal_e37c92febcb4d967753d666191538fc326ce9f7c929560a3332ccf45015eb926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_538d6bcfbdbef62f77d1cdb7d15cec9897b0506e06015a7d7a97d6ed6225ed60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538d6bcfbdbef62f77d1cdb7d15cec9897b0506e06015a7d7a97d6ed6225ed60->enter($__internal_538d6bcfbdbef62f77d1cdb7d15cec9897b0506e06015a7d7a97d6ed6225ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37c92febcb4d967753d666191538fc326ce9f7c929560a3332ccf45015eb926->leave($__internal_e37c92febcb4d967753d666191538fc326ce9f7c929560a3332ccf45015eb926_prof);

        
        $__internal_538d6bcfbdbef62f77d1cdb7d15cec9897b0506e06015a7d7a97d6ed6225ed60->leave($__internal_538d6bcfbdbef62f77d1cdb7d15cec9897b0506e06015a7d7a97d6ed6225ed60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_712cb4608afb02fd96b63d416c66acaf77a8ed833a3023ea04b46d759fcfa7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712cb4608afb02fd96b63d416c66acaf77a8ed833a3023ea04b46d759fcfa7fb->enter($__internal_712cb4608afb02fd96b63d416c66acaf77a8ed833a3023ea04b46d759fcfa7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_191a9e33627df0183fb6da08a6a202729a0f1865197e8e8ddff7fe2bfba81d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191a9e33627df0183fb6da08a6a202729a0f1865197e8e8ddff7fe2bfba81d0a->enter($__internal_191a9e33627df0183fb6da08a6a202729a0f1865197e8e8ddff7fe2bfba81d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_191a9e33627df0183fb6da08a6a202729a0f1865197e8e8ddff7fe2bfba81d0a->leave($__internal_191a9e33627df0183fb6da08a6a202729a0f1865197e8e8ddff7fe2bfba81d0a_prof);

        
        $__internal_712cb4608afb02fd96b63d416c66acaf77a8ed833a3023ea04b46d759fcfa7fb->leave($__internal_712cb4608afb02fd96b63d416c66acaf77a8ed833a3023ea04b46d759fcfa7fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}

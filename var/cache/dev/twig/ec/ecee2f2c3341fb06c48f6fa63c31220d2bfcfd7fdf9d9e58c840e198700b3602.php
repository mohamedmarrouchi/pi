<?php

/* PIBundle:Default:home.html.twig */
class __TwigTemplate_65df3444a6ea59f33dc35aabe22647e3928eb934b922cdf67edd90acaabddd35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIBundle:Default:home.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efb149bef3d18f49fce0b573a02ecf0074a060461f9362f4fe3f49e7d0e88f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb149bef3d18f49fce0b573a02ecf0074a060461f9362f4fe3f49e7d0e88f60->enter($__internal_efb149bef3d18f49fce0b573a02ecf0074a060461f9362f4fe3f49e7d0e88f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIBundle:Default:home.html.twig"));

        $__internal_4a52d4a0f91bc99f78004ee0f6a7155d8d472cb77e239ed07a7599a4dc70fa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a52d4a0f91bc99f78004ee0f6a7155d8d472cb77e239ed07a7599a4dc70fa9d->enter($__internal_4a52d4a0f91bc99f78004ee0f6a7155d8d472cb77e239ed07a7599a4dc70fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb149bef3d18f49fce0b573a02ecf0074a060461f9362f4fe3f49e7d0e88f60->leave($__internal_efb149bef3d18f49fce0b573a02ecf0074a060461f9362f4fe3f49e7d0e88f60_prof);

        
        $__internal_4a52d4a0f91bc99f78004ee0f6a7155d8d472cb77e239ed07a7599a4dc70fa9d->leave($__internal_4a52d4a0f91bc99f78004ee0f6a7155d8d472cb77e239ed07a7599a4dc70fa9d_prof);

    }

    public function getTemplateName()
    {
        return "PIBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}", "PIBundle:Default:home.html.twig", "C:\\wamp\\www\\PI\\src\\PIBundle/Resources/views/Default/home.html.twig");
    }
}

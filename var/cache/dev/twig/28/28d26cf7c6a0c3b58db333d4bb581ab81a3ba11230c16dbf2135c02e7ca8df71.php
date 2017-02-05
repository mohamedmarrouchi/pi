<?php

/* @PIPI/PI/home.html.twig */
class __TwigTemplate_d3929f206a1c24400ca3cf540831c555134b76ff1cc38f5637fcd8b5e25383a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIPI/PI/home.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24a3259b1e9f005886eda31509d20e1ffb4810373d9052af91712e6f9000ebcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a3259b1e9f005886eda31509d20e1ffb4810373d9052af91712e6f9000ebcc->enter($__internal_24a3259b1e9f005886eda31509d20e1ffb4810373d9052af91712e6f9000ebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIPI/PI/home.html.twig"));

        $__internal_12427f82a3435db459ff99e1564c39a3b9e155b7af7be67502331a7fd05c0ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12427f82a3435db459ff99e1564c39a3b9e155b7af7be67502331a7fd05c0ea8->enter($__internal_12427f82a3435db459ff99e1564c39a3b9e155b7af7be67502331a7fd05c0ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIPI/PI/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a3259b1e9f005886eda31509d20e1ffb4810373d9052af91712e6f9000ebcc->leave($__internal_24a3259b1e9f005886eda31509d20e1ffb4810373d9052af91712e6f9000ebcc_prof);

        
        $__internal_12427f82a3435db459ff99e1564c39a3b9e155b7af7be67502331a7fd05c0ea8->leave($__internal_12427f82a3435db459ff99e1564c39a3b9e155b7af7be67502331a7fd05c0ea8_prof);

    }

    public function getTemplateName()
    {
        return "@PIPI/PI/home.html.twig";
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
        return new Twig_Source("{% extends '::base.html.twig' %}", "@PIPI/PI/home.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\PIBundle\\Resources\\views\\PI\\home.html.twig");
    }
}

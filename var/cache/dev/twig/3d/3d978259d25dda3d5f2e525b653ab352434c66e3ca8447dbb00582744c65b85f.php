<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_d5a01d4ccb01416f29d68c5426d54cc2869df61543a39fc611dd984020316ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_cc6009f2f912e5a7b39a97be27187702e9a065278928810f1e1bfacf7a4738a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6009f2f912e5a7b39a97be27187702e9a065278928810f1e1bfacf7a4738a0->enter($__internal_cc6009f2f912e5a7b39a97be27187702e9a065278928810f1e1bfacf7a4738a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_41343d45e316b05f7cf69dce1d3577787c94b5c8a061c3d3d2be4ed84e55665e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41343d45e316b05f7cf69dce1d3577787c94b5c8a061c3d3d2be4ed84e55665e->enter($__internal_41343d45e316b05f7cf69dce1d3577787c94b5c8a061c3d3d2be4ed84e55665e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6009f2f912e5a7b39a97be27187702e9a065278928810f1e1bfacf7a4738a0->leave($__internal_cc6009f2f912e5a7b39a97be27187702e9a065278928810f1e1bfacf7a4738a0_prof);

        
        $__internal_41343d45e316b05f7cf69dce1d3577787c94b5c8a061c3d3d2be4ed84e55665e->leave($__internal_41343d45e316b05f7cf69dce1d3577787c94b5c8a061c3d3d2be4ed84e55665e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a641d52d4939e141a0f7be01c2c84b9d7fe10d2a9e84483107312b0fcb9993d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a641d52d4939e141a0f7be01c2c84b9d7fe10d2a9e84483107312b0fcb9993d3->enter($__internal_a641d52d4939e141a0f7be01c2c84b9d7fe10d2a9e84483107312b0fcb9993d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_93074ce291993f547357c29347b8a94792d97210ef495974e64184f8450f844e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93074ce291993f547357c29347b8a94792d97210ef495974e64184f8450f844e->enter($__internal_93074ce291993f547357c29347b8a94792d97210ef495974e64184f8450f844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_93074ce291993f547357c29347b8a94792d97210ef495974e64184f8450f844e->leave($__internal_93074ce291993f547357c29347b8a94792d97210ef495974e64184f8450f844e_prof);

        
        $__internal_a641d52d4939e141a0f7be01c2c84b9d7fe10d2a9e84483107312b0fcb9993d3->leave($__internal_a641d52d4939e141a0f7be01c2c84b9d7fe10d2a9e84483107312b0fcb9993d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}

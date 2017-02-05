<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d6ef226d7eeca4301fb0dae396cbd7029f22c64d19091af30d1d3f7511075331 extends Twig_Template
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
        $__internal_5c924ff23e077e52ee06b00ae119b0f4f5bcca2e997c2b24b15ced7064f1def1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c924ff23e077e52ee06b00ae119b0f4f5bcca2e997c2b24b15ced7064f1def1->enter($__internal_5c924ff23e077e52ee06b00ae119b0f4f5bcca2e997c2b24b15ced7064f1def1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2d4a23b197d3397bf1fb97433d5ce6782edbbccfaa381802b7de5ab821dd0178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4a23b197d3397bf1fb97433d5ce6782edbbccfaa381802b7de5ab821dd0178->enter($__internal_2d4a23b197d3397bf1fb97433d5ce6782edbbccfaa381802b7de5ab821dd0178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c924ff23e077e52ee06b00ae119b0f4f5bcca2e997c2b24b15ced7064f1def1->leave($__internal_5c924ff23e077e52ee06b00ae119b0f4f5bcca2e997c2b24b15ced7064f1def1_prof);

        
        $__internal_2d4a23b197d3397bf1fb97433d5ce6782edbbccfaa381802b7de5ab821dd0178->leave($__internal_2d4a23b197d3397bf1fb97433d5ce6782edbbccfaa381802b7de5ab821dd0178_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c382722c6cc338fbd84df13774a6bac953e836d0c756165cac637594cd86089f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c382722c6cc338fbd84df13774a6bac953e836d0c756165cac637594cd86089f->enter($__internal_c382722c6cc338fbd84df13774a6bac953e836d0c756165cac637594cd86089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4305fa4b4a7ff90180dc9086e953a48e540d159a78a687907b17322385e16b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4305fa4b4a7ff90180dc9086e953a48e540d159a78a687907b17322385e16b47->enter($__internal_4305fa4b4a7ff90180dc9086e953a48e540d159a78a687907b17322385e16b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4305fa4b4a7ff90180dc9086e953a48e540d159a78a687907b17322385e16b47->leave($__internal_4305fa4b4a7ff90180dc9086e953a48e540d159a78a687907b17322385e16b47_prof);

        
        $__internal_c382722c6cc338fbd84df13774a6bac953e836d0c756165cac637594cd86089f->leave($__internal_c382722c6cc338fbd84df13774a6bac953e836d0c756165cac637594cd86089f_prof);

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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

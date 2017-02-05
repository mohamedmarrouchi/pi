<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b570550bdcdbd5dccaedc9d8e12be851cb7570b332baba0d7e6e81fed88d236c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_5cd5d5ea7d084e29e8ebe353f488737435f9927e0ea51a0cede2d6ac4d20c6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd5d5ea7d084e29e8ebe353f488737435f9927e0ea51a0cede2d6ac4d20c6a5->enter($__internal_5cd5d5ea7d084e29e8ebe353f488737435f9927e0ea51a0cede2d6ac4d20c6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_1c67d47f1a0673a8e8cec76f65c0e3ac258a478001e365bf46897dc2aefbae9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c67d47f1a0673a8e8cec76f65c0e3ac258a478001e365bf46897dc2aefbae9b->enter($__internal_1c67d47f1a0673a8e8cec76f65c0e3ac258a478001e365bf46897dc2aefbae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd5d5ea7d084e29e8ebe353f488737435f9927e0ea51a0cede2d6ac4d20c6a5->leave($__internal_5cd5d5ea7d084e29e8ebe353f488737435f9927e0ea51a0cede2d6ac4d20c6a5_prof);

        
        $__internal_1c67d47f1a0673a8e8cec76f65c0e3ac258a478001e365bf46897dc2aefbae9b->leave($__internal_1c67d47f1a0673a8e8cec76f65c0e3ac258a478001e365bf46897dc2aefbae9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49690ba4aa5d1b6f8f7b780977f9dbb31379ce94b04de956f83b0fe981c66940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49690ba4aa5d1b6f8f7b780977f9dbb31379ce94b04de956f83b0fe981c66940->enter($__internal_49690ba4aa5d1b6f8f7b780977f9dbb31379ce94b04de956f83b0fe981c66940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c3925ff158fbfd0a81af133fa5124bca1affb5a4b5522445e97f9ca7084a350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3925ff158fbfd0a81af133fa5124bca1affb5a4b5522445e97f9ca7084a350->enter($__internal_5c3925ff158fbfd0a81af133fa5124bca1affb5a4b5522445e97f9ca7084a350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5c3925ff158fbfd0a81af133fa5124bca1affb5a4b5522445e97f9ca7084a350->leave($__internal_5c3925ff158fbfd0a81af133fa5124bca1affb5a4b5522445e97f9ca7084a350_prof);

        
        $__internal_49690ba4aa5d1b6f8f7b780977f9dbb31379ce94b04de956f83b0fe981c66940->leave($__internal_49690ba4aa5d1b6f8f7b780977f9dbb31379ce94b04de956f83b0fe981c66940_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\PI\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}

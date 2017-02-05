<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_80df8aa286518bd081f3d4cf78cee2264362ec1f05d04f97b032368ad5904f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_c372e624501ff96ab1de2f5a891f6c6028f4b167236512fac378d766136a0aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c372e624501ff96ab1de2f5a891f6c6028f4b167236512fac378d766136a0aba->enter($__internal_c372e624501ff96ab1de2f5a891f6c6028f4b167236512fac378d766136a0aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_cd17ed211559bbc55936e5948a596c1ea2ccb9557404b173b40fbf7cb8454f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd17ed211559bbc55936e5948a596c1ea2ccb9557404b173b40fbf7cb8454f4b->enter($__internal_cd17ed211559bbc55936e5948a596c1ea2ccb9557404b173b40fbf7cb8454f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c372e624501ff96ab1de2f5a891f6c6028f4b167236512fac378d766136a0aba->leave($__internal_c372e624501ff96ab1de2f5a891f6c6028f4b167236512fac378d766136a0aba_prof);

        
        $__internal_cd17ed211559bbc55936e5948a596c1ea2ccb9557404b173b40fbf7cb8454f4b->leave($__internal_cd17ed211559bbc55936e5948a596c1ea2ccb9557404b173b40fbf7cb8454f4b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_830c0c8a08d2191749bc971be1f4aa8c4b14672cab3aec54b07ed13a8b063b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830c0c8a08d2191749bc971be1f4aa8c4b14672cab3aec54b07ed13a8b063b56->enter($__internal_830c0c8a08d2191749bc971be1f4aa8c4b14672cab3aec54b07ed13a8b063b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2622f7ef06afb51328f28cad06869032b9a6ed9dbc322cae6379a142decb121b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2622f7ef06afb51328f28cad06869032b9a6ed9dbc322cae6379a142decb121b->enter($__internal_2622f7ef06afb51328f28cad06869032b9a6ed9dbc322cae6379a142decb121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2622f7ef06afb51328f28cad06869032b9a6ed9dbc322cae6379a142decb121b->leave($__internal_2622f7ef06afb51328f28cad06869032b9a6ed9dbc322cae6379a142decb121b_prof);

        
        $__internal_830c0c8a08d2191749bc971be1f4aa8c4b14672cab3aec54b07ed13a8b063b56->leave($__internal_830c0c8a08d2191749bc971be1f4aa8c4b14672cab3aec54b07ed13a8b063b56_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}

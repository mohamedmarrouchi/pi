<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c614227fa421cf872787307b7d9bfc18b1f3598ca26536e58d840c3764d91059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_bc84bf81d69f1e00c369ebf00f0e401746bb024349e3c66f5bf356ee88c1a842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc84bf81d69f1e00c369ebf00f0e401746bb024349e3c66f5bf356ee88c1a842->enter($__internal_bc84bf81d69f1e00c369ebf00f0e401746bb024349e3c66f5bf356ee88c1a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_bc545093e9b7d45132e1bf3cd8431494d0f901722c6ae8a321b7639843a4c260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc545093e9b7d45132e1bf3cd8431494d0f901722c6ae8a321b7639843a4c260->enter($__internal_bc545093e9b7d45132e1bf3cd8431494d0f901722c6ae8a321b7639843a4c260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc84bf81d69f1e00c369ebf00f0e401746bb024349e3c66f5bf356ee88c1a842->leave($__internal_bc84bf81d69f1e00c369ebf00f0e401746bb024349e3c66f5bf356ee88c1a842_prof);

        
        $__internal_bc545093e9b7d45132e1bf3cd8431494d0f901722c6ae8a321b7639843a4c260->leave($__internal_bc545093e9b7d45132e1bf3cd8431494d0f901722c6ae8a321b7639843a4c260_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcbd2ab4f1986ba98fd4c9d93c7e231fafee19af99d5d834229b12c508a619c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbd2ab4f1986ba98fd4c9d93c7e231fafee19af99d5d834229b12c508a619c3->enter($__internal_bcbd2ab4f1986ba98fd4c9d93c7e231fafee19af99d5d834229b12c508a619c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffe947f2be053bcfb93004f55725bd11ea9808279a253bf895eed9b2958b9fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe947f2be053bcfb93004f55725bd11ea9808279a253bf895eed9b2958b9fb2->enter($__internal_ffe947f2be053bcfb93004f55725bd11ea9808279a253bf895eed9b2958b9fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_ffe947f2be053bcfb93004f55725bd11ea9808279a253bf895eed9b2958b9fb2->leave($__internal_ffe947f2be053bcfb93004f55725bd11ea9808279a253bf895eed9b2958b9fb2_prof);

        
        $__internal_bcbd2ab4f1986ba98fd4c9d93c7e231fafee19af99d5d834229b12c508a619c3->leave($__internal_bcbd2ab4f1986ba98fd4c9d93c7e231fafee19af99d5d834229b12c508a619c3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}

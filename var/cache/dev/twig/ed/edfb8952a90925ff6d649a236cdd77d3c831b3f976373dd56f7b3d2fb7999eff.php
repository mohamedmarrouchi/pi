<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20ab53fd590c63c152a057b50391bba3c140fa8643b4c281212f53dc70999c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b802617f36b9ccae9c356b9951739b2f8f86f5f68bbecf74198f6564aaa4cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b802617f36b9ccae9c356b9951739b2f8f86f5f68bbecf74198f6564aaa4cea->enter($__internal_4b802617f36b9ccae9c356b9951739b2f8f86f5f68bbecf74198f6564aaa4cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4b0aa7851607800769686e3c0d3dd08dd4f1a1be966ff8bfc3de6af4462867ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0aa7851607800769686e3c0d3dd08dd4f1a1be966ff8bfc3de6af4462867ba->enter($__internal_4b0aa7851607800769686e3c0d3dd08dd4f1a1be966ff8bfc3de6af4462867ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b802617f36b9ccae9c356b9951739b2f8f86f5f68bbecf74198f6564aaa4cea->leave($__internal_4b802617f36b9ccae9c356b9951739b2f8f86f5f68bbecf74198f6564aaa4cea_prof);

        
        $__internal_4b0aa7851607800769686e3c0d3dd08dd4f1a1be966ff8bfc3de6af4462867ba->leave($__internal_4b0aa7851607800769686e3c0d3dd08dd4f1a1be966ff8bfc3de6af4462867ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b125a6596b0d729cfff512be4872efa1add2d4f316b2b20d45ece2358cb49daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b125a6596b0d729cfff512be4872efa1add2d4f316b2b20d45ece2358cb49daf->enter($__internal_b125a6596b0d729cfff512be4872efa1add2d4f316b2b20d45ece2358cb49daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2681fb268ae0fc098aa581dce00feda8924d571e1c50aa3c2748649f19ad1a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2681fb268ae0fc098aa581dce00feda8924d571e1c50aa3c2748649f19ad1a0a->enter($__internal_2681fb268ae0fc098aa581dce00feda8924d571e1c50aa3c2748649f19ad1a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2681fb268ae0fc098aa581dce00feda8924d571e1c50aa3c2748649f19ad1a0a->leave($__internal_2681fb268ae0fc098aa581dce00feda8924d571e1c50aa3c2748649f19ad1a0a_prof);

        
        $__internal_b125a6596b0d729cfff512be4872efa1add2d4f316b2b20d45ece2358cb49daf->leave($__internal_b125a6596b0d729cfff512be4872efa1add2d4f316b2b20d45ece2358cb49daf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58ea7cc1d3fce22c1ebab810c4187a753be2e38ad0f1c112d85cc20e1a135c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ea7cc1d3fce22c1ebab810c4187a753be2e38ad0f1c112d85cc20e1a135c97->enter($__internal_58ea7cc1d3fce22c1ebab810c4187a753be2e38ad0f1c112d85cc20e1a135c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7aaee5f91bef5989ef80b9941751cc6e0374b2494f4337d6ab9c86929d417754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaee5f91bef5989ef80b9941751cc6e0374b2494f4337d6ab9c86929d417754->enter($__internal_7aaee5f91bef5989ef80b9941751cc6e0374b2494f4337d6ab9c86929d417754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7aaee5f91bef5989ef80b9941751cc6e0374b2494f4337d6ab9c86929d417754->leave($__internal_7aaee5f91bef5989ef80b9941751cc6e0374b2494f4337d6ab9c86929d417754_prof);

        
        $__internal_58ea7cc1d3fce22c1ebab810c4187a753be2e38ad0f1c112d85cc20e1a135c97->leave($__internal_58ea7cc1d3fce22c1ebab810c4187a753be2e38ad0f1c112d85cc20e1a135c97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_760ac3db4f781325eb00130146a691b42028392ce4fa4bc90dbd56abcbb9c45d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760ac3db4f781325eb00130146a691b42028392ce4fa4bc90dbd56abcbb9c45d->enter($__internal_760ac3db4f781325eb00130146a691b42028392ce4fa4bc90dbd56abcbb9c45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f0e91a2f1e7785a4534b4ae1e469c32acbdb17f3163b208da9c0a02c5a96d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0e91a2f1e7785a4534b4ae1e469c32acbdb17f3163b208da9c0a02c5a96d29->enter($__internal_1f0e91a2f1e7785a4534b4ae1e469c32acbdb17f3163b208da9c0a02c5a96d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f0e91a2f1e7785a4534b4ae1e469c32acbdb17f3163b208da9c0a02c5a96d29->leave($__internal_1f0e91a2f1e7785a4534b4ae1e469c32acbdb17f3163b208da9c0a02c5a96d29_prof);

        
        $__internal_760ac3db4f781325eb00130146a691b42028392ce4fa4bc90dbd56abcbb9c45d->leave($__internal_760ac3db4f781325eb00130146a691b42028392ce4fa4bc90dbd56abcbb9c45d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\PI\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

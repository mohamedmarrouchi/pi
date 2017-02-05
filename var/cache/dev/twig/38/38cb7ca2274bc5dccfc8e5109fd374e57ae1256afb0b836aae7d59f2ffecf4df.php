<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_78ac6ef331a94f16dc5edc8b139c4ecc10a0b8870037ad76bb077ed3784b07d7 extends Twig_Template
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
        $__internal_d8a933156b6c4064cb59f6730ded6710da0a1f135ef22484a4fb4f875c5f012d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a933156b6c4064cb59f6730ded6710da0a1f135ef22484a4fb4f875c5f012d->enter($__internal_d8a933156b6c4064cb59f6730ded6710da0a1f135ef22484a4fb4f875c5f012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8c48a68e3c8cd8a3a5070919b91a4a5d7a594cc10367de114d681017cb94fdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c48a68e3c8cd8a3a5070919b91a4a5d7a594cc10367de114d681017cb94fdf3->enter($__internal_8c48a68e3c8cd8a3a5070919b91a4a5d7a594cc10367de114d681017cb94fdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a933156b6c4064cb59f6730ded6710da0a1f135ef22484a4fb4f875c5f012d->leave($__internal_d8a933156b6c4064cb59f6730ded6710da0a1f135ef22484a4fb4f875c5f012d_prof);

        
        $__internal_8c48a68e3c8cd8a3a5070919b91a4a5d7a594cc10367de114d681017cb94fdf3->leave($__internal_8c48a68e3c8cd8a3a5070919b91a4a5d7a594cc10367de114d681017cb94fdf3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_833dfa0b704cdcf21a78cd4e3318bff9a33f3a1713f72cdbcd7074dfbc3fb447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833dfa0b704cdcf21a78cd4e3318bff9a33f3a1713f72cdbcd7074dfbc3fb447->enter($__internal_833dfa0b704cdcf21a78cd4e3318bff9a33f3a1713f72cdbcd7074dfbc3fb447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6264787241d74219fa1c10912b3159b84ad966bc0251e32ca8d62a5d5eb4db6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6264787241d74219fa1c10912b3159b84ad966bc0251e32ca8d62a5d5eb4db6f->enter($__internal_6264787241d74219fa1c10912b3159b84ad966bc0251e32ca8d62a5d5eb4db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6264787241d74219fa1c10912b3159b84ad966bc0251e32ca8d62a5d5eb4db6f->leave($__internal_6264787241d74219fa1c10912b3159b84ad966bc0251e32ca8d62a5d5eb4db6f_prof);

        
        $__internal_833dfa0b704cdcf21a78cd4e3318bff9a33f3a1713f72cdbcd7074dfbc3fb447->leave($__internal_833dfa0b704cdcf21a78cd4e3318bff9a33f3a1713f72cdbcd7074dfbc3fb447_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_a4b83abf62d5c8133979109acc265aaf3cef7c56ef2366e38dd5c5cbd84ad0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df646a6480aede5ed74671c122a30d7332f8a21c8c1b76b03198102dabeff3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df646a6480aede5ed74671c122a30d7332f8a21c8c1b76b03198102dabeff3cb->enter($__internal_df646a6480aede5ed74671c122a30d7332f8a21c8c1b76b03198102dabeff3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_0adf6f2cdd6e2c26e2c2ef3eefbd524efbf562f3eb5561199553bfd43c170902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adf6f2cdd6e2c26e2c2ef3eefbd524efbf562f3eb5561199553bfd43c170902->enter($__internal_0adf6f2cdd6e2c26e2c2ef3eefbd524efbf562f3eb5561199553bfd43c170902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "</br></br>
</br>
</br>
</br>
</br>
<div align=\"centre\"></div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_df646a6480aede5ed74671c122a30d7332f8a21c8c1b76b03198102dabeff3cb->leave($__internal_df646a6480aede5ed74671c122a30d7332f8a21c8c1b76b03198102dabeff3cb_prof);

        
        $__internal_0adf6f2cdd6e2c26e2c2ef3eefbd524efbf562f3eb5561199553bfd43c170902->leave($__internal_0adf6f2cdd6e2c26e2c2ef3eefbd524efbf562f3eb5561199553bfd43c170902_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  42 => 11,  37 => 9,  33 => 8,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
</br></br>
</br>
</br>
</br>
</br>
<div align=\"centre\"></div>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}

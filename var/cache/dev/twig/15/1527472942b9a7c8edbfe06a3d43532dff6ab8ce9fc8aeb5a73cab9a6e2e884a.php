<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_242b395cf82c3b3084359c2eb88e959db304344411958cf2178605cf6006936f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_cf22d2152f6226d71cf3119745c08faf93394a496f4567e50602c9008ee47a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf22d2152f6226d71cf3119745c08faf93394a496f4567e50602c9008ee47a55->enter($__internal_cf22d2152f6226d71cf3119745c08faf93394a496f4567e50602c9008ee47a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_e3c56a1c99f0d701bc1b6c5e27ed12fd93b19667dbaf67d5c17bf555f9f3fbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c56a1c99f0d701bc1b6c5e27ed12fd93b19667dbaf67d5c17bf555f9f3fbdb->enter($__internal_e3c56a1c99f0d701bc1b6c5e27ed12fd93b19667dbaf67d5c17bf555f9f3fbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf22d2152f6226d71cf3119745c08faf93394a496f4567e50602c9008ee47a55->leave($__internal_cf22d2152f6226d71cf3119745c08faf93394a496f4567e50602c9008ee47a55_prof);

        
        $__internal_e3c56a1c99f0d701bc1b6c5e27ed12fd93b19667dbaf67d5c17bf555f9f3fbdb->leave($__internal_e3c56a1c99f0d701bc1b6c5e27ed12fd93b19667dbaf67d5c17bf555f9f3fbdb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47d02c72ec0311990e8e2a7ac70685a9146230991eae5be825956d34dc916968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d02c72ec0311990e8e2a7ac70685a9146230991eae5be825956d34dc916968->enter($__internal_47d02c72ec0311990e8e2a7ac70685a9146230991eae5be825956d34dc916968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f54f6297442173fa99800cc17d0c3bef72a7e8ffc5102e7004b7b67036ca04ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54f6297442173fa99800cc17d0c3bef72a7e8ffc5102e7004b7b67036ca04ce->enter($__internal_f54f6297442173fa99800cc17d0c3bef72a7e8ffc5102e7004b7b67036ca04ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f54f6297442173fa99800cc17d0c3bef72a7e8ffc5102e7004b7b67036ca04ce->leave($__internal_f54f6297442173fa99800cc17d0c3bef72a7e8ffc5102e7004b7b67036ca04ce_prof);

        
        $__internal_47d02c72ec0311990e8e2a7ac70685a9146230991eae5be825956d34dc916968->leave($__internal_47d02c72ec0311990e8e2a7ac70685a9146230991eae5be825956d34dc916968_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}

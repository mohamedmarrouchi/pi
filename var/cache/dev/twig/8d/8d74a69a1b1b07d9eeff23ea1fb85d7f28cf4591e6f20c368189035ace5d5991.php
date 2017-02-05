<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_05b33b6b46229d7783a65f2f3f55521f6ca4d815337c0a097b2462953c91822b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cdb2f5edcdaf3d778a08e07016bcb991fc2f6a86ae61f0b6cf28e37983006ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdb2f5edcdaf3d778a08e07016bcb991fc2f6a86ae61f0b6cf28e37983006ce->enter($__internal_1cdb2f5edcdaf3d778a08e07016bcb991fc2f6a86ae61f0b6cf28e37983006ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_cf2792c926e3d2f9e663404e8aa007aabccc68a2225ac1e68451ae63104026b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2792c926e3d2f9e663404e8aa007aabccc68a2225ac1e68451ae63104026b9->enter($__internal_cf2792c926e3d2f9e663404e8aa007aabccc68a2225ac1e68451ae63104026b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1cdb2f5edcdaf3d778a08e07016bcb991fc2f6a86ae61f0b6cf28e37983006ce->leave($__internal_1cdb2f5edcdaf3d778a08e07016bcb991fc2f6a86ae61f0b6cf28e37983006ce_prof);

        
        $__internal_cf2792c926e3d2f9e663404e8aa007aabccc68a2225ac1e68451ae63104026b9->leave($__internal_cf2792c926e3d2f9e663404e8aa007aabccc68a2225ac1e68451ae63104026b9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbeb37d22d3dbf0599a8755187a0145d11fd0758a4a1e6c07818ec70aae73bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbeb37d22d3dbf0599a8755187a0145d11fd0758a4a1e6c07818ec70aae73bae->enter($__internal_fbeb37d22d3dbf0599a8755187a0145d11fd0758a4a1e6c07818ec70aae73bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_98845d04dce2a86403ea16be02af6edffb61595f1e8f9c7ef9525ed90ad98ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98845d04dce2a86403ea16be02af6edffb61595f1e8f9c7ef9525ed90ad98ffa->enter($__internal_98845d04dce2a86403ea16be02af6edffb61595f1e8f9c7ef9525ed90ad98ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_98845d04dce2a86403ea16be02af6edffb61595f1e8f9c7ef9525ed90ad98ffa->leave($__internal_98845d04dce2a86403ea16be02af6edffb61595f1e8f9c7ef9525ed90ad98ffa_prof);

        
        $__internal_fbeb37d22d3dbf0599a8755187a0145d11fd0758a4a1e6c07818ec70aae73bae->leave($__internal_fbeb37d22d3dbf0599a8755187a0145d11fd0758a4a1e6c07818ec70aae73bae_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_89a211b658e804e07bb385524c77ae37a1b99bcba0680309b53865bc86835c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a211b658e804e07bb385524c77ae37a1b99bcba0680309b53865bc86835c99->enter($__internal_89a211b658e804e07bb385524c77ae37a1b99bcba0680309b53865bc86835c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e73f0f7eca45b48f8292df092424d98158d6b0d09c06ba4a637ce787b1a3e36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73f0f7eca45b48f8292df092424d98158d6b0d09c06ba4a637ce787b1a3e36d->enter($__internal_e73f0f7eca45b48f8292df092424d98158d6b0d09c06ba4a637ce787b1a3e36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e73f0f7eca45b48f8292df092424d98158d6b0d09c06ba4a637ce787b1a3e36d->leave($__internal_e73f0f7eca45b48f8292df092424d98158d6b0d09c06ba4a637ce787b1a3e36d_prof);

        
        $__internal_89a211b658e804e07bb385524c77ae37a1b99bcba0680309b53865bc86835c99->leave($__internal_89a211b658e804e07bb385524c77ae37a1b99bcba0680309b53865bc86835c99_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_de5668185d528085b575d9cff6f24b4c9135308450b0a7de78273ba591ed655d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5668185d528085b575d9cff6f24b4c9135308450b0a7de78273ba591ed655d->enter($__internal_de5668185d528085b575d9cff6f24b4c9135308450b0a7de78273ba591ed655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_db3f505737d4788ef4ab01fe858e0280b1fd1e5494d36569934a224e9e4ebf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3f505737d4788ef4ab01fe858e0280b1fd1e5494d36569934a224e9e4ebf45->enter($__internal_db3f505737d4788ef4ab01fe858e0280b1fd1e5494d36569934a224e9e4ebf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db3f505737d4788ef4ab01fe858e0280b1fd1e5494d36569934a224e9e4ebf45->leave($__internal_db3f505737d4788ef4ab01fe858e0280b1fd1e5494d36569934a224e9e4ebf45_prof);

        
        $__internal_de5668185d528085b575d9cff6f24b4c9135308450b0a7de78273ba591ed655d->leave($__internal_de5668185d528085b575d9cff6f24b4c9135308450b0a7de78273ba591ed655d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}

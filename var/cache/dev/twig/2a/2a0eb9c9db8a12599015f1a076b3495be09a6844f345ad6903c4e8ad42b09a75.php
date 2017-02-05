<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e9d45c9e2401954ec07f1efba147bd48d6453995e948b610473a517bb437b4a6 extends Twig_Template
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
        $__internal_71ebddd31abb3399a76eb1fa0ae5c0d1453e79ed61755af38f1f23b9726e5042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ebddd31abb3399a76eb1fa0ae5c0d1453e79ed61755af38f1f23b9726e5042->enter($__internal_71ebddd31abb3399a76eb1fa0ae5c0d1453e79ed61755af38f1f23b9726e5042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_a04b296958c303cdc89d3e7a2380fb73751c6b6527a943d6dadb07714ad755f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04b296958c303cdc89d3e7a2380fb73751c6b6527a943d6dadb07714ad755f3->enter($__internal_a04b296958c303cdc89d3e7a2380fb73751c6b6527a943d6dadb07714ad755f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_71ebddd31abb3399a76eb1fa0ae5c0d1453e79ed61755af38f1f23b9726e5042->leave($__internal_71ebddd31abb3399a76eb1fa0ae5c0d1453e79ed61755af38f1f23b9726e5042_prof);

        
        $__internal_a04b296958c303cdc89d3e7a2380fb73751c6b6527a943d6dadb07714ad755f3->leave($__internal_a04b296958c303cdc89d3e7a2380fb73751c6b6527a943d6dadb07714ad755f3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_439d9b571d62035f31b73b2da461dd22f273b72f60dba3f31d631d02082e5400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439d9b571d62035f31b73b2da461dd22f273b72f60dba3f31d631d02082e5400->enter($__internal_439d9b571d62035f31b73b2da461dd22f273b72f60dba3f31d631d02082e5400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_83581141079d0fa7be618343ca361170cd71a658153d2b8b4bb995f835ac3db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83581141079d0fa7be618343ca361170cd71a658153d2b8b4bb995f835ac3db2->enter($__internal_83581141079d0fa7be618343ca361170cd71a658153d2b8b4bb995f835ac3db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_83581141079d0fa7be618343ca361170cd71a658153d2b8b4bb995f835ac3db2->leave($__internal_83581141079d0fa7be618343ca361170cd71a658153d2b8b4bb995f835ac3db2_prof);

        
        $__internal_439d9b571d62035f31b73b2da461dd22f273b72f60dba3f31d631d02082e5400->leave($__internal_439d9b571d62035f31b73b2da461dd22f273b72f60dba3f31d631d02082e5400_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fcf3e9d843b03a40a41906dd43332c0290a3ff1cf2182d01ad5049c27df28e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf3e9d843b03a40a41906dd43332c0290a3ff1cf2182d01ad5049c27df28e43->enter($__internal_fcf3e9d843b03a40a41906dd43332c0290a3ff1cf2182d01ad5049c27df28e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_959b884751bdfe281373ca05d33ad010688973a2452462a1a4522a9801eb1efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959b884751bdfe281373ca05d33ad010688973a2452462a1a4522a9801eb1efe->enter($__internal_959b884751bdfe281373ca05d33ad010688973a2452462a1a4522a9801eb1efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_959b884751bdfe281373ca05d33ad010688973a2452462a1a4522a9801eb1efe->leave($__internal_959b884751bdfe281373ca05d33ad010688973a2452462a1a4522a9801eb1efe_prof);

        
        $__internal_fcf3e9d843b03a40a41906dd43332c0290a3ff1cf2182d01ad5049c27df28e43->leave($__internal_fcf3e9d843b03a40a41906dd43332c0290a3ff1cf2182d01ad5049c27df28e43_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cd22e60f9d48ad31677c015e1a0462b813ff53e974feae32dc543430817f0534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd22e60f9d48ad31677c015e1a0462b813ff53e974feae32dc543430817f0534->enter($__internal_cd22e60f9d48ad31677c015e1a0462b813ff53e974feae32dc543430817f0534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d669dcf807e9c92a0c1939f824b92cb26e4b2ba68e759466f18add2e80bd10d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d669dcf807e9c92a0c1939f824b92cb26e4b2ba68e759466f18add2e80bd10d0->enter($__internal_d669dcf807e9c92a0c1939f824b92cb26e4b2ba68e759466f18add2e80bd10d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d669dcf807e9c92a0c1939f824b92cb26e4b2ba68e759466f18add2e80bd10d0->leave($__internal_d669dcf807e9c92a0c1939f824b92cb26e4b2ba68e759466f18add2e80bd10d0_prof);

        
        $__internal_cd22e60f9d48ad31677c015e1a0462b813ff53e974feae32dc543430817f0534->leave($__internal_cd22e60f9d48ad31677c015e1a0462b813ff53e974feae32dc543430817f0534_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\PI\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}

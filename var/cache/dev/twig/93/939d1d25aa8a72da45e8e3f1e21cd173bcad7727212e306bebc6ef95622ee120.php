<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_898f7db85f267ccc4ed1dc82b03581135a033dfa8744f42285f4a8fbf704b43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_edb1ad7233596b43c7280c30acf3b061a4e8be316db03d22c9cc990a55fc8fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb1ad7233596b43c7280c30acf3b061a4e8be316db03d22c9cc990a55fc8fe7->enter($__internal_edb1ad7233596b43c7280c30acf3b061a4e8be316db03d22c9cc990a55fc8fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f6d0db5d74cff9d6227d8de119af3a78a6bca345a0dc1ca05cf3262ccd15ebc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d0db5d74cff9d6227d8de119af3a78a6bca345a0dc1ca05cf3262ccd15ebc9->enter($__internal_f6d0db5d74cff9d6227d8de119af3a78a6bca345a0dc1ca05cf3262ccd15ebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb1ad7233596b43c7280c30acf3b061a4e8be316db03d22c9cc990a55fc8fe7->leave($__internal_edb1ad7233596b43c7280c30acf3b061a4e8be316db03d22c9cc990a55fc8fe7_prof);

        
        $__internal_f6d0db5d74cff9d6227d8de119af3a78a6bca345a0dc1ca05cf3262ccd15ebc9->leave($__internal_f6d0db5d74cff9d6227d8de119af3a78a6bca345a0dc1ca05cf3262ccd15ebc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d9c4e20a712ebc852e6f06d85a36b194f623fe7194b4e7a8ddb90d99a45dda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9c4e20a712ebc852e6f06d85a36b194f623fe7194b4e7a8ddb90d99a45dda3->enter($__internal_3d9c4e20a712ebc852e6f06d85a36b194f623fe7194b4e7a8ddb90d99a45dda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0efc1683b04d037a377ec3a6c31dd0d361c4b5e9ae75fe83702b39bbc448931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0efc1683b04d037a377ec3a6c31dd0d361c4b5e9ae75fe83702b39bbc448931->enter($__internal_b0efc1683b04d037a377ec3a6c31dd0d361c4b5e9ae75fe83702b39bbc448931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b0efc1683b04d037a377ec3a6c31dd0d361c4b5e9ae75fe83702b39bbc448931->leave($__internal_b0efc1683b04d037a377ec3a6c31dd0d361c4b5e9ae75fe83702b39bbc448931_prof);

        
        $__internal_3d9c4e20a712ebc852e6f06d85a36b194f623fe7194b4e7a8ddb90d99a45dda3->leave($__internal_3d9c4e20a712ebc852e6f06d85a36b194f623fe7194b4e7a8ddb90d99a45dda3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8eb0638c883c8575ff9adf0b95aa8c109d64b9997ba5be12b61797649b57f9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb0638c883c8575ff9adf0b95aa8c109d64b9997ba5be12b61797649b57f9ed->enter($__internal_8eb0638c883c8575ff9adf0b95aa8c109d64b9997ba5be12b61797649b57f9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5d58df31bd3467c7585ecbcacb28eabd5f270ba5de27e976e94e194fdd3bbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d58df31bd3467c7585ecbcacb28eabd5f270ba5de27e976e94e194fdd3bbcf->enter($__internal_c5d58df31bd3467c7585ecbcacb28eabd5f270ba5de27e976e94e194fdd3bbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c5d58df31bd3467c7585ecbcacb28eabd5f270ba5de27e976e94e194fdd3bbcf->leave($__internal_c5d58df31bd3467c7585ecbcacb28eabd5f270ba5de27e976e94e194fdd3bbcf_prof);

        
        $__internal_8eb0638c883c8575ff9adf0b95aa8c109d64b9997ba5be12b61797649b57f9ed->leave($__internal_8eb0638c883c8575ff9adf0b95aa8c109d64b9997ba5be12b61797649b57f9ed_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1624010a90de049498b2beee2986e80ced952ee134e21773baa656cf54535278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1624010a90de049498b2beee2986e80ced952ee134e21773baa656cf54535278->enter($__internal_1624010a90de049498b2beee2986e80ced952ee134e21773baa656cf54535278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7117f1c33f7e274106cca4afada68198460c5bcd6dc643dc1532867d0ffe506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7117f1c33f7e274106cca4afada68198460c5bcd6dc643dc1532867d0ffe506->enter($__internal_b7117f1c33f7e274106cca4afada68198460c5bcd6dc643dc1532867d0ffe506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b7117f1c33f7e274106cca4afada68198460c5bcd6dc643dc1532867d0ffe506->leave($__internal_b7117f1c33f7e274106cca4afada68198460c5bcd6dc643dc1532867d0ffe506_prof);

        
        $__internal_1624010a90de049498b2beee2986e80ced952ee134e21773baa656cf54535278->leave($__internal_1624010a90de049498b2beee2986e80ced952ee134e21773baa656cf54535278_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\PI\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

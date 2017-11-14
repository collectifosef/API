<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_2484736fc3f335a2b6989c36cde712bc3c4331a79db7d335dd34083b5dfa32e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2484736fc3f335a2b6989c36cde712bc3c4331a79db7d335dd34083b5dfa32e8->enter($__internal_2484736fc3f335a2b6989c36cde712bc3c4331a79db7d335dd34083b5dfa32e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_327efde42834fa7b3b01303125ad74de62614790039b69fc0f1174254a704b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327efde42834fa7b3b01303125ad74de62614790039b69fc0f1174254a704b11->enter($__internal_327efde42834fa7b3b01303125ad74de62614790039b69fc0f1174254a704b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2484736fc3f335a2b6989c36cde712bc3c4331a79db7d335dd34083b5dfa32e8->leave($__internal_2484736fc3f335a2b6989c36cde712bc3c4331a79db7d335dd34083b5dfa32e8_prof);

        
        $__internal_327efde42834fa7b3b01303125ad74de62614790039b69fc0f1174254a704b11->leave($__internal_327efde42834fa7b3b01303125ad74de62614790039b69fc0f1174254a704b11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03017185c5219c2627aa74d3f2357ea0c5befe0b9b38ee59ea233eb001d4aecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03017185c5219c2627aa74d3f2357ea0c5befe0b9b38ee59ea233eb001d4aecf->enter($__internal_03017185c5219c2627aa74d3f2357ea0c5befe0b9b38ee59ea233eb001d4aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b654735840442d7ba975545fa4ac685db07464eb789ce1928177ec0fd6661adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b654735840442d7ba975545fa4ac685db07464eb789ce1928177ec0fd6661adc->enter($__internal_b654735840442d7ba975545fa4ac685db07464eb789ce1928177ec0fd6661adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b654735840442d7ba975545fa4ac685db07464eb789ce1928177ec0fd6661adc->leave($__internal_b654735840442d7ba975545fa4ac685db07464eb789ce1928177ec0fd6661adc_prof);

        
        $__internal_03017185c5219c2627aa74d3f2357ea0c5befe0b9b38ee59ea233eb001d4aecf->leave($__internal_03017185c5219c2627aa74d3f2357ea0c5befe0b9b38ee59ea233eb001d4aecf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8681292b894f3ff4cf2452931e3d0e62ea3f16a34130fc4ec9551862954d3780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8681292b894f3ff4cf2452931e3d0e62ea3f16a34130fc4ec9551862954d3780->enter($__internal_8681292b894f3ff4cf2452931e3d0e62ea3f16a34130fc4ec9551862954d3780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4806ebe32c52136bef47b2f60c90bc02dd445d70d794cab1260633973326349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4806ebe32c52136bef47b2f60c90bc02dd445d70d794cab1260633973326349b->enter($__internal_4806ebe32c52136bef47b2f60c90bc02dd445d70d794cab1260633973326349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4806ebe32c52136bef47b2f60c90bc02dd445d70d794cab1260633973326349b->leave($__internal_4806ebe32c52136bef47b2f60c90bc02dd445d70d794cab1260633973326349b_prof);

        
        $__internal_8681292b894f3ff4cf2452931e3d0e62ea3f16a34130fc4ec9551862954d3780->leave($__internal_8681292b894f3ff4cf2452931e3d0e62ea3f16a34130fc4ec9551862954d3780_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd6b8c4efb038b3de3c554f0029af1f62a34e46b4bc797a78eaf6da0e69585b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6b8c4efb038b3de3c554f0029af1f62a34e46b4bc797a78eaf6da0e69585b5->enter($__internal_bd6b8c4efb038b3de3c554f0029af1f62a34e46b4bc797a78eaf6da0e69585b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b999c13ec04b5d9006a9d1aa9a709b8c01575ab15d9cae2a65b536fda00231c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b999c13ec04b5d9006a9d1aa9a709b8c01575ab15d9cae2a65b536fda00231c1->enter($__internal_b999c13ec04b5d9006a9d1aa9a709b8c01575ab15d9cae2a65b536fda00231c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b999c13ec04b5d9006a9d1aa9a709b8c01575ab15d9cae2a65b536fda00231c1->leave($__internal_b999c13ec04b5d9006a9d1aa9a709b8c01575ab15d9cae2a65b536fda00231c1_prof);

        
        $__internal_bd6b8c4efb038b3de3c554f0029af1f62a34e46b4bc797a78eaf6da0e69585b5->leave($__internal_bd6b8c4efb038b3de3c554f0029af1f62a34e46b4bc797a78eaf6da0e69585b5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/alexandre/Documents/workspace/collectif-osef/admin-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

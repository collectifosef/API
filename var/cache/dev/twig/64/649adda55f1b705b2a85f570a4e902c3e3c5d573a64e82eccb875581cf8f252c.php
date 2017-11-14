<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_dbc4617be2fe25b5eb1d5fad9463eb1c9ab2e612508f78f56ac71ad463ded4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc4617be2fe25b5eb1d5fad9463eb1c9ab2e612508f78f56ac71ad463ded4dd->enter($__internal_dbc4617be2fe25b5eb1d5fad9463eb1c9ab2e612508f78f56ac71ad463ded4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f128639f6bb8d748a8143ca17fe80e852234d7a542246f41955ce13af0dff1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f128639f6bb8d748a8143ca17fe80e852234d7a542246f41955ce13af0dff1fe->enter($__internal_f128639f6bb8d748a8143ca17fe80e852234d7a542246f41955ce13af0dff1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc4617be2fe25b5eb1d5fad9463eb1c9ab2e612508f78f56ac71ad463ded4dd->leave($__internal_dbc4617be2fe25b5eb1d5fad9463eb1c9ab2e612508f78f56ac71ad463ded4dd_prof);

        
        $__internal_f128639f6bb8d748a8143ca17fe80e852234d7a542246f41955ce13af0dff1fe->leave($__internal_f128639f6bb8d748a8143ca17fe80e852234d7a542246f41955ce13af0dff1fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed3be5bd73abc8280660a724404e3b2e1daa9c85c25250b080bcea87c7510e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3be5bd73abc8280660a724404e3b2e1daa9c85c25250b080bcea87c7510e28->enter($__internal_ed3be5bd73abc8280660a724404e3b2e1daa9c85c25250b080bcea87c7510e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_103d4345108d0b68f7279ede604102ab5deeef98fbe368dc6600f81109614731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103d4345108d0b68f7279ede604102ab5deeef98fbe368dc6600f81109614731->enter($__internal_103d4345108d0b68f7279ede604102ab5deeef98fbe368dc6600f81109614731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_103d4345108d0b68f7279ede604102ab5deeef98fbe368dc6600f81109614731->leave($__internal_103d4345108d0b68f7279ede604102ab5deeef98fbe368dc6600f81109614731_prof);

        
        $__internal_ed3be5bd73abc8280660a724404e3b2e1daa9c85c25250b080bcea87c7510e28->leave($__internal_ed3be5bd73abc8280660a724404e3b2e1daa9c85c25250b080bcea87c7510e28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2b59abb83700d3601f65ec05957d8f386938b698ba60e20625525871b003413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b59abb83700d3601f65ec05957d8f386938b698ba60e20625525871b003413->enter($__internal_f2b59abb83700d3601f65ec05957d8f386938b698ba60e20625525871b003413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94294166ac085e21a2623a2f7feb5fb05a7249b9e3217a2cf3ebf26aec23d892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94294166ac085e21a2623a2f7feb5fb05a7249b9e3217a2cf3ebf26aec23d892->enter($__internal_94294166ac085e21a2623a2f7feb5fb05a7249b9e3217a2cf3ebf26aec23d892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94294166ac085e21a2623a2f7feb5fb05a7249b9e3217a2cf3ebf26aec23d892->leave($__internal_94294166ac085e21a2623a2f7feb5fb05a7249b9e3217a2cf3ebf26aec23d892_prof);

        
        $__internal_f2b59abb83700d3601f65ec05957d8f386938b698ba60e20625525871b003413->leave($__internal_f2b59abb83700d3601f65ec05957d8f386938b698ba60e20625525871b003413_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d36fe97eb201db7a4ba8bc3f4fb046a60a45c889293f8b8f90659385708212c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36fe97eb201db7a4ba8bc3f4fb046a60a45c889293f8b8f90659385708212c3->enter($__internal_d36fe97eb201db7a4ba8bc3f4fb046a60a45c889293f8b8f90659385708212c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ced84063fc2951d5dc835e11ee4d13076bedf833e612a1099604eee4a4d4977b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced84063fc2951d5dc835e11ee4d13076bedf833e612a1099604eee4a4d4977b->enter($__internal_ced84063fc2951d5dc835e11ee4d13076bedf833e612a1099604eee4a4d4977b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ced84063fc2951d5dc835e11ee4d13076bedf833e612a1099604eee4a4d4977b->leave($__internal_ced84063fc2951d5dc835e11ee4d13076bedf833e612a1099604eee4a4d4977b_prof);

        
        $__internal_d36fe97eb201db7a4ba8bc3f4fb046a60a45c889293f8b8f90659385708212c3->leave($__internal_d36fe97eb201db7a4ba8bc3f4fb046a60a45c889293f8b8f90659385708212c3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/alexandre/Documents/workspace/collectif-osef/admin-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

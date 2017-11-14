<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e8adda5e99bdf34555f67cd576ce616fc411a6c1a6fc8f82299255f0aac41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e8adda5e99bdf34555f67cd576ce616fc411a6c1a6fc8f82299255f0aac41a->enter($__internal_49e8adda5e99bdf34555f67cd576ce616fc411a6c1a6fc8f82299255f0aac41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d2c173165ec1db653d2491907feebd2aed82a433b9a796f27880ba49a5047021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c173165ec1db653d2491907feebd2aed82a433b9a796f27880ba49a5047021->enter($__internal_d2c173165ec1db653d2491907feebd2aed82a433b9a796f27880ba49a5047021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_49e8adda5e99bdf34555f67cd576ce616fc411a6c1a6fc8f82299255f0aac41a->leave($__internal_49e8adda5e99bdf34555f67cd576ce616fc411a6c1a6fc8f82299255f0aac41a_prof);

        
        $__internal_d2c173165ec1db653d2491907feebd2aed82a433b9a796f27880ba49a5047021->leave($__internal_d2c173165ec1db653d2491907feebd2aed82a433b9a796f27880ba49a5047021_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04f8335d7d38c1404819d25577a53295631a1017707260442779c4c8795ed807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f8335d7d38c1404819d25577a53295631a1017707260442779c4c8795ed807->enter($__internal_04f8335d7d38c1404819d25577a53295631a1017707260442779c4c8795ed807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3c60b94f12eed750d516b4f5ada579665323124b8193f463c3da4b8421e6e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c60b94f12eed750d516b4f5ada579665323124b8193f463c3da4b8421e6e94->enter($__internal_a3c60b94f12eed750d516b4f5ada579665323124b8193f463c3da4b8421e6e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3c60b94f12eed750d516b4f5ada579665323124b8193f463c3da4b8421e6e94->leave($__internal_a3c60b94f12eed750d516b4f5ada579665323124b8193f463c3da4b8421e6e94_prof);

        
        $__internal_04f8335d7d38c1404819d25577a53295631a1017707260442779c4c8795ed807->leave($__internal_04f8335d7d38c1404819d25577a53295631a1017707260442779c4c8795ed807_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da9659edb4012d5495aa4523c7c5411c31c3a21a7268124c34cbcb62e1ce79ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9659edb4012d5495aa4523c7c5411c31c3a21a7268124c34cbcb62e1ce79ea->enter($__internal_da9659edb4012d5495aa4523c7c5411c31c3a21a7268124c34cbcb62e1ce79ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f38b25df9ca91fa9dc760cd8dd99e7dc7ecfb4ce2364a5e3f31efb69a5460a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38b25df9ca91fa9dc760cd8dd99e7dc7ecfb4ce2364a5e3f31efb69a5460a7c->enter($__internal_f38b25df9ca91fa9dc760cd8dd99e7dc7ecfb4ce2364a5e3f31efb69a5460a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f38b25df9ca91fa9dc760cd8dd99e7dc7ecfb4ce2364a5e3f31efb69a5460a7c->leave($__internal_f38b25df9ca91fa9dc760cd8dd99e7dc7ecfb4ce2364a5e3f31efb69a5460a7c_prof);

        
        $__internal_da9659edb4012d5495aa4523c7c5411c31c3a21a7268124c34cbcb62e1ce79ea->leave($__internal_da9659edb4012d5495aa4523c7c5411c31c3a21a7268124c34cbcb62e1ce79ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df191680893258b6edf6f23c433d9531b33a484fe52458c4ee4bbc75b13c2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df191680893258b6edf6f23c433d9531b33a484fe52458c4ee4bbc75b13c2b4->enter($__internal_0df191680893258b6edf6f23c433d9531b33a484fe52458c4ee4bbc75b13c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a1167930e0172f90fba4874301ae990e25c5562c7772598f21678a2d6109bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1167930e0172f90fba4874301ae990e25c5562c7772598f21678a2d6109bcf->enter($__internal_8a1167930e0172f90fba4874301ae990e25c5562c7772598f21678a2d6109bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a1167930e0172f90fba4874301ae990e25c5562c7772598f21678a2d6109bcf->leave($__internal_8a1167930e0172f90fba4874301ae990e25c5562c7772598f21678a2d6109bcf_prof);

        
        $__internal_0df191680893258b6edf6f23c433d9531b33a484fe52458c4ee4bbc75b13c2b4->leave($__internal_0df191680893258b6edf6f23c433d9531b33a484fe52458c4ee4bbc75b13c2b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5a0536152b87b8537841c8d5315f8fe9fdcfb6fb4460a0eb4bd47b38ad542a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a0536152b87b8537841c8d5315f8fe9fdcfb6fb4460a0eb4bd47b38ad542a6->enter($__internal_b5a0536152b87b8537841c8d5315f8fe9fdcfb6fb4460a0eb4bd47b38ad542a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_138489677896b3fdb0926976a32594780d9e9ad61381781470715f8d07dc29f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138489677896b3fdb0926976a32594780d9e9ad61381781470715f8d07dc29f9->enter($__internal_138489677896b3fdb0926976a32594780d9e9ad61381781470715f8d07dc29f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_138489677896b3fdb0926976a32594780d9e9ad61381781470715f8d07dc29f9->leave($__internal_138489677896b3fdb0926976a32594780d9e9ad61381781470715f8d07dc29f9_prof);

        
        $__internal_b5a0536152b87b8537841c8d5315f8fe9fdcfb6fb4460a0eb4bd47b38ad542a6->leave($__internal_b5a0536152b87b8537841c8d5315f8fe9fdcfb6fb4460a0eb4bd47b38ad542a6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/alexandre/Documents/workspace/collectif-osef/admin-api/app/Resources/views/base.html.twig");
    }
}

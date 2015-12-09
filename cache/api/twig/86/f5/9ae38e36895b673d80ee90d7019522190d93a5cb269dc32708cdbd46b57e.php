<?php

/* layout/base.twig */
class __TwigTemplate_86f59ae38e36895b673d80ee90d7019522190d93a5cb269dc32708cdbd46b57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("default/layout/base.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "css/sami.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "js/typeahead.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "sami.js"), "html", null, true);
        echo "\"></script>
    <meta name=\"MobileOptimized\" content=\"width\">
    <meta name=\"HandheldFriendly\" content=\"true\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\">
";
    }

    public function getTemplateName()
    {
        return "layout/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

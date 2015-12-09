<?php

/* layout/layout.twig */
class __TwigTemplate_793d35b1084e4ea81de889517d8e9dfab0c017a9cc70447971dd2e1bf98eb22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("default/layout/layout.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"footer\">
        Generated on ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "F jS \\a\\t g:ia"), "html", null, true);
        echo " by <a href=\"http://sami.sensiolabs.org/\">Sami</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

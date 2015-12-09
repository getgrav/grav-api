<?php

/* class.twig */
class __TwigTemplate_500663bae210e108b6a847e05023f86ad70525119d5d676ad479b7102e8f2c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("default/class.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/class.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_content($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        if ((is_string($__internal_62fad6cf05502351533cedf83d51ee9f90e5a786a48229d5d137434deef53c25 = $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array())) && is_string($__internal_2ada05e6513e6840288c2691864f26cbab6ba347bbfbdf88a7c1445ad048d52e = "Grav") && ('' === $__internal_2ada05e6513e6840288c2691864f26cbab6ba347bbfbdf88a7c1445ad048d52e || 0 === strpos($__internal_62fad6cf05502351533cedf83d51ee9f90e5a786a48229d5d137434deef53c25, $__internal_2ada05e6513e6840288c2691864f26cbab6ba347bbfbdf88a7c1445ad048d52e)))) {
            // line 6
            echo "\t\t";
            $context["github_link"] = (("https://github.com/getgrav/grav/blob/develop/system/src/" . strtr($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), array("\\" => "/"))) . ".php");
            // line 7
            echo "\t";
        } else {
            // line 8
            echo "\t\t";
            $context["github_link"] = (("https://github.com/" . strtr($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), array($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()) => ("src/" . $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array())), "RocketTheme" => "rockettheme", "Toolbox" => "toolbox/blob/develop", "\\" => "/"))) . ".php");
            // line 9
            echo "\t";
        }
        // line 10
        echo "\t<a class=\"btn btn-warning pull-right\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["github_link"]) ? $context["github_link"] : $this->getContext($context, "github_link")), "html", null, true);
        echo "\">Edit on GitHub</a>
\t";
        // line 11
        $this->displayParentBlock("page_content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }
}

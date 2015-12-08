<?php

/* namespace.twig */
class __TwigTemplate_55bbf618b38014b1987f5dd86b04f8563d9845078f6c1a1d2dc8630798c5c4b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout/layout.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_id' => array($this, 'block_page_id'),
            'below_menu' => array($this, 'block_below_menu'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_4c5e33332975d08eacba274b8973175afd37707c5a7b29ed93a888c9ae2fb136"] = $this->env->loadTemplate("macros.twig");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "namespace";
    }

    // line 5
    public function block_page_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("namespace:" . strtr((isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), array("\\" => "_"))), "html", null, true);
    }

    // line 7
    public function block_below_menu($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"namespace-breadcrumbs\">
        <ol class=\"breadcrumb\">
            <li><span class=\"label label-default\">Namespace</span></li>
            ";
        // line 11
        echo $context["__internal_4c5e33332975d08eacba274b8973175afd37707c5a7b29ed93a888c9ae2fb136"]->getbreadcrumbs((isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")));
        echo "
        </ol>
    </div>
";
    }

    // line 16
    public function block_page_content($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"page-header\">
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 22
        if ((isset($context["subnamespaces"]) ? $context["subnamespaces"] : $this->getContext($context, "subnamespaces"))) {
            // line 23
            echo "        <h2>Namespaces</h2>
        <div class=\"namespace-list\">
            ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subnamespaces"]) ? $context["subnamespaces"] : $this->getContext($context, "subnamespaces")));
            foreach ($context['_seq'] as $context["_key"] => $context["ns"]) {
                echo $context["__internal_4c5e33332975d08eacba274b8973175afd37707c5a7b29ed93a888c9ae2fb136"]->getnamespace_link($context["ns"]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))) {
            // line 30
            echo "        <h2>Classes</h2>
        ";
            // line 31
            echo $context["__internal_4c5e33332975d08eacba274b8973175afd37707c5a7b29ed93a888c9ae2fb136"]->getrender_classes((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            echo "
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ((isset($context["interfaces"]) ? $context["interfaces"] : $this->getContext($context, "interfaces"))) {
            // line 35
            echo "        <h2>Interfaces</h2>
        ";
            // line 36
            echo $context["__internal_4c5e33332975d08eacba274b8973175afd37707c5a7b29ed93a888c9ae2fb136"]->getrender_classes((isset($context["interfaces"]) ? $context["interfaces"] : $this->getContext($context, "interfaces")));
            echo "
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ((isset($context["exceptions"]) ? $context["exceptions"] : $this->getContext($context, "exceptions"))) {
            // line 40
            echo "        <h2>Exceptions</h2>
        ";
            // line 41
            echo $context["__internal_4c5e33332975d08eacba274b8973175afd37707c5a7b29ed93a888c9ae2fb136"]->getrender_classes((isset($context["exceptions"]) ? $context["exceptions"] : $this->getContext($context, "exceptions")));
            echo "
    ";
        }
        // line 43
        echo "
";
    }

    public function getTemplateName()
    {
        return "namespace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  145 => 41,  142 => 40,  140 => 39,  137 => 38,  132 => 36,  129 => 35,  127 => 34,  124 => 33,  119 => 31,  116 => 30,  114 => 29,  111 => 28,  107 => 26,  98 => 25,  94 => 23,  92 => 22,  86 => 19,  82 => 17,  79 => 16,  71 => 11,  66 => 8,  63 => 7,  57 => 5,  51 => 4,  43 => 3,  39 => 1,  37 => 2,  11 => 1,);
    }
}

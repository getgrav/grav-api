<?php

/* doc-index.twig */
class __TwigTemplate_8b21b5085352c6f59c5b695279d745a2bc1ed3a7029f1b30ebb42916e5a76f0b extends Twig_Template
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
        $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"] = $this->env->loadTemplate("macros.twig");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "doc-index";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"page-header\">
        <h1>Index</h1>
    </div>

    <ul class=\"pagination\">
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range("A", "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 14
            echo "            ";
            if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["letter"], array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), $context["letter"], array(), "array")) > 1))) {
                // line 15
                echo "                <li><a href=\"#letter";
                echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 17
                echo "                <li class=\"disabled\"><a href=\"#letter";
                echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>

    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["letter"] => $context["elements"]) {
            // line 23
            echo "<h2 id=\"letter";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "</h2>
        <dl id=\"index\">";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["elements"]);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                $context["type"] = $this->getAttribute($context["element"], 0, array(), "array");
                // line 27
                $context["value"] = $this->getAttribute($context["element"], 1, array(), "array");
                // line 28
                if (("class" == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                    // line 29
                    echo "<dt>";
                    echo $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"]->getclass_link((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                    if ((isset($context["has_namespaces"]) ? $context["has_namespaces"] : $this->getContext($context, "has_namespaces"))) {
                        echo " &mdash; <em>Class in namespace ";
                        echo $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"]->getnamespace_link($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "namespace", array()));
                    }
                    echo "</em></dt>
                    <dd>";
                    // line 30
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "shortdesc", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                    echo "</dd>";
                } elseif (("method" == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                    // line 32
                    echo "<dt>";
                    echo $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"]->getmethod_link((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                    echo "() &mdash; <em>Method in class ";
                    echo $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"]->getclass_link($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "class", array()));
                    echo "</em></dt>
                    <dd>";
                    // line 33
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "shortdesc", array()), $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "class", array()));
                    echo "</dd>";
                } elseif (("property" == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                    // line 35
                    echo "<dt>\$";
                    echo $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"]->getproperty_link((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                    echo " &mdash; <em>Property in class ";
                    echo $context["__internal_837bca2b46b7c8892e175ef9814303292839f9bf4fbf6885f337ad86fc6701ba"]->getclass_link($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "class", array()));
                    echo "</em></dt>
                    <dd>";
                    // line 36
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "shortdesc", array()), $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "class", array()));
                    echo "</dd>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </dl>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['letter'], $context['elements'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "doc-index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  150 => 36,  143 => 35,  139 => 33,  132 => 32,  128 => 30,  119 => 29,  117 => 28,  115 => 27,  113 => 26,  109 => 25,  102 => 23,  98 => 22,  94 => 20,  88 => 19,  80 => 17,  72 => 15,  69 => 14,  65 => 13,  57 => 7,  54 => 6,  48 => 4,  41 => 3,  37 => 1,  35 => 2,  11 => 1,);
    }
}

<?php

/* class.twig */
class __TwigTemplate_d2e7338b04d68ce2b4d23efb7ecfe8a1af05922d3904a3b959b0af2c650a745d extends Twig_Template
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
            'class_signature' => array($this, 'block_class_signature'),
            'method_signature' => array($this, 'block_method_signature'),
            'method_parameters_signature' => array($this, 'block_method_parameters_signature'),
            'parameters' => array($this, 'block_parameters'),
            'return' => array($this, 'block_return'),
            'exceptions' => array($this, 'block_exceptions'),
            'see' => array($this, 'block_see'),
            'constants' => array($this, 'block_constants'),
            'properties' => array($this, 'block_properties'),
            'methods' => array($this, 'block_methods'),
            'methods_details' => array($this, 'block_methods_details'),
            'method' => array($this, 'block_method'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"] = $this->env->loadTemplate("macros.twig");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "class";
    }

    // line 5
    public function block_page_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("class:" . strtr($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), array("\\" => "_"))), "html", null, true);
    }

    // line 7
    public function block_below_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "namespace", array())) {
            // line 9
            echo "        <div class=\"namespace-breadcrumbs\">
            <ol class=\"breadcrumb\">
                <li><span class=\"label label-default\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "categoryName", array()), "html", null, true);
            echo "</span></li>
                ";
            // line 12
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getbreadcrumbs($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "namespace", array()));
            echo "
                <li>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()), "html", null, true);
            echo "</li>
            </ol>
        </div>
    ";
        }
    }

    // line 19
    public function block_page_content($context, array $blocks = array())
    {
        // line 20
        echo "
    <div class=\"page-header\">
        <h1>";
        // line 22
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), "\\")), "html", null, true);
        echo "</h1>
    </div>

    <p>";
        // line 25
        $this->displayBlock("class_signature", $context, $blocks);
        echo "</p>

    ";
        // line 27
        if (($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array()) || $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array()))) {
            // line 28
            echo "        <div class=\"description\">
            ";
            // line 29
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array())) {
                // line 30
                echo "<p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 32
            echo "            ";
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array())) {
                // line 33
                echo "<p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 35
            echo "        </div>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((isset($context["traits"]) ? $context["traits"] : $this->getContext($context, "traits"))) {
            // line 39
            echo "        <h2>Traits</h2>

        ";
            // line 41
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getrender_classes((isset($context["traits"]) ? $context["traits"] : $this->getContext($context, "traits")));
            echo "
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ((isset($context["constants"]) ? $context["constants"] : $this->getContext($context, "constants"))) {
            // line 45
            echo "        <h2>Constants</h2>

        ";
            // line 47
            $this->displayBlock("constants", $context, $blocks);
            echo "
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if ((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties"))) {
            // line 51
            echo "        <h2>Properties</h2>

        ";
            // line 53
            $this->displayBlock("properties", $context, $blocks);
            echo "
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods"))) {
            // line 57
            echo "        <h2>Methods</h2>

        ";
            // line 59
            $this->displayBlock("methods", $context, $blocks);
            echo "

        <h2>Details</h2>

        ";
            // line 63
            $this->displayBlock("methods_details", $context, $blocks);
            echo "
    ";
        }
        // line 65
        echo "
";
    }

    // line 68
    public function block_class_signature($context, array $blocks = array())
    {
        // line 69
        if (( !$this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interface", array()) && $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "abstract", array()))) {
            echo "abstract ";
        }
        // line 70
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "categoryName", array()), "html", null, true);
        echo "
    <strong>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()), "html", null, true);
        echo "</strong>";
        // line 72
        if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "parent", array())) {
            // line 73
            echo "        extends ";
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getclass_link($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "parent", array()));
        }
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interfaces", array())) > 0)) {
            // line 76
            echo "        implements
        ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interfaces", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 78
                echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getclass_link($context["interface"]);
                // line 79
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 82
        echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getsource_link((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
        echo "
";
    }

    // line 85
    public function block_method_signature($context, array $blocks = array())
    {
        // line 86
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "final", array())) {
            echo "final";
        }
        // line 87
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "abstract", array())) {
            echo "abstract";
        }
        // line 88
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "static", array())) {
            echo "static";
        }
        // line 89
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "protected", array())) {
            echo "protected";
        }
        // line 90
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "private", array())) {
            echo "private";
        }
        // line 91
        echo "    ";
        echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->gethint_link($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()));
        echo "
    <strong>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
        echo "</strong>";
        $this->displayBlock("method_parameters_signature", $context, $blocks);
    }

    // line 95
    public function block_method_parameters_signature($context, array $blocks = array())
    {
        // line 96
        $context["__internal_426a6b07e6aaa6be76ae5442cbe129de2a9ed713afb5f5d90f38d732446b5799"] = $this->env->loadTemplate("macros.twig");
        // line 97
        echo $context["__internal_426a6b07e6aaa6be76ae5442cbe129de2a9ed713afb5f5d90f38d732446b5799"]->getmethod_parameters_signature((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
    }

    // line 100
    public function block_parameters($context, array $blocks = array())
    {
        // line 101
        echo "    <table class=\"table table-condensed\">
        ";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 103
            echo "            <tr>
                <td>";
            // line 104
            if ($this->getAttribute($context["parameter"], "hint", array())) {
                echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->gethint_link($this->getAttribute($context["parameter"], "hint", array()));
            }
            echo "</td>
                <td>\$";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["parameter"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </table>
";
    }

    // line 112
    public function block_return($context, array $blocks = array())
    {
        // line 113
        echo "    <table class=\"table table-condensed\">
        <tr>
            <td>";
        // line 115
        echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->gethint_link($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()));
        echo "</td>
            <td>";
        // line 116
        echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hintDesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
        echo "</td>
        </tr>
    </table>
";
    }

    // line 121
    public function block_exceptions($context, array $blocks = array())
    {
        // line 122
        echo "    <table class=\"table table-condensed\">
        ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "exceptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
            // line 124
            echo "            <tr>
                <td>";
            // line 125
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getclass_link($this->getAttribute($context["exception"], 0, array(), "array"));
            echo "</td>
                <td>";
            // line 126
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["exception"], 1, array(), "array"), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </table>
";
    }

    // line 132
    public function block_see($context, array $blocks = array())
    {
        // line 133
        echo "    <table class=\"table table-condensed\">
        ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "tags", array(0 => "see"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 135
            echo "            <tr>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " "), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </table>
";
    }

    // line 143
    public function block_constants($context, array $blocks = array())
    {
        // line 144
        echo "    <table class=\"table table-condensed\">
        ";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constants"]) ? $context["constants"] : $this->getContext($context, "constants")));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 146
            echo "            <tr>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["constant"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"last\">
                    <p><em>";
            // line 149
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["constant"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</em></p>
                    <p>";
            // line 150
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["constant"], "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</p>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "    </table>
";
    }

    // line 157
    public function block_properties($context, array $blocks = array())
    {
        // line 158
        echo "    <table class=\"table table-condensed\">
        ";
        // line 159
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 160
            echo "            <tr>
                <td class=\"type\" id=\"property_";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "\">
                    ";
            // line 162
            if ($this->getAttribute($context["property"], "static", array())) {
                echo "static";
            }
            // line 163
            echo "                    ";
            if ($this->getAttribute($context["property"], "protected", array())) {
                echo "protected";
            }
            // line 164
            echo "                    ";
            if ($this->getAttribute($context["property"], "private", array())) {
                echo "private";
            }
            // line 165
            echo "                    ";
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->gethint_link($this->getAttribute($context["property"], "hint", array()));
            echo "
                </td>
                <td>\$";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"last\">";
            // line 168
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["property"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
                <td>";
            // line 170
            if ( !($this->getAttribute($context["property"], "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 171
                echo "<small>from&nbsp;";
                echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getproperty_link($context["property"], false, true);
                echo "</small>";
            }
            // line 173
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "    </table>
";
    }

    // line 179
    public function block_methods($context, array $blocks = array())
    {
        // line 180
        echo "    <div class=\"container-fluid underlined\">
        ";
        // line 181
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 182
            echo "            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    ";
            // line 184
            if ($this->getAttribute($context["method"], "static", array())) {
                echo "static&nbsp;";
            }
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->gethint_link($this->getAttribute($context["method"], "hint", array()));
            echo "
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "</a>";
            $this->displayBlock("method_parameters_signature", $context, $blocks);
            echo "
                    ";
            // line 188
            if ( !$this->getAttribute($context["method"], "shortdesc", array())) {
                // line 189
                echo "                        <p class=\"no-description\">No description</p>
                    ";
            } else {
                // line 191
                echo "                        <p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["method"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 193
            echo "                </div>
                <div class=\"col-md-2\">";
            // line 195
            if ( !($this->getAttribute($context["method"], "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 196
                echo "<small>from&nbsp;";
                echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getmethod_link($context["method"], false, true);
                echo "</small>";
            }
            // line 198
            echo "</div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "    </div>
";
    }

    // line 204
    public function block_methods_details($context, array $blocks = array())
    {
        // line 205
        echo "    <div id=\"method-details\">
        ";
        // line 206
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 207
            echo "            <div class=\"method-item\">
                ";
            // line 208
            $this->displayBlock("method", $context, $blocks);
            echo "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "    </div>
";
    }

    // line 214
    public function block_method($context, array $blocks = array())
    {
        // line 215
        echo "    <h3 id=\"method_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
        echo "\">
        <div class=\"location\">";
        // line 216
        if ( !($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
            echo "in ";
            echo $context["__internal_18ab557581dba1e58159eb1a3d2fc3373528178822059b34c9f1c5f33f180b6b"]->getmethod_link((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), false, true);
            echo " ";
        }
        echo "at line ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "line", array()), "html", null, true);
        echo "</div>
        <code>";
        // line 217
        $this->displayBlock("method_signature", $context, $blocks);
        echo "</code>
    </h3>
    <div class=\"details\">
        ";
        // line 220
        if (($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()) || $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()))) {
            // line 221
            echo "            <div class=\"method-description\">
                ";
            // line 222
            if (( !$this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()) &&  !$this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()))) {
                // line 223
                echo "                    <p class=\"no-description\">No description</p>
                ";
            } else {
                // line 225
                echo "                    ";
                if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array())) {
                    // line 226
                    echo "<p>";
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                    echo "</p>";
                }
                // line 228
                echo "                    ";
                if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array())) {
                    // line 229
                    echo "<p>";
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                    echo "</p>";
                }
            }
            // line 232
            echo "            </div>
        ";
        }
        // line 234
        echo "        <div class=\"tags\">
            ";
        // line 235
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array())) {
            // line 236
            echo "                <h4>Parameters</h4>

                ";
            // line 238
            $this->displayBlock("parameters", $context, $blocks);
            echo "
            ";
        }
        // line 240
        echo "
            ";
        // line 241
        if (($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hintDesc", array()) || $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()))) {
            // line 242
            echo "                <h4>Return Value</h4>

                ";
            // line 244
            $this->displayBlock("return", $context, $blocks);
            echo "
            ";
        }
        // line 246
        echo "
            ";
        // line 247
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "exceptions", array())) {
            // line 248
            echo "                <h4>Exceptions</h4>

                ";
            // line 250
            $this->displayBlock("exceptions", $context, $blocks);
            echo "
            ";
        }
        // line 252
        echo "
            ";
        // line 253
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "tags", array(0 => "see"), "method")) {
            // line 254
            echo "                <h4>See also</h4>

                ";
            // line 256
            $this->displayBlock("see", $context, $blocks);
            echo "
            ";
        }
        // line 258
        echo "        </div>
    </div>
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
        return array (  793 => 258,  788 => 256,  784 => 254,  782 => 253,  779 => 252,  774 => 250,  770 => 248,  768 => 247,  765 => 246,  760 => 244,  756 => 242,  754 => 241,  751 => 240,  746 => 238,  742 => 236,  740 => 235,  737 => 234,  733 => 232,  727 => 229,  724 => 228,  719 => 226,  716 => 225,  712 => 223,  710 => 222,  707 => 221,  705 => 220,  699 => 217,  689 => 216,  684 => 215,  681 => 214,  676 => 211,  659 => 208,  656 => 207,  639 => 206,  636 => 205,  633 => 204,  628 => 201,  612 => 198,  607 => 196,  605 => 195,  602 => 193,  597 => 191,  593 => 189,  591 => 188,  583 => 187,  574 => 184,  570 => 182,  553 => 181,  550 => 180,  547 => 179,  542 => 176,  534 => 173,  529 => 171,  527 => 170,  523 => 168,  519 => 167,  513 => 165,  508 => 164,  503 => 163,  499 => 162,  495 => 161,  492 => 160,  488 => 159,  485 => 158,  482 => 157,  477 => 154,  467 => 150,  463 => 149,  458 => 147,  455 => 146,  451 => 145,  448 => 144,  445 => 143,  440 => 140,  431 => 137,  427 => 136,  424 => 135,  420 => 134,  417 => 133,  414 => 132,  409 => 129,  400 => 126,  396 => 125,  393 => 124,  389 => 123,  386 => 122,  383 => 121,  375 => 116,  371 => 115,  367 => 113,  364 => 112,  359 => 109,  350 => 106,  346 => 105,  340 => 104,  337 => 103,  333 => 102,  330 => 101,  327 => 100,  323 => 97,  321 => 96,  318 => 95,  312 => 92,  307 => 91,  302 => 90,  297 => 89,  292 => 88,  287 => 87,  283 => 86,  280 => 85,  274 => 82,  257 => 79,  255 => 78,  238 => 77,  235 => 76,  233 => 75,  229 => 73,  227 => 72,  224 => 71,  219 => 70,  215 => 69,  212 => 68,  207 => 65,  202 => 63,  195 => 59,  191 => 57,  189 => 56,  186 => 55,  181 => 53,  177 => 51,  175 => 50,  172 => 49,  167 => 47,  163 => 45,  161 => 44,  158 => 43,  153 => 41,  149 => 39,  147 => 38,  144 => 37,  140 => 35,  135 => 33,  132 => 32,  127 => 30,  125 => 29,  122 => 28,  120 => 27,  115 => 25,  109 => 22,  105 => 20,  102 => 19,  93 => 13,  89 => 12,  85 => 11,  81 => 9,  78 => 8,  75 => 7,  69 => 5,  63 => 4,  55 => 3,  51 => 1,  49 => 2,  11 => 1,);
    }
}

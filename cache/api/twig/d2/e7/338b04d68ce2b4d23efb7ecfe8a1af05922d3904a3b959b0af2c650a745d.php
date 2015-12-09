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
        $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"] = $this->env->loadTemplate("macros.twig");
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
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getbreadcrumbs($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "namespace", array()));
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
        <span class=\"pull-right>Edit ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), "html", null, true);
        echo "</span>
    </div>

    <p>";
        // line 26
        $this->displayBlock("class_signature", $context, $blocks);
        echo "</p>

    ";
        // line 28
        if (($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array()) || $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array()))) {
            // line 29
            echo "        <div class=\"description\">
            ";
            // line 30
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array())) {
                // line 31
                echo "<p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 33
            echo "            ";
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array())) {
                // line 34
                echo "<p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 36
            echo "        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ((isset($context["traits"]) ? $context["traits"] : $this->getContext($context, "traits"))) {
            // line 40
            echo "        <h2>Traits</h2>

        ";
            // line 42
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getrender_classes((isset($context["traits"]) ? $context["traits"] : $this->getContext($context, "traits")));
            echo "
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((isset($context["constants"]) ? $context["constants"] : $this->getContext($context, "constants"))) {
            // line 46
            echo "        <h2>Constants</h2>

        ";
            // line 48
            $this->displayBlock("constants", $context, $blocks);
            echo "
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if ((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties"))) {
            // line 52
            echo "        <h2>Properties</h2>

        ";
            // line 54
            $this->displayBlock("properties", $context, $blocks);
            echo "
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if ((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods"))) {
            // line 58
            echo "        <h2>Methods</h2>

        ";
            // line 60
            $this->displayBlock("methods", $context, $blocks);
            echo "

        <h2>Details</h2>

        ";
            // line 64
            $this->displayBlock("methods_details", $context, $blocks);
            echo "
    ";
        }
        // line 66
        echo "
";
    }

    // line 69
    public function block_class_signature($context, array $blocks = array())
    {
        // line 70
        if (( !$this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interface", array()) && $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "abstract", array()))) {
            echo "abstract ";
        }
        // line 71
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "categoryName", array()), "html", null, true);
        echo "
    <strong>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()), "html", null, true);
        echo "</strong>";
        // line 73
        if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "parent", array())) {
            // line 74
            echo "        extends ";
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getclass_link($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "parent", array()));
        }
        // line 76
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interfaces", array())) > 0)) {
            // line 77
            echo "        implements
        ";
            // line 78
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
                // line 79
                echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getclass_link($context["interface"]);
                // line 80
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
        // line 83
        echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getsource_link((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
        echo "
";
    }

    // line 86
    public function block_method_signature($context, array $blocks = array())
    {
        // line 87
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "final", array())) {
            echo "final";
        }
        // line 88
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "abstract", array())) {
            echo "abstract";
        }
        // line 89
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "static", array())) {
            echo "static";
        }
        // line 90
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "protected", array())) {
            echo "protected";
        }
        // line 91
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "private", array())) {
            echo "private";
        }
        // line 92
        echo "    ";
        echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->gethint_link($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()));
        echo "
    <strong>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
        echo "</strong>";
        $this->displayBlock("method_parameters_signature", $context, $blocks);
    }

    // line 96
    public function block_method_parameters_signature($context, array $blocks = array())
    {
        // line 97
        $context["__internal_dd2f12b7625923d7ca0770388fc71dbae4508c719af5049aed30cb05a7530dff"] = $this->env->loadTemplate("macros.twig");
        // line 98
        echo $context["__internal_dd2f12b7625923d7ca0770388fc71dbae4508c719af5049aed30cb05a7530dff"]->getmethod_parameters_signature((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
    }

    // line 101
    public function block_parameters($context, array $blocks = array())
    {
        // line 102
        echo "    <table class=\"table table-condensed\">
        ";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 104
            echo "            <tr>
                <td>";
            // line 105
            if ($this->getAttribute($context["parameter"], "hint", array())) {
                echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->gethint_link($this->getAttribute($context["parameter"], "hint", array()));
            }
            echo "</td>
                <td>\$";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 107
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["parameter"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    </table>
";
    }

    // line 113
    public function block_return($context, array $blocks = array())
    {
        // line 114
        echo "    <table class=\"table table-condensed\">
        <tr>
            <td>";
        // line 116
        echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->gethint_link($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()));
        echo "</td>
            <td>";
        // line 117
        echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hintDesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
        echo "</td>
        </tr>
    </table>
";
    }

    // line 122
    public function block_exceptions($context, array $blocks = array())
    {
        // line 123
        echo "    <table class=\"table table-condensed\">
        ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "exceptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
            // line 125
            echo "            <tr>
                <td>";
            // line 126
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getclass_link($this->getAttribute($context["exception"], 0, array(), "array"));
            echo "</td>
                <td>";
            // line 127
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["exception"], 1, array(), "array"), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </table>
";
    }

    // line 133
    public function block_see($context, array $blocks = array())
    {
        // line 134
        echo "    <table class=\"table table-condensed\">
        ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "tags", array(0 => "see"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 136
            echo "            <tr>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " "), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </table>
";
    }

    // line 144
    public function block_constants($context, array $blocks = array())
    {
        // line 145
        echo "    <table class=\"table table-condensed\">
        ";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constants"]) ? $context["constants"] : $this->getContext($context, "constants")));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 147
            echo "            <tr>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["constant"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"last\">
                    <p><em>";
            // line 150
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["constant"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</em></p>
                    <p>";
            // line 151
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["constant"], "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</p>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "    </table>
";
    }

    // line 158
    public function block_properties($context, array $blocks = array())
    {
        // line 159
        echo "    <table class=\"table table-condensed\">
        ";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 161
            echo "            <tr>
                <td class=\"type\" id=\"property_";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "\">
                    ";
            // line 163
            if ($this->getAttribute($context["property"], "static", array())) {
                echo "static";
            }
            // line 164
            echo "                    ";
            if ($this->getAttribute($context["property"], "protected", array())) {
                echo "protected";
            }
            // line 165
            echo "                    ";
            if ($this->getAttribute($context["property"], "private", array())) {
                echo "private";
            }
            // line 166
            echo "                    ";
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->gethint_link($this->getAttribute($context["property"], "hint", array()));
            echo "
                </td>
                <td>\$";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"last\">";
            // line 169
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["property"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
                <td>";
            // line 171
            if ( !($this->getAttribute($context["property"], "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 172
                echo "<small>from&nbsp;";
                echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getproperty_link($context["property"], false, true);
                echo "</small>";
            }
            // line 174
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "    </table>
";
    }

    // line 180
    public function block_methods($context, array $blocks = array())
    {
        // line 181
        echo "    <div class=\"container-fluid underlined\">
        ";
        // line 182
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
            // line 183
            echo "            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    ";
            // line 185
            if ($this->getAttribute($context["method"], "static", array())) {
                echo "static&nbsp;";
            }
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->gethint_link($this->getAttribute($context["method"], "hint", array()));
            echo "
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "</a>";
            $this->displayBlock("method_parameters_signature", $context, $blocks);
            echo "
                    ";
            // line 189
            if ( !$this->getAttribute($context["method"], "shortdesc", array())) {
                // line 190
                echo "                        <p class=\"no-description\">No description</p>
                    ";
            } else {
                // line 192
                echo "                        <p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["method"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 194
            echo "                </div>
                <div class=\"col-md-2\">";
            // line 196
            if ( !($this->getAttribute($context["method"], "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 197
                echo "<small>from&nbsp;";
                echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getmethod_link($context["method"], false, true);
                echo "</small>";
            }
            // line 199
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
        // line 202
        echo "    </div>
";
    }

    // line 205
    public function block_methods_details($context, array $blocks = array())
    {
        // line 206
        echo "    <div id=\"method-details\">
        ";
        // line 207
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
            // line 208
            echo "            <div class=\"method-item\">
                ";
            // line 209
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
        // line 212
        echo "    </div>
";
    }

    // line 215
    public function block_method($context, array $blocks = array())
    {
        // line 216
        echo "    <h3 id=\"method_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
        echo "\">
        <div class=\"location\">";
        // line 217
        if ( !($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
            echo "in ";
            echo $context["__internal_7d195477799f982fd3814126484790b95253529c17cb67f66e9c4004134f5530"]->getmethod_link((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), false, true);
            echo " ";
        }
        echo "at line ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "line", array()), "html", null, true);
        echo "</div>
        <code>";
        // line 218
        $this->displayBlock("method_signature", $context, $blocks);
        echo "</code>
    </h3>
    <div class=\"details\">
        ";
        // line 221
        if (($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()) || $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()))) {
            // line 222
            echo "            <div class=\"method-description\">
                ";
            // line 223
            if (( !$this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()) &&  !$this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()))) {
                // line 224
                echo "                    <p class=\"no-description\">No description</p>
                ";
            } else {
                // line 226
                echo "                    ";
                if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array())) {
                    // line 227
                    echo "<p>";
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                    echo "</p>";
                }
                // line 229
                echo "                    ";
                if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array())) {
                    // line 230
                    echo "<p>";
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                    echo "</p>";
                }
            }
            // line 233
            echo "            </div>
        ";
        }
        // line 235
        echo "        <div class=\"tags\">
            ";
        // line 236
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array())) {
            // line 237
            echo "                <h4>Parameters</h4>

                ";
            // line 239
            $this->displayBlock("parameters", $context, $blocks);
            echo "
            ";
        }
        // line 241
        echo "
            ";
        // line 242
        if (($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hintDesc", array()) || $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()))) {
            // line 243
            echo "                <h4>Return Value</h4>

                ";
            // line 245
            $this->displayBlock("return", $context, $blocks);
            echo "
            ";
        }
        // line 247
        echo "
            ";
        // line 248
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "exceptions", array())) {
            // line 249
            echo "                <h4>Exceptions</h4>

                ";
            // line 251
            $this->displayBlock("exceptions", $context, $blocks);
            echo "
            ";
        }
        // line 253
        echo "
            ";
        // line 254
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "tags", array(0 => "see"), "method")) {
            // line 255
            echo "                <h4>See also</h4>

                ";
            // line 257
            $this->displayBlock("see", $context, $blocks);
            echo "
            ";
        }
        // line 259
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
        return array (  797 => 259,  792 => 257,  788 => 255,  786 => 254,  783 => 253,  778 => 251,  774 => 249,  772 => 248,  769 => 247,  764 => 245,  760 => 243,  758 => 242,  755 => 241,  750 => 239,  746 => 237,  744 => 236,  741 => 235,  737 => 233,  731 => 230,  728 => 229,  723 => 227,  720 => 226,  716 => 224,  714 => 223,  711 => 222,  709 => 221,  703 => 218,  693 => 217,  688 => 216,  685 => 215,  680 => 212,  663 => 209,  660 => 208,  643 => 207,  640 => 206,  637 => 205,  632 => 202,  616 => 199,  611 => 197,  609 => 196,  606 => 194,  601 => 192,  597 => 190,  595 => 189,  587 => 188,  578 => 185,  574 => 183,  557 => 182,  554 => 181,  551 => 180,  546 => 177,  538 => 174,  533 => 172,  531 => 171,  527 => 169,  523 => 168,  517 => 166,  512 => 165,  507 => 164,  503 => 163,  499 => 162,  496 => 161,  492 => 160,  489 => 159,  486 => 158,  481 => 155,  471 => 151,  467 => 150,  462 => 148,  459 => 147,  455 => 146,  452 => 145,  449 => 144,  444 => 141,  435 => 138,  431 => 137,  428 => 136,  424 => 135,  421 => 134,  418 => 133,  413 => 130,  404 => 127,  400 => 126,  397 => 125,  393 => 124,  390 => 123,  387 => 122,  379 => 117,  375 => 116,  371 => 114,  368 => 113,  363 => 110,  354 => 107,  350 => 106,  344 => 105,  341 => 104,  337 => 103,  334 => 102,  331 => 101,  327 => 98,  325 => 97,  322 => 96,  316 => 93,  311 => 92,  306 => 91,  301 => 90,  296 => 89,  291 => 88,  287 => 87,  284 => 86,  278 => 83,  261 => 80,  259 => 79,  242 => 78,  239 => 77,  237 => 76,  233 => 74,  231 => 73,  228 => 72,  223 => 71,  219 => 70,  216 => 69,  211 => 66,  206 => 64,  199 => 60,  195 => 58,  193 => 57,  190 => 56,  185 => 54,  181 => 52,  179 => 51,  176 => 50,  171 => 48,  167 => 46,  165 => 45,  162 => 44,  157 => 42,  153 => 40,  151 => 39,  148 => 38,  144 => 36,  139 => 34,  136 => 33,  131 => 31,  129 => 30,  126 => 29,  124 => 28,  119 => 26,  113 => 23,  109 => 22,  105 => 20,  102 => 19,  93 => 13,  89 => 12,  85 => 11,  81 => 9,  78 => 8,  75 => 7,  69 => 5,  63 => 4,  55 => 3,  51 => 1,  49 => 2,  11 => 1,);
    }
}

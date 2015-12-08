<?php

/* macros.twig */
class __TwigTemplate_64469dbaf48e51835a5bf5c8ee9d5ded59e6f7b2216f07e64558d07a75cb73c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 16
        echo "
";
        // line 24
        echo "
";
        // line 32
        echo "
";
        // line 48
        echo "
";
        // line 54
        echo "
";
        // line 58
        echo "
";
        // line 70
        echo "
";
        // line 91
        echo "
";
    }

    // line 1
    public function getnamespace_link($__namespace__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForNamespace($context, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getclass_link($__class__ = null, $__absolute__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            $context["__internal_5a0b8809957db9a1c7f9d131b7dd0be9f355ec3e82134fb67ed3080aa2a3f895"] = $this;
            // line 8
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "projectclass", array())) {
                // line 9
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForClass($context, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))), "html", null, true);
                echo "\">";
            } elseif ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "phpclass", array())) {
                // line 11
                echo "<a target=\"_blank\" href=\"http://php.net/";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\">";
            }
            // line 13
            echo $context["__internal_5a0b8809957db9a1c7f9d131b7dd0be9f355ec3e82134fb67ed3080aa2a3f895"]->getabbr_class((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), ((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) ? $context["absolute"] : $this->getContext($context, "absolute")), false)) : (false)));
            // line 14
            if (($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "projectclass", array()) || $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "phpclass", array()))) {
                echo "</a>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getmethod_link($__method__ = null, $__absolute__ = null, $__classonly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            $context["__internal_f470de4f98e3d71ee8510c3f395b832ccf02074422bdd88f0a04fa51fa0c39b1"] = $this;
            // line 19
            echo "
    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForMethod($context, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"))), "html", null, true);
            echo "\">";
            // line 21
            echo $context["__internal_f470de4f98e3d71ee8510c3f395b832ccf02074422bdd88f0a04fa51fa0c39b1"]->getabbr_class($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "class", array()));
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) ? $context["classonly"] : $this->getContext($context, "classonly")), false)) : (false))) {
                echo "::";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
            }
            // line 22
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getproperty_link($__property__ = null, $__absolute__ = null, $__classonly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            $context["__internal_fbf95a7a6f8b82779d111542b7fc56a891ceab066b720806e0a3a03c9ac32ce1"] = $this;
            // line 27
            echo "
    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForProperty($context, (isset($context["property"]) ? $context["property"] : $this->getContext($context, "property"))), "html", null, true);
            echo "\">";
            // line 29
            echo $context["__internal_fbf95a7a6f8b82779d111542b7fc56a891ceab066b720806e0a3a03c9ac32ce1"]->getabbr_class($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "class", array()));
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) ? $context["classonly"] : $this->getContext($context, "classonly")), true)) : (true))) {
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
            }
            // line 30
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gethint_link($__hints__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "hints" => $__hints__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            $context["__internal_5042b90c1a4cb2762fc4029046378ac18470d1d68ba4a886aee5846ec0196ad5"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if ((isset($context["hints"]) ? $context["hints"] : $this->getContext($context, "hints"))) {
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hints"]) ? $context["hints"] : $this->getContext($context, "hints")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
                    // line 38
                    if ($this->getAttribute($context["hint"], "class", array())) {
                        // line 39
                        echo $context["__internal_5042b90c1a4cb2762fc4029046378ac18470d1d68ba4a886aee5846ec0196ad5"]->getclass_link($this->getAttribute($context["hint"], "name", array()));
                    } elseif ($this->getAttribute($context["hint"], "name", array())) {
                        // line 41
                        echo $this->env->getExtension('sami')->abbrClass($this->getAttribute($context["hint"], "name", array()));
                    }
                    // line 43
                    if ($this->getAttribute($context["hint"], "array", array())) {
                        echo "[]";
                    }
                    // line 44
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "|";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getsource_link($__project__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "project" => $__project__,
            "class" => $__class__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "sourcepath", array())) {
                // line 51
                echo "        (<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "sourcepath", array()), "html", null, true);
                echo "\">View source</a>)";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getabbr_class($__class__ = null, $__absolute__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) ? $context["absolute"] : $this->getContext($context, "absolute")), false)) : (false))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()))), "html", null, true);
            echo "</abbr>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getmethod_parameters_signature($__method__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            $context["__internal_b8294e793815be1e93c5ce578fbd0a0d5fe9b868ecc37df9d338c58b56d62554"] = $this->env->loadTemplate("macros.twig");
            // line 61
            echo "(";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
                // line 63
                if ($this->getAttribute($context["parameter"], "hashint", array())) {
                    echo $context["__internal_b8294e793815be1e93c5ce578fbd0a0d5fe9b868ecc37df9d338c58b56d62554"]->gethint_link($this->getAttribute($context["parameter"], "hint", array()));
                    echo " ";
                }
                // line 64
                echo "\$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "name", array()), "html", null, true);
                // line 65
                if ($this->getAttribute($context["parameter"], "default", array())) {
                    echo " = ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "default", array()), "html", null, true);
                }
                // line 66
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo ")";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getrender_classes($__classes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "classes" => $__classes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            $context["__internal_937eb6824743ff35f49c1ad78aa8883d130f84fb68e1650ef76b9f7a852ef28f"] = $this;
            // line 73
            echo "
    <div class=\"container-fluid underlined\">
        ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 76
                echo "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
                // line 78
                if ($this->getAttribute($context["class"], "isInterface", array())) {
                    // line 79
                    echo "                        <em>";
                    echo $context["__internal_937eb6824743ff35f49c1ad78aa8883d130f84fb68e1650ef76b9f7a852ef28f"]->getclass_link($context["class"], true);
                    echo "</em>
                    ";
                } else {
                    // line 81
                    echo "                        ";
                    echo $context["__internal_937eb6824743ff35f49c1ad78aa8883d130f84fb68e1650ef76b9f7a852ef28f"]->getclass_link($context["class"], true);
                    echo "
                    ";
                }
                // line 83
                echo "                </div>
                <div class=\"col-md-6\">
                    ";
                // line 85
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["class"], "shortdesc", array()), $context["class"]);
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getbreadcrumbs($__namespace__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            $context["current_ns"] = "";
            // line 94
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "\\"));
            foreach ($context['_seq'] as $context["_key"] => $context["ns"]) {
                // line 95
                echo "        ";
                if ((isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns"))) {
                    // line 96
                    echo "            ";
                    $context["current_ns"] = (((isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns")) . "\\") . $context["ns"]);
                    // line 97
                    echo "        ";
                } else {
                    // line 98
                    echo "            ";
                    $context["current_ns"] = $context["ns"];
                    // line 99
                    echo "        ";
                }
                // line 100
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForNamespace($context, (isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["ns"], "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 100,  486 => 99,  483 => 98,  480 => 97,  477 => 96,  474 => 95,  469 => 94,  466 => 93,  455 => 92,  444 => 89,  434 => 85,  430 => 83,  424 => 81,  418 => 79,  416 => 78,  412 => 76,  408 => 75,  404 => 73,  402 => 72,  391 => 71,  380 => 68,  364 => 66,  359 => 65,  356 => 64,  351 => 63,  334 => 62,  332 => 61,  330 => 60,  319 => 59,  304 => 56,  292 => 55,  278 => 51,  276 => 50,  264 => 49,  238 => 44,  234 => 43,  231 => 41,  228 => 39,  226 => 38,  209 => 37,  207 => 36,  204 => 35,  202 => 34,  191 => 33,  180 => 30,  174 => 29,  171 => 28,  168 => 27,  166 => 26,  153 => 25,  142 => 22,  136 => 21,  133 => 20,  130 => 19,  128 => 18,  115 => 17,  102 => 14,  100 => 13,  95 => 11,  90 => 9,  88 => 8,  86 => 6,  74 => 5,  59 => 2,  48 => 1,  43 => 91,  40 => 70,  37 => 58,  34 => 54,  31 => 48,  28 => 32,  25 => 24,  22 => 16,  19 => 4,);
    }
}

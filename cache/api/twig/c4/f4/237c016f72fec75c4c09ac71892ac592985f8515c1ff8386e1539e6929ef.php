<?php

/* namespaces.twig */
class __TwigTemplate_c4f4237c016f72fec75c4c09ac71892ac592985f8515c1ff8386e1539e6929ef extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Namespaces | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_body_class($context, array $blocks = array())
    {
        echo "namespaces";
    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"page-header\">
        <h1>Namespaces</h1>
    </div>

    ";
        // line 10
        if ((isset($context["namespaces"]) ? $context["namespaces"] : $this->getContext($context, "namespaces"))) {
            // line 11
            echo "        <div class=\"namespaces clearfix\">
            ";
            // line 12
            $context["last_name"] = "";
            // line 13
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["namespaces"]) ? $context["namespaces"] : $this->getContext($context, "namespaces")));
            foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
                // line 14
                echo "                ";
                $context["top_level"] = twig_first($this->env, twig_split_filter($this->env, $context["namespace"], "\\"));
                // line 15
                echo "                ";
                if (((isset($context["top_level"]) ? $context["top_level"] : $this->getContext($context, "top_level")) != (isset($context["last_name"]) ? $context["last_name"] : $this->getContext($context, "last_name")))) {
                    // line 16
                    echo "                    ";
                    if ((isset($context["last_name"]) ? $context["last_name"] : $this->getContext($context, "last_name"))) {
                        echo "</ul></div>";
                    }
                    // line 17
                    echo "                    <div class=\"namespace-container\">
                        <h2>";
                    // line 18
                    echo twig_escape_filter($this->env, (isset($context["top_level"]) ? $context["top_level"] : $this->getContext($context, "top_level")), "html", null, true);
                    echo "</h2>
                        <ul>
                    ";
                    // line 20
                    $context["last_name"] = (isset($context["top_level"]) ? $context["top_level"] : $this->getContext($context, "top_level"));
                    // line 21
                    echo "                ";
                }
                // line 22
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForNamespace($context, $context["namespace"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["namespace"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
            </div>
        </div>
    ";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "namespaces.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  107 => 24,  96 => 22,  93 => 21,  91 => 20,  86 => 18,  83 => 17,  78 => 16,  75 => 15,  72 => 14,  67 => 13,  65 => 12,  62 => 11,  60 => 10,  54 => 6,  51 => 5,  45 => 3,  38 => 2,  11 => 1,);
    }
}

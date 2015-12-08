<?php

/* search.twig */
class __TwigTemplate_1d1c0618671af8a62b33c004f2a8264ab8125f269aa5f883f92dc12d0779b483 extends Twig_Template
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
            'js_search' => array($this, 'block_js_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_3ba6b3b2d40b501be8a2fa91f5f40114054b8e1410c6ddb8035cab0470c0bf40"] = $this->env->loadTemplate("macros.twig");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Search | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "search-page";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"page-header\">
        <h1>Search</h1>
    </div>

    <p>This page allows you to search through the API documentation for
    specific terms. Enter your search words into the box below and click
    \"submit\". The search will be performed on namespaces, clases, interfaces,
    traits, functions, and methods.</p>

    <form class=\"form-inline\" role=\"form\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForStaticFile($context, "search.html"), "html", null, true);
        echo "\" method=\"GET\">
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"search\">Search</label>
            <input type=\"search\" class=\"form-control\" name=\"search\" id=\"search\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">submit</button>
    </form>

    <h2>Search Results</h2>

    <div class=\"container-fluid\">
        <ul class=\"search-results\"></ul>
    </div>

    ";
        // line 31
        $this->displayBlock("js_search", $context, $blocks);
        echo "

";
    }

    // line 35
    public function block_js_search($context, array $blocks = array())
    {
        // line 36
        echo "    <script type=\"text/javascript\">

        (function() {
            var term = Sami.cleanSearchTerm();

            if (!term) {
                \$('h2').hide();
                return;
            }

            \$('#search').val(term);
            var container = \$('.search-results');

            // create the search index
            ";
        // line 50
        $this->displayBlock("search_index", $context, $blocks);
        echo "

            var results = Sami.search(term);
            var len = results.length;

            if (len == 0) {
                container.html('No results were found');
                return;
            }

            for (var i = 0, text_content = ''; i < len; i++) {

                var ele = results[i];
                var contents = '<li><h2 class=\"clearfix\">';
                var class_name = Sami.getSearchClass(ele.type);
                contents += '<a href=\"' + ele.link + '\">' + ele.name + '</a>';
                contents += '<div class=\"search-type type-' + ele.type + '\"><span class=\"pull-right label ' + class_name + '\">' + ele.type + '</span></div>';
                contents += '</h2>';

                if (ele.fromName && ele.fromLink) {
                    contents += '<div class=\"search-from\">from <a href=\"' + ele.fromLink + '\">' + ele.fromName + '</a></div>';
                }

                contents += '<div class=\"search-description\">';

                // Add description, decode entities, and strip wrapping quotes
                if (ele.doc) {
                    text_content = \$('<p>' + ele.doc + '</p>').text();
                    if (text_content[0] == '\"') {
                        text_content = text_content.substring(1);
                    }
                    if (text_content[text_content.length - 1] == '\"') {
                        text_content = text_content.substring(0, text_content.length - 1);
                    }
                    contents += text_content;
                }

                contents += '</div></li>';
                container.append(\$(contents));
            }
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  97 => 36,  94 => 35,  87 => 31,  70 => 17,  58 => 7,  55 => 6,  49 => 4,  42 => 3,  38 => 1,  36 => 2,  11 => 1,);
    }
}

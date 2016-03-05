<?php

/* welcome_message.twig */
class __TwigTemplate_854b705634ccfa57ca5a3f1f4abf1a9c4ffe77ca6bb7ea76fbbb09b18eadb293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "welcome_message.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            '__internal_6a59ad95ce2904fab4eb0964e50d4bc46d2ee84b39dd82afcc1ef0ab266b73af' => array($this, 'block___internal_6a59ad95ce2904fab4eb0964e50d4bc46d2ee84b39dd82afcc1ef0ab266b73af'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>Index</h1>
    <p class=\"important\">
        ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "

        ";
        // line 15
        $context["foo"] = "fooTest";
        echo "<br/>

       \t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : null), "html", null, true);
        echo "<br/>

       \t";
        // line 19
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_6a59ad95ce2904fab4eb0964e50d4bc46d2ee84b39dd82afcc1ef0ab266b73af", $context, $blocks)), "html", null, true);
        // line 22
        echo "
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "    \t\t\t\t";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",<br/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </p>


";
    }

    // line 19
    public function block___internal_6a59ad95ce2904fab4eb0964e50d4bc46d2ee84b39dd82afcc1ef0ab266b73af($context, array $blocks = array())
    {
        // line 20
        echo "\t\t    This text becomes uppercase
\t\t";
    }

    public function getTemplateName()
    {
        return "welcome_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  97 => 19,  90 => 26,  81 => 24,  77 => 23,  74 => 22,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  53 => 11,  50 => 10,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block title %}Index{% endblock %}*/
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <style type="text/css">*/
/*         .important { color: #336699; }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <h1>Index</h1>*/
/*     <p class="important">*/
/*         {{nom}}*/
/* */
/*         {% set foo = 'fooTest' %}<br/>*/
/* */
/*        	{{foo}}<br/>*/
/* */
/*        	{% filter upper %}*/
/* 		    This text becomes uppercase*/
/* 		{% endfilter %}*/
/* */
/* 		{% for i in range(0, 3) %}*/
/*     				{{ i }},<br/>*/
/* 		{% endfor %}*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/

<?php

/* challengeNewsBundle::layout.html.twig */
class __TwigTemplate_a924c8be30f552d53cf795ad749254c904be3a7df2a36ad7dc5ec5b106074573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "challengeNewsBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'news' => array($this, 'block_news'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"header\" class=\"jumbotron\">
    <h1 class=\"text-center\">News</h1>
    <h2 class=\"text-center\">
        Les derniere news:
    </h2>

</div>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayBlock('news', $context, $blocks);
    }

    public function block_news($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "challengeNewsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  47 => 12,  44 => 11,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block header %}*/
/* <div id="header" class="jumbotron">*/
/*     <h1 class="text-center">News</h1>*/
/*     <h2 class="text-center">*/
/*         Les derniere news:*/
/*     </h2>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block news %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */

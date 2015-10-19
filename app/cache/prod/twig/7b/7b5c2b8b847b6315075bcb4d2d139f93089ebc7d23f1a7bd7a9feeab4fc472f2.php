<?php

/* challengeLBundle::layout.html.twig */
class __TwigTemplate_d398a5a3e0ad973a6bbd6e865e125b6d69d4d63b3318af0a9d561808f4e1571c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "challengeLBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'index' => array($this, 'block_index'),
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
        echo "    <div id=\"header\" class=\"jumbotron\">
        <h1 class=\"text-center\">Challenge Lobby</h1>
        <h2 class=\"text-center\">
            blgeoihgeskjviyheidfuhivuyhseughiesoghieoehtio<
        </h2>

    </div>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayBlock('index', $context, $blocks);
    }

    public function block_index($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "challengeLBundle::layout.html.twig";
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
/*     <div id="header" class="jumbotron">*/
/*         <h1 class="text-center">Challenge Lobby</h1>*/
/*         <h2 class="text-center">*/
/*             blgeoihgeskjviyheidfuhivuyhseughiesoghieoehtio<*/
/*         </h2>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block index %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */

<?php

/* challengeUserBundle:navbar:menu.html.twig */
class __TwigTemplate_c44a4ec91dccca7c8dced3717973a90a7330ac0d4ed0b615aaa2fa3946c4cab0 extends Twig_Template
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
        // line 1
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn   btn-danger navbar-btn\" >Deconnexion</a></li>
<li>
    <div class=\"btn-group\">
        <a href=\"#test\" class=\"btn btn-warning \">Mon compte</a>
        <button class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\">
            <li class=\"dropdown-header\">Mon compte</li>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Paramètres</a></li>
            <li><a href=\"#\"><span class=\"glyphicon glyphicon-screenshot\"></span> Mes derniers lobby</a></li>
            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> Mes messages</a></li>

        </ul>
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "challengeUserBundle:navbar:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <li><a href="{{ path('fos_user_security_logout') }}" class="btn   btn-danger navbar-btn" >Deconnexion</a></li>*/
/* <li>*/
/*     <div class="btn-group">*/
/*         <a href="#test" class="btn btn-warning ">Mon compte</a>*/
/*         <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>*/
/*         <ul class="dropdown-menu">*/
/*             <li class="dropdown-header">Mon compte</li>*/
/*             <li><a href="#"><span class="glyphicon glyphicon-user"></span> Paramètres</a></li>*/
/*             <li><a href="#"><span class="glyphicon glyphicon-screenshot"></span> Mes derniers lobby</a></li>*/
/*             <li><a href="#"><i class="fa fa-envelope-o"></i> Mes messages</a></li>*/
/* */
/*         </ul>*/
/*     </div>*/
/* </li>*/

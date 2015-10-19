<?php

/* ::layout.html.twig */
class __TwigTemplate_af93e9a3dd99d20567d5c5caea1bf2926a206fab954dfcf74261d50891962351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <title>
    ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "    </title>


    ";
        // line 16
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 23
        echo "
</head>
<body>

    <section id=\"container\" class=\"\">
        <div class=\"header dark-bg\">
            <nav class=\"navbar navbar-default navbar-inverse\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <div class=\"toggle-nav\">
                                <boutton class=\"btn\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"><i class=\"fa fa-bars fa-3x\"></i></boutton>
                        </div>

                        <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("challenge_l_homepage");
        echo "\">Accueil</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" >
                        <ul id=\"nav1\" class=\"nav navbar-nav navbar-right\">

                            ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "                                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("challengeUserBundle:navbar:menu"));
            echo "
                            ";
        } else {
            // line 47
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-danger navbar-btn\" >S'inscrire</a></li>

                                <li><a type=\"button\" href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-success navbar-btn btn-circle\">Login</a></li>
                            ";
        }
        // line 51
        echo "






                        </ul>
                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>


        </div>
        <aside>
            <div id=\"sidebar\"  class=\"nav-collapse \">
                <ul class=\"sidebar-menu\">
                    <li class=\"sub-menu\">
                        <a class=\"\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("challenge_news_homepage");
        echo "\">
                            <i class=\"fa fa-info-circle\"></i>
                            <span>News</span>
                        </a>
                    </li>
                    <li class=\"sub-menu\">
                        <a href=\"javascript:;\" class=\"\">
                            <i class=\"fa fa-desktop\"></i>
                            <span>Forum</span>
                        </a>

                    </li>
                    <li class=\"sub-menu\">
                        <a href=\"javascript:;\" class=\"\">
                            <i class=\"fa fa-cogs\"></i>
                            <span>Challenge Lobby</span>

                        </a>
                    </li>


                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <section id=\"main-content\">
            <section class=\"wrapper\">
                <div class=\"row\">
                    <div id=\"content\" class=\"col-lg-12\">
                    ";
        // line 99
        $this->displayBlock('header', $context, $blocks);
        // line 101
        echo "                    </div>
                 <div class=\"row\">
                        ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "                </div>

            </section>
        </section>
        <div class=\"footer\" id=\"footer\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-lg-offset-2\">
                        <h2>Informations:</h2>

                    </div>

                    <div class=\"col-lg-2 col-lg-offset-1\">
                        <h2>Notre entrepôt</h2>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;</p>
                    </div>

                    <div class=\"col-lg-2 col-lg-offset-1 \">
                        <h2>Nous contacter</h2>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel:0605080851 </p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax:5121550515 </p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-lg-offset-4\">
                        <p>&copy; Copyright ";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Arthur</p>
                    </div>
                </div>
            </div>


        </div>
    </section>









";
        // line 148
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "    Accueil
    ";
    }

    // line 16
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 17
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-social.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    ";
    }

    // line 99
    public function block_header($context, array $blocks = array())
    {
        // line 100
        echo "                    ";
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        // line 104
        echo "
                        ";
    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        // line 149
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min .js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>   jQuery('.toggle-nav').click(function () {
            if (jQuery('#sidebar > ul').is(\":visible\") === true) {
                jQuery('#main-content').css({
                    'margin-left': '0px'
                });
                jQuery('#sidebar').css({
                    'margin-left': '-180px'
                });
                jQuery('#sidebar > ul').hide();
                jQuery(\"#container\").addClass(\"sidebar-closed\");
            } else {
                jQuery('#main-content').css({
                    'margin-left': '180px'
                });
                jQuery('#sidebar > ul').show();
                jQuery('#sidebar').css({
                    'margin-left': '0'
                });
                jQuery(\"#container\").removeClass(\"sidebar-closed\");
            }
        });</script>

";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 150,  250 => 149,  247 => 148,  242 => 104,  239 => 103,  235 => 100,  232 => 99,  224 => 19,  220 => 18,  215 => 17,  212 => 16,  207 => 11,  204 => 10,  199 => 174,  197 => 148,  177 => 131,  150 => 106,  148 => 103,  144 => 101,  142 => 99,  110 => 70,  89 => 51,  84 => 49,  78 => 47,  72 => 45,  70 => 44,  60 => 37,  44 => 23,  42 => 16,  37 => 13,  35 => 10,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* */
/*     <title>*/
/*     {% block title %}*/
/*     Accueil*/
/*     {% endblock %}*/
/*     </title>*/
/* */
/* */
/*     {%  block stylesheet %}*/
/*         <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">*/
/*         <link href="{{ asset("css/bootstrap-social.css") }}" rel="stylesheet">*/
/*         <link href="{{ asset("css/app.css") }}" rel="stylesheet">*/
/* */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*     {% endblock  %}*/
/* */
/* </head>*/
/* <body>*/
/* */
/*     <section id="container" class="">*/
/*         <div class="header dark-bg">*/
/*             <nav class="navbar navbar-default navbar-inverse" role="navigation">*/
/*                 <div class="container-fluid">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <div class="toggle-nav">*/
/*                                 <boutton class="btn" data-original-title="Toggle Navigation" data-placement="bottom"><i class="fa fa-bars fa-3x"></i></boutton>*/
/*                         </div>*/
/* */
/*                         <a class="navbar-brand" href="{{ path('challenge_l_homepage') }}">Accueil</a>*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" >*/
/*                         <ul id="nav1" class="nav navbar-nav navbar-right">*/
/* */
/*                             {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                                 {{ render(controller("challengeUserBundle:navbar:menu")) }}*/
/*                             {% else %}*/
/*                                 <li><a href="{{ path('fos_user_registration_register') }}" class="btn btn-danger navbar-btn" >S'inscrire</a></li>*/
/* */
/*                                 <li><a type="button" href="{{ path('fos_user_security_login') }}" class="btn btn-success navbar-btn btn-circle">Login</a></li>*/
/*                             {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                         </ul>*/
/*                     </div><!-- /.navbar-collapse -->*/
/* */
/*                 </div><!-- /.container-fluid -->*/
/*             </nav>*/
/* */
/* */
/*         </div>*/
/*         <aside>*/
/*             <div id="sidebar"  class="nav-collapse ">*/
/*                 <ul class="sidebar-menu">*/
/*                     <li class="sub-menu">*/
/*                         <a class="" href="{{ path('challenge_news_homepage') }}">*/
/*                             <i class="fa fa-info-circle"></i>*/
/*                             <span>News</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="sub-menu">*/
/*                         <a href="javascript:;" class="">*/
/*                             <i class="fa fa-desktop"></i>*/
/*                             <span>Forum</span>*/
/*                         </a>*/
/* */
/*                     </li>*/
/*                     <li class="sub-menu">*/
/*                         <a href="javascript:;" class="">*/
/*                             <i class="fa fa-cogs"></i>*/
/*                             <span>Challenge Lobby</span>*/
/* */
/*                         </a>*/
/*                     </li>*/
/* */
/* */
/*                 </ul>*/
/*                 <!-- sidebar menu end-->*/
/*             </div>*/
/*         </aside>*/
/*         <section id="main-content">*/
/*             <section class="wrapper">*/
/*                 <div class="row">*/
/*                     <div id="content" class="col-lg-12">*/
/*                     {% block header %}*/
/*                     {% endblock %}*/
/*                     </div>*/
/*                  <div class="row">*/
/*                         {% block body %}*/
/* */
/*                         {% endblock %}*/
/*                 </div>*/
/* */
/*             </section>*/
/*         </section>*/
/*         <div class="footer" id="footer">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-2 col-lg-offset-2">*/
/*                         <h2>Informations:</h2>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="col-lg-2 col-lg-offset-1">*/
/*                         <h2>Notre entrepôt</h2>*/
/*                         <p><i class="icon-map-marker"></i>&nbsp;</p>*/
/*                     </div>*/
/* */
/*                     <div class="col-lg-2 col-lg-offset-1 ">*/
/*                         <h2>Nous contacter</h2>*/
/*                         <p><i class="icon-phone"></i>&nbsp;Tel:0605080851 </p>*/
/*                         <p><i class="icon-print"></i>&nbsp;Fax:5121550515 </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4 col-lg-offset-4">*/
/*                         <p>&copy; Copyright {{ "now"|date('Y') }} - Arthur</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </section>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset("js/jquery-1.11.3.min .js") }}"></script>*/
/*     <script src="{{ asset("js/bootstrap.min.js") }}"></script>*/
/*     <script>   jQuery('.toggle-nav').click(function () {*/
/*             if (jQuery('#sidebar > ul').is(":visible") === true) {*/
/*                 jQuery('#main-content').css({*/
/*                     'margin-left': '0px'*/
/*                 });*/
/*                 jQuery('#sidebar').css({*/
/*                     'margin-left': '-180px'*/
/*                 });*/
/*                 jQuery('#sidebar > ul').hide();*/
/*                 jQuery("#container").addClass("sidebar-closed");*/
/*             } else {*/
/*                 jQuery('#main-content').css({*/
/*                     'margin-left': '180px'*/
/*                 });*/
/*                 jQuery('#sidebar > ul').show();*/
/*                 jQuery('#sidebar').css({*/
/*                     'margin-left': '0'*/
/*                 });*/
/*                 jQuery("#container").removeClass("sidebar-closed");*/
/*             }*/
/*         });</script>*/
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/

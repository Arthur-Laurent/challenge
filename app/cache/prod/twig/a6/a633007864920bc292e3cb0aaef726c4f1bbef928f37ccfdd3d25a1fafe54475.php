<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_74791f3c544fd5585104ea1ec9548ece26cc53e01a6a30a934ebcb16bdfb6c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"header\" class=\"jumbotron\">

        <h3 class=\"text-center\">
            Veuilliez entrer vos identifiants de connexions :
        </h3>

    </div>
";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-lg-offset-2 \">
                        <h3 class=\"text-center text-danger\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</h3>
                    </div>
                </div>
                <form class=\"form-group\" action=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\"/>

                <div class=\"form-group has-error has-feedback\">
                    <label for=\"username\" class=\"control-label\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo ":</label>
                    <div class=\"input-group\">


                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
            echo "\"
                               required=\"required\"/>


                    </div>
                    <span class=\"glyphicon glyphicon-remove form-control-feedback\" aria-hidden=\"true\"></span>
                </div>

                <div class=\"form-group has-error has-feedback\">
                    <label for=\"password\" class=\"control-label\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo ":</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                    </div>
                    <span class=\"glyphicon glyphicon-remove form-control-feedback\" aria-hidden=\"true\"></span>
                </div>

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label id=\"formpe\" for=\"remember_me\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                    <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\" >Mot de passe oublié ?</a>

                <div class=\"row\">
                    <div class=\"col-lg-2\"></div>
                    <div class=\"col-lg-2\"></div>
                    <div class=\"col-lg-4\">
                        <button class=\"btn btn-success btn-lg\" type=\"submit\" id=\"_submit\" name=\"_submit\"><i class=\"fa fa-get-pocket\"></i> Connexion</button>

                    </div>
                    <div class=\"col-lg-2\"></div>
                    <div class=\"col-lg-2\"></div>
                </div>

            </form>
                <div class=\"col-lg-6\">
                        <a class=\"btn btn-block btn-social btn-google\">
                            <i class=\"fa fa-google\"></i> Se connecter avec google
                        </a>
                    </div>
                <div class=\"col-lg-6\">
                <a class=\"btn btn-block btn-social btn-facebook\">
                            <i class=\"fa fa-facebook\"></i> Se connecter avec facebook </a>
                    </div>
                </div>
            <div class=\"col-lg-4\"></div>
        </div>
    ";
        } else {
            // line 78
            echo "        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">

                <div class=\"row\">


                    <form class=\"form-group\" action=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\"/>
                        <div class=\"form-group \">
                            <label for=\"username\" class=\"control-label\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo ":</label>
                            <div class=\"input-group\">


                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <input class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
            echo "\"
                                       required=\"required\"/>


                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label for=\"password\" class=\"control-label\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo ":</label>

                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
                                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                            </div>



                        </div>


                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                        <label id=\"formp\" for=\"remember_me\">";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                        <a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\" >Mot de passe oublié ?</a>

                        <div class=\"row\">
                            <div class=\"col-lg-2\"></div>
                            <div class=\"col-lg-2\"></div>
                            <div class=\"col-lg-4\">
                                <button class=\"btn btn-success btn-lg\" type=\"submit\" id=\"_submit\" name=\"_submit\"><i class=\"fa fa-get-pocket\"></i> Connexion</button>

                            </div>
                            <div class=\"col-lg-2\"></div>
                            <div class=\"col-lg-2\"></div>
                        </div>

                    </form>


                    <div class=\"col-lg-6\">
                        <a class=\"btn btn-block btn-social btn-google\">
                            <i class=\"fa fa-google\"></i> Se connecter avec google
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <a class=\"btn btn-block btn-social btn-facebook\">
                            <i class=\"fa fa-facebook\"></i> Se connecter avec facebook </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\"></div>
        </div>
    ";
        }
        // line 143
        echo "

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 143,  194 => 113,  190 => 112,  174 => 99,  164 => 92,  156 => 87,  151 => 85,  147 => 84,  139 => 78,  109 => 51,  105 => 50,  93 => 41,  81 => 32,  73 => 27,  67 => 24,  63 => 23,  57 => 20,  51 => 16,  49 => 15,  46 => 14,  43 => 13,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block header %}*/
/*     <div id="header" class="jumbotron">*/
/* */
/*         <h3 class="text-center">*/
/*             Veuilliez entrer vos identifiants de connexions :*/
/*         </h3>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* {% block fos_user_content %}*/
/* */
/*     {% if error %}*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6 col-lg-offset-2 ">*/
/*                         <h3 class="text-center text-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</h3>*/
/*                     </div>*/
/*                 </div>*/
/*                 <form class="form-group" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                 <div class="form-group has-error has-feedback">*/
/*                     <label for="username" class="control-label">{{ 'security.login.username'|trans }}:</label>*/
/*                     <div class="input-group">*/
/* */
/* */
/*                         <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                         <input class="form-control" id="username" name="_username" value="{{ last_username }}"*/
/*                                required="required"/>*/
/* */
/* */
/*                     </div>*/
/*                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>*/
/*                 </div>*/
/* */
/*                 <div class="form-group has-error has-feedback">*/
/*                     <label for="password" class="control-label">{{ 'security.login.password'|trans }}:</label>*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon"><i class="fa fa-key"></i></span>*/
/*                         <input class="form-control" type="password" id="password" name="_password" required="required"/>*/
/*                     </div>*/
/*                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>*/
/*                 </div>*/
/* */
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                 <label id="formpe" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     <a href="{{ path('fos_user_resetting_request') }}" >Mot de passe oublié ?</a>*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-2"></div>*/
/*                     <div class="col-lg-2"></div>*/
/*                     <div class="col-lg-4">*/
/*                         <button class="btn btn-success btn-lg" type="submit" id="_submit" name="_submit"><i class="fa fa-get-pocket"></i> Connexion</button>*/
/* */
/*                     </div>*/
/*                     <div class="col-lg-2"></div>*/
/*                     <div class="col-lg-2"></div>*/
/*                 </div>*/
/* */
/*             </form>*/
/*                 <div class="col-lg-6">*/
/*                         <a class="btn btn-block btn-social btn-google">*/
/*                             <i class="fa fa-google"></i> Se connecter avec google*/
/*                         </a>*/
/*                     </div>*/
/*                 <div class="col-lg-6">*/
/*                 <a class="btn btn-block btn-social btn-facebook">*/
/*                             <i class="fa fa-facebook"></i> Se connecter avec facebook </a>*/
/*                     </div>*/
/*                 </div>*/
/*             <div class="col-lg-4"></div>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/* */
/*                 <div class="row">*/
/* */
/* */
/*                     <form class="form-group" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*                         <div class="form-group ">*/
/*                             <label for="username" class="control-label">{{ 'security.login.username'|trans }}:</label>*/
/*                             <div class="input-group">*/
/* */
/* */
/*                                 <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                                 <input class="form-control" id="username" name="_username" value="{{ last_username }}"*/
/*                                        required="required"/>*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group ">*/
/*                             <label for="password" class="control-label">{{ 'security.login.password'|trans }}:</label>*/
/* */
/*                             <div class="input-group">*/
/*                                 <span class="input-group-addon"><i class="fa fa-key"></i></span>*/
/*                                 <input class="form-control" type="password" id="password" name="_password" required="required"/>*/
/*                             </div>*/
/* */
/* */
/* */
/*                         </div>*/
/* */
/* */
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                         <label id="formp" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                         <a href="{{ path('fos_user_resetting_request') }}" >Mot de passe oublié ?</a>*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-lg-2"></div>*/
/*                             <div class="col-lg-2"></div>*/
/*                             <div class="col-lg-4">*/
/*                                 <button class="btn btn-success btn-lg" type="submit" id="_submit" name="_submit"><i class="fa fa-get-pocket"></i> Connexion</button>*/
/* */
/*                             </div>*/
/*                             <div class="col-lg-2"></div>*/
/*                             <div class="col-lg-2"></div>*/
/*                         </div>*/
/* */
/*                     </form>*/
/* */
/* */
/*                     <div class="col-lg-6">*/
/*                         <a class="btn btn-block btn-social btn-google">*/
/*                             <i class="fa fa-google"></i> Se connecter avec google*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-lg-6">*/
/*                         <a class="btn btn-block btn-social btn-facebook">*/
/*                             <i class="fa fa-facebook"></i> Se connecter avec facebook </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4"></div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */

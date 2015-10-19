<?php

/* challengeNewsBundle:News:index.html.twig */
class __TwigTemplate_fa874b7395599861d2406492d4fe68d9dd6bf83c0aee003e88334ac38cce1b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("challengeNewsBundle::layout.html.twig", "challengeNewsBundle:News:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'news' => array($this, 'block_news'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "challengeNewsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    News
";
    }

    // line 6
    public function block_news($context, array $blocks = array())
    {
        // line 7
        echo "    <div id=\"titrep\" class=\"col-lg-7 col-lg-offset-2\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 9
            echo "    <div class=\"gpost\">
        <div class=\"post-head\">
            <h3><a href=\"single-blog.html\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "</a></h3>
            <div class=\"post-meta\">
                <div><i class=\"fa fa-user\"></i>AUTEUR : <a href=\"#\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "author", array()), "html", null, true);
            echo "</a></div>
                <div><i class=\"fa fa-clock-o\"></i>";
            // line 14
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["new"], "date", array()), "full", "none"), "html", null, true);
            echo "</div>
                <div><i class=\"fa fa-comments\"></i><a href=\"#\">22 Commentaires</a></div>
                <div><i class=\"fa fa-folder-open\"></i>Category : <a href=\"#\">Hack</a>, <a href=\"#\">lobby</a></div>
                <div><i class=\"fa fa-heart\"></i><a href=\"#\">77</a></div>
            </div><!-- End post-meta -->
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"post-wrap\">

            <div class=\"post-inner\">
                <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "</p>
                <div class=\"clearfix\"></div>
                <div class=\"post-share-view\">
                    <div class=\"post-meta\">

                        <div class=\"post-meta-share\">
                            <div><i class=\"fa fa-eye\"></i><span>145 </span>Vues</div>
                            <div>  <i class=\"fa fa-share-alt\"></i>
                                <a href=\"#\">Partager</a> </div>



                        </div>

                    </div><!-- End post-share-view -->
                    <div class=\"clearfix\"></div>
                </div><!-- End post-inner -->
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "challengeNewsBundle:News:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 45,  73 => 24,  60 => 14,  56 => 13,  51 => 11,  47 => 9,  43 => 8,  40 => 7,  37 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "challengeNewsBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     News*/
/* {% endblock %}*/
/* {% block news %}*/
/*     <div id="titrep" class="col-lg-7 col-lg-offset-2">*/
/*     {% for new in news %}*/
/*     <div class="gpost">*/
/*         <div class="post-head">*/
/*             <h3><a href="single-blog.html">{{ new.title }}</a></h3>*/
/*             <div class="post-meta">*/
/*                 <div><i class="fa fa-user"></i>AUTEUR : <a href="#">{{ new.author }}</a></div>*/
/*                 <div><i class="fa fa-clock-o"></i>{{ new.date | localizeddate('full', 'none') }}</div>*/
/*                 <div><i class="fa fa-comments"></i><a href="#">22 Commentaires</a></div>*/
/*                 <div><i class="fa fa-folder-open"></i>Category : <a href="#">Hack</a>, <a href="#">lobby</a></div>*/
/*                 <div><i class="fa fa-heart"></i><a href="#">77</a></div>*/
/*             </div><!-- End post-meta -->*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*         <div class="post-wrap">*/
/* */
/*             <div class="post-inner">*/
/*                 <p>{{ new.content }}</p>*/
/*                 <div class="clearfix"></div>*/
/*                 <div class="post-share-view">*/
/*                     <div class="post-meta">*/
/* */
/*                         <div class="post-meta-share">*/
/*                             <div><i class="fa fa-eye"></i><span>145 </span>Vues</div>*/
/*                             <div>  <i class="fa fa-share-alt"></i>*/
/*                                 <a href="#">Partager</a> </div>*/
/* */
/* */
/* */
/*                         </div>*/
/* */
/*                     </div><!-- End post-share-view -->*/
/*                     <div class="clearfix"></div>*/
/*                 </div><!-- End post-inner -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endfor %}*/
/* */
/*         </div>*/
/* {% endblock %}*/

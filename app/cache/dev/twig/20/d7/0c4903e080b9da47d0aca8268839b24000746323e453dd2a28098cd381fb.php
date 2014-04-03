<?php

/* PixelBlogBundle:Blog:index.html.twig */
class __TwigTemplate_20d70c4903e080b9da47d0aca8268839b24000746323e453dd2a28098cd381fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PixelBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PixelBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Acceuil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "  ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <h2>Liste des articles</h2>
    <hr/>
    
     ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeArticles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "        <article>
              <div class=\"well\">
                  <h4><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"), "titre" => twig_urlencode_filter($this->getAttribute($this->getContext($context, "article"), "titre")))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></h4>
                  <p>  ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "content"), "html", null, true);
            echo " </p>
              </div>
              
              <div class=\"alert alert-info\">
                <div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
            </div>
              
        </article>
    
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
    
    ";
        // line 29
        if (($this->getContext($context, "nbrPage") > 1)) {
            // line 30
            echo "        <ul class=\"pagination\">
            <li><a href=\"#\">&laquo;</a></li>
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nbrPage")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo " ";
                // line 33
                echo "                <li";
                if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                    echo " class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_accueil", array("page" => $this->getContext($context, "p"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            <li><a href=\"#\">&raquo;</a></li>
        </ul>
  ";
        }
        // line 40
        echo "    
";
    }

    public function getTemplateName()
    {
        return "PixelBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  109 => 37,  98 => 34,  91 => 33,  86 => 32,  82 => 30,  80 => 29,  76 => 27,  59 => 16,  53 => 15,  49 => 13,  45 => 12,  40 => 9,  37 => 8,  29 => 6,);
    }
}

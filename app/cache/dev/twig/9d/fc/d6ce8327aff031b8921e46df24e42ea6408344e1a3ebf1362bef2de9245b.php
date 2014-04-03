<?php

/* PixelBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_9dfcd6ce8327aff031b8921e46df24e42ea6408344e1a3ebf1362bef2de9245b extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "  ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <article>
        <h3> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo " </h3>
        <div class=\"well\">
          ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "content"), "html", null, true);
        echo "
        </div>
        
        <p>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\" class=\"btn btn-info\">
                <span class=\"glyphicon glyphicon-chevron-left\" >  </span>
                Retour à l'accueil
            </a>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modifier", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                <span class=\"glyphicon glyphicon-edit\" >  </span>
                Modifier l'article
            </a>
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <span class=\"glyphicon glyphicon-trash\" >  </span>
                Supprimer l'article
            </a>
        </p>
        
    </article>
";
    }

    public function getTemplateName()
    {
        return "PixelBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  64 => 17,  57 => 13,  50 => 9,  45 => 7,  42 => 6,  39 => 5,  29 => 3,);
    }
}

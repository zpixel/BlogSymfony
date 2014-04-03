<?php

/* PixelBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_670c38f7c5c686625ae0dddf1f887e688ea1a61c611e55a07ab5e8f359b68839 extends Twig_Template
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
        echo " Ajout d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "  ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "

    <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " role=\"form\">
        <fieldset>
            <legend> Ajouter un article </legend>
        
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'label', array("label" => "Titre de l'article"));
        echo "

            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'errors');
        echo "

            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "urlAlias"), 'label', array("label" => "URL"));
        echo "

            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "urlAlias"), 'errors');
        echo "

            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "urlAlias"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'label', array("label" => "Contenu de l'article"));
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'errors');
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <input type=\"submit\" class=\"btn btn-primary\" />
        </fieldset>
    </form>
    
";
    }

    public function getTemplateName()
    {
        return "PixelBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  99 => 33,  95 => 32,  91 => 31,  84 => 27,  79 => 25,  74 => 23,  67 => 19,  62 => 17,  57 => 15,  51 => 12,  44 => 8,  40 => 6,  37 => 5,  29 => 3,);
    }
}

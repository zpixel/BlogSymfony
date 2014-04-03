<?php

/* PixelBlogBundle:Blog:lastPosts.html.twig */
class __TwigTemplate_71962a89244f25e019788392ae7fc35bada2cdf5a2f725ead8358f525da42c79 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Les derniers articles</h3>
    </div>
    <div class=\"panel-body\">
        <ul class=\"nav nav-pills nav-stacked\">
            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 8
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_voir", array("id" => $this->getAttribute($this->getContext($context, "art"), "id"), "titre" => $this->getAttribute($this->getContext($context, "art"), "titre"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "art"), "titre"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PixelBlogBundle:Blog:lastPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}

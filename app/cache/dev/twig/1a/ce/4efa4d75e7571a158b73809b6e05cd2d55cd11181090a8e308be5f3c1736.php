<?php

/* PixelBlogBundle::layout.html.twig */
class __TwigTemplate_1ace4efa4d75e7571a158b73809b6e05cd2d55cd11181090a8e308be5f3c1736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
    </head>
  <body>
       
       <!-- ########## facebook like :p ################ -->
        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/fr_FR/all.js#xfbml=1\";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
       <!-- ########## FIN facebook like :p ################ -->     
       
      <div id=\"animate-area\"></div>
      <a id=\"logo\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\"></a>
      
       <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\">Blog E-app</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("blog_ajouter");
        echo "\">Ajouter un article</a></li>
                    <li><a href=\"#about\">About</a></li>
                </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
      
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-sm-8\">
                  ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "              </div>
                  
              <div class=\"col-sm-4\" id=\"menu\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Le BloG</h3>
                        </div>
                        <div class=\"panel-body\">
                             <ul class=\"nav nav-pills nav-stacked\">
                                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("blog_accueil");
        echo "\">Accueil du blog</a></li>
                                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("blog_ajouter");
        echo "\">Ajouter un article</a></li>
                            </ul>
                        </div>
                    </div>
                   
                    ";
        // line 72
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PixelBlogBundle:Blog:lastPosts", array("nombre" => 5)));
        echo "
              </div>
              
              
          </div>
          
        <hr>

        <footer>
            <p>E-app project &copy; 2014 </p>
        </footer>
      </div>
      
    ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "      
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Blog";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "                  ";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "PixelBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 87,  175 => 86,  172 => 85,  168 => 56,  165 => 55,  159 => 11,  155 => 10,  150 => 9,  147 => 8,  141 => 6,  135 => 89,  133 => 85,  117 => 72,  109 => 67,  105 => 66,  94 => 57,  92 => 55,  79 => 45,  75 => 44,  68 => 40,  54 => 29,  36 => 13,  34 => 8,  29 => 6,  23 => 2,);
    }
}

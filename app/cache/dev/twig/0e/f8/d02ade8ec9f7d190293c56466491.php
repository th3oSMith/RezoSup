<?php

/* ::base.html.twig */
class __TwigTemplate_0ef8d02ade8ec9f7d190293c56466491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Le styles -->
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  </head>

  <body>

    <!-- NAVBAR
    ================================================== -->
\t<div class=\"navbar-container\">
        <div class=\"navbar navbar-inverse \">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\"  href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\">RezoSup</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li><a href=\"#\">Actualité</a></li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Trombinoscope<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Utilisateurs</a></li>
                  <li><a href=\"#\">Opérateurs</a></li>
                </ul>
              </li>             
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Serveur<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Liste</a></li>
                  <li><a href=\"#\">Carte</a></li>
                </ul>
              </li>             
              <li><a href=\"#\">Statistiques</a></li>
              <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charte"), "html", null, true);
        echo "\">Charte</a></li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Guide<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Se connecter</a></li>
                  <li><a href=\"#\">Les serveurs</a></li>
                  <li><a href=\"#\">Commandes IRC</a></li>
                  <li><a href=\"#\">Comandes des services</a></li>
                  <li><a href=\"#\">FAQ</a></li>
                  <li><a href=\"#\">Proxys ouverts</a></li>
                  <li><a href=\"#\">Les virus</a></li>
                  <li><a href=\"#\">Limites de session</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Client web IRC</a></li>
              <li><a href=\"mailto:rezosup@rezosup.net\">Contact</a></li>
              <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thanks"), "html", null, true);
        echo "\">Remerciements</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
 </div>   
    
    
    
<!-- /container -->

\t<div id=\"content\">
\t<div id=\"container\">
\t\t</div>
\t<div class=\"txt\">\t
\t";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "\t</div>
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js\"></script>
\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "RezoSup";
    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        echo "<p>
\tBLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

\tIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
\t 

\tContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.

\tThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

\tThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 91,  153 => 5,  145 => 111,  136 => 104,  134 => 91,  115 => 75,  96 => 59,  74 => 40,  43 => 12,  39 => 11,  34 => 9,  27 => 5,  21 => 1,);
    }
}

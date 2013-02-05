<?php

/* RezoRezoSupBundle:Default:index.html.twig */
class __TwigTemplate_afa97588a8a27fc96fdae2d994bd4d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Home";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h3>Bienvenue sur le site web des opérateurs IRC du réseau RezoSup</h3><br/>
<p>RezoSup est le diminutif de Réseau de serveurs IRC d'établissements de l'enseignement supérieur. Il a été conçu et est géré
par des étudiants bénévoles pour promouvoir la communication grâce à IRC.</p>
<p>Sur ce site, vous pouvez consulter la liste des opérateurs IRC par serveur dans la rubrique <a href=trombi.php><b>IRC operators</b></a> et la liste des <a href=liste.php><b>serveurs</b></a> du regroupement.</p>
<p>Vous pouvez également voir plusieures statistiques des canaux de RezoSup dans la rubrique <a href=stats.php><b>Statistiques</b></a>.</p>
<p>Enfin, vous pouvez découvrir en exclusivité un tout nouveau et tout beau client irc : <A href=\"http://kini.rezosup.net\"><b>KINI</b></A>.</p>
<p>N'hésitez pas à faire un tour sur le site officiel de <a href=\"http://www.rezosup.org\"><b>Rezosup</b></a> pour plus d'informations sur le regroupement en lui-même.</p>
";
    }

    public function getTemplateName()
    {
        return "RezoRezoSupBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  36 => 7,  29 => 3,);
    }
}

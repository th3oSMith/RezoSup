<?php

/* RezoRezoSupBundle:Default:thanks.html.twig */
class __TwigTemplate_626162a29234c73586459e325caa303c extends Twig_Template
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
        echo " - Remerciements";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h3>Rezosup tient ici à remercier :</h3><br/>

<B>Ceux qui ont participé au développement de RezoSup:</B>
<ul>
<li>DrYorgos
<li>Flashy
<li>Flav
<li>Nico pour tout mais surtout pour les longues heures passées sur la charte<br><br>

<li>DJ51 notamment pour la charte graphique de rz.net
<li>Kiki aka ZeKiller (qui mérite bien son surnom) pour les patchs et plein d'autres goodies
<li>ShadWolf pour Kini
<li>RLDF pour les stats mrtg des serveurs
<li>Silk pour le trombi des users
<li>Shawn, le phare de RezoSup ;)
</ul>
<B>Les auteurs des différents programmes utilisés par RezoSup:</B>
<ul>
<li><A href=\"http://www.debian.org\" target=\"_blank\">Debian</A><br>
<li><A href=\"http://www.freebsd.org\" target=\"_blank\">FreeBSD</A><br>
<li><A href=\"http://bahamut.dal.net\" target=\"_blank\">Bahamut IRCD</A><br>
<li><A href=\"http://www.epona.org\" target=\"_blank\">Epona</A> et Lara<br>
<li><A href=\"http://www.anope.org\" target=\"_blank\">Anope</A><br>
<li><A href=\"http://www.phpbb.org\" target=\"_blank\">phpBB</A><br>
<li><A href=\"http://cgiirc.sourceforge.net\" target=\"_blank\">CGIIRC</A><br>
<li><A href=\"http://www.eggheads.org/\" target=\"_blank\">Eggdrop</A><br>
<li><A HREF=\"http://pisg.sourceforge.net/\" target=\"_blank\">Perl IRC Statistics Generator</A><br>
<li><A HREF=\"http://www.egghelp.org/cgi-bin/tclarchive.tcl?strings=channellog&searchin=title&searchin=author&searchin=description&results=1\" Target=\"_blank\">mIRCStats Eggdrop Logger</A><br>
<li><A HREF=\"http://ircd.botbay.net/stats/\" Target=\"_blank\">Sentinel</A><br>
<li><A HREF=\"http://www.lucas-nussbaum.net/thales.php\" Target=\"_blank\">Thales</A><br>
</ul>

<B>Les sites partenaires:</B>
<ul>
<li><A href=http://netsplit.de>Netsplit</A>, le site de classement des réseaux IRC<br>
<li><A href=http://www.centrales.info>Centrales.info</A>, le site des anciens de Centrale<br>
</ul>

<B>Et bien sûr tous les users de RezoSup qui font que sans eux ce regroupement n'existerait pas. Merci à vous !</B><br>

";
    }

    public function getTemplateName()
    {
        return "RezoRezoSupBundle:Default:thanks.html.twig";
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

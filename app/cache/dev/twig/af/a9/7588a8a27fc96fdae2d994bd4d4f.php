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
<h4>C'est quoi, l'IRC&nbsp;?</h4>
<P>IRC signifie &laquo;&nbsp;Internet Relay Chat&nbsp;&raquo;. En fait, c'est un syst&egrave;me pour dialoguer sur Internet, en mode texte, un peu comme une messagerie sur Minitel. Ce moyen de communication fit son apparition en 1988, alors m&ecirc;me que les liaisons transatlantiques n'existaient pas encore. A cette &eacute;poque, le besoin d'un canal de communication multi-utilisateur se faisait cruellement sentir.</P>
<P>Des r&eacute;seaux ont alors &eacute;t&eacute; mont&eacute;s. A pr&eacute;sent, pour ne citer que les plus nombreux et plus importants, il existe <A HREF=\"http://www.efnet.org/\">EFNet</A>, <A HREF=\"http://www.dal.net/\">DALNet</A>, <A HREF=\"http://www.undernet.org/\">UnderNet</A>.</P>
<h4>Pourquoi un nouveau r&eacute;seau&nbsp;?</h4>
<P>RezoSup ne suit pas la même logique que les autres regroupements comme EFNET, IRCNET, etc. Il a été créé par des étudiants d'écoles de commerce et d'ingénieurs pour leur donner un moyen simple et instantané de communiquer entre eux. Il ne vise donc pas à avoir un nombre énorme de clients mais plutôt une cible restreinte de qualité.</P>

<P>Par IRC, il est donc possible aux utilisateurs de dialoguer entre &eacute;coles, ou &agrave; l'int&eacute;rieur d'une m&ecirc;me &eacute;cole, pour des motifs aussi vari&eacute;s que la gestion de projets ou la commande de pizzas&nbsp;!</P>

<h4>Des services et des bots</h4>
<P>La majorit&eacute; des regroupements pr&eacute;f&egrave;rent laisser une totale libert&eacute; &agrave; leurs utilisateurs. Ainsi, sur certains r&eacute;seaux IRC, tels que EFNet ou IRCNet, les channels ainsi
que les nicks n'appartiennent &agrave; personne. En contrepartie, les utilisateurs doivent d&eacute;velopper un certain nombre de connaissances, notamment techniques, s'ils souhaitent conserver les chans qu'ils ont cr&eacute;&eacute;s.
RezoSup part d'un autre principe&nbsp;: l'utilisateur reste enti&egrave;rement libre de faire ce qu'il veut &agrave; condition de ne pas d&eacute;ranger le
bon fonctionnement des serveurs, mais RezoSup met &agrave; sa disposition quelques outils qui sont appel&eacute;s <A HREF=\"services.phtml\">des <I>services</I></A>. Ces outils sont l&agrave; pour l'aider &agrave; conserver son nick ou son channel ou encore &agrave; envoyer des messages &agrave; d'autres utilisateurs qui ne seraient pas connect&eacute;s.
</p>
<p>Les bots, dans cette logique, ne sont pas ce qui &laquo;&nbsp;garantit la propri&eacute;t&eacute;&nbsp;&raquo; d'un chan et aucun op&eacute;rateur irc ne sera dispos&eacute; &agrave; vous aider si vous n'avez pas enregistr&eacute; votre channel. La pr&eacute;sence des bots est tol&eacute;r&eacute;e uniquement 
pour apporter des fonctionnalit&eacute;s suppl&eacute;mentaires aux utilisateurs. Bien s&ucirc;r, toute utilisation de <I>spambot</I> ou de <I>warbot</I> est &agrave; proscrire, les op&eacute;rateurs chasseront impitoyablement ces bots du serveur et prendront les mesures n&eacute;cessaires pour ne plus les revoir.
</P>

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

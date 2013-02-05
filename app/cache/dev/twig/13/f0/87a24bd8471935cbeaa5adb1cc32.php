<?php

/* RezoRezoSupBundle:Default:charte.html.twig */
class __TwigTemplate_13f087a24bd8471935cbeaa5adb1cc32 extends Twig_Template
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
        echo " - Charte";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "


<h1 align=\"center\">Charte IRC RezoSup <br>
\tv1.2.6<br>
\t<tt><a href=\"http://www.rezosup.org/\">http://www.rezosup.org/</a></tt>
</h1>

<h1>Pr&#233;ambule</h1>

<blockquote>
\t<p>Le but de cette charte est d'&#233;tablir des r&#232;gles pour le bon fonctionnement 
\t\tdu r&#233;seau IRC RezoSup.
\t</p>
\t<p> Afin de fournir un service gratuit, le regroupement RezoSup est enti&#232;rement 
\t\tg&#233;r&#233; par des b&#233;n&#233;voles et utilise les ressources mises 
\t\tgracieusement &#224; sa disposition par les institutions concern&#233;es. 
\t</p>
\t<p> Cette charte est s&#233;par&#233;e en deux parties :</p>
\t<ul>
\t\t<li>une <a href=\"#utilisateur\">charte utilisateur</a> ;</li>
\t\t<li>une <a href=\"#operateur\">charte IRC Op&#233;rateur</a>.</li>
\t</ul>
\t<h4>Termes employ&#233;s et d&#233;finitions</h4>
\t<ul>
\t\t<li><i>IRC Op&#233;rateur, Op&#233;rateur, IRCop</i> : personne administrant un serveur 
\t\t\tIRC au quotidien.
\t\t</li>
\t\t<li><i>K-line, autokill</i> : moyen de bannir un utilisateur du(des) serveur(s) et de 
\t\t\tl'emp&#234;cher de s'y connecter.
\t\t</li>
\t\t<li><i>Logs</i> : Fichier-journal contenant des informations dat&eacute;es 
\t\t\t(connexions aux serveurs, int&eacute;gralit&eacute; d'une conversation, ...).
\t\t</li>
\t\t<li><i>MOTD</i> : Message Of The Day, message affich&eacute; lors de la connexion d'un 
\t\t\tutilisateur &agrave; un serveur IRC.
\t\t</li>
\t\t<li><i>Bot</i> : programme informatique automatis&eacute; connect&eacute; &agrave; 
\t\t\tl'IRC.
\t\t</li>
\t\t<li><i>Link</i> : connexion entre deux serveurs.</li>
    \t<li><i>Hub</i> : serveur faisant office de noeud de r&eacute;seau et auquel se 
      \t\tconnectent les autres serveurs.
\t\t</li>
\t\t<li><i>Leaf</i> : serveur reli&eacute; &agrave; un hub et auquel se connectent
\t\t\tles utilisateurs.
\t\t</li>
\t</ul>
</blockquote>

<h1>Avertissement</h1>

<blockquote>

\t<p>Toute personne utilisant RezoSup est responsable du contenu des donn&eacute;es 
 \t\tqu'elle y fait circuler. Les administrateurs de RezoSup ne pourraient 
\t\ten aucun cas &ecirc;tre tenus responsables de ce contenu.
\t</p>
\t<p>Toute action utilisant RezoSup doit &#234;tre conforme &agrave; la pr&eacute;sente charte
\t\tainsi qu'&agrave; la l&eacute;gislation en vigueur.
\t</p>
\t<p> En cas de fraude, les IRC Op&#233;rateurs pourront avertir le contrevenant, 
\t\tpuis, selon la gravit&#233; de l'acte ou en cas de r&#233;cidive(s), appliquer 
\t\tun renvoi temporaire sur un canal (kick), une interdiction de connexion sur 
\t\tun canal (ban), une d&#233;connexion temporaire sur un serveur (kill) ou une 
\t\tinterdiction de connexion sur l'ensemble des serveurs RezoSup (autokill). Les 
\t\tautorit&#233;s comp&#233;tentes seront syst&#233;matiquement inform&#233;es. 
\t</p>
\t<p> Loi du 19 septembre 2000 (Article 323-1 du NCP) : Le fait d'acc&eacute;der 
\t\tou de se maintenir, frauduleusement, dans tout ou partie d'un syst&egrave;me 
\t\tde traitement automatis&eacute; de donn&eacute;es est puni d'un an d'emprisonnement 
\t\tet de 15000 euros d'amende.<br>
\t\tLorsqu'il en est r&eacute;sult&eacute; soit la suppression ou la modification 
\t\tde donn&eacute;es contenues dans le syst&egrave;me, soit une alt&eacute;ration 
\t\tdu fonctionnement de ce syst&egrave;me, la peine est de deux ans d'emprisonnement 
\t\tet de 30000 euros d'amende.
\t</p>
</blockquote>

<h1><a name=\"utilisateur\"></a>Charte utilisateur</h1>

<blockquote> 

\t<h2>G&#233;n&#233;ralit&#233;s</h2>

\t<blockquote> 
\t\t<h4>Article 1 : Respect des chartes</h4>
\t\t<p>Toute personne se connectant &#224; RezoSup s'engage &#224; respecter les 
\t\t\tdiff&#233;rentes chartes d'utilisation qui lui permettent d'utiliser les 
\t\t\tressources mises &#224; disposition par RezoSup, et en particulier la charte 
\t\t\td'utilisation Renater (disponible &#224; l'adresse 
\t\t\t<tt><a href=\"http://www.renater.fr/Telechargement/charte_v12.pdf\">http://www.renater.fr/Telechargement/charte_v12.pdf</a></tt>).
\t\t</p>

\t\t<h4>Article 2 : Connexion</h4>
\t\t<p>Les IRC Op&eacute;rateurs se r&eacute;servent le droit d'interdire toute 
\t\t\tconnexion &agrave; l'ensemble du r&eacute;seau RezoSup.
\t\t</p>

\t\t<h4>Article 3 : Nombre de connexions simultan&#233;es</h4>
\t\t<p>Sauf accord pr&#233;alable des IRC Op&#233;rateurs, il est interdit de 
\t\t\tfaire tourner plus de deux connexions par adresse IP. Toute tentative de 
\t\t\tcontournement de ces restrictions sera sanctionn&#233;e comme indiqu&#233; 
\t\t\tdans l'avertissement.
\t\t</p>
\t\t
\t\t
\t\t
    <h4>Article 4 : Proxies</h4>
\t\t<p>Toute machine se connectant &agrave; RezoSup est contr&ocirc;l&eacute;e 
\t\t\tde mani&egrave;re &agrave; d&eacute;terminer la pr&eacute;sence ou non de 
\t\t\trelais ouverts (proxies non s&eacute;curis&eacute;s). Ce contr&ocirc;le 
\t\t\tpermet d'assurer que la machine ne constitue pas une passerelle potentielle 
\t\t\tpour des individus mal intentionn&eacute;s. La d&eacute;tection est 
\t\t\teffectu&eacute;e par la machine <i>sarah.rezosup.net</i>.
\t\t</p>

\t\t<h4>Article 5 : MOTD</h4>
\t\t
    <p>Toute personne se connectant sur un serveur de RezoSup doit prendre connaissance 
      du MOTD de ce serveur (commande &agrave; utiliser : <tt>/motd</tt>).</p>

\t\t<h4>Article 6 : Canal d'aide</h4>
\t\t<p>Le canal <tt>#help</tt> est ouvert &#224; tous les utilisateurs pour r&#233;pondre 
\t\t\taux questions relatives &#224; l'IRC. Les IRC Op&#233;rateurs pr&#233;sents 
\t\t\tessaieront de r&#233;pondre aux utilisateurs, dans la mesure de leurs moyens.
\t\t</p>
\t\t
\t\t<h4>Article 7 : Canaux \"g&#233;n&#233;riques\"</h4>
\t\t<p>Plusieurs canaux sont mis &#224; la disposition des utilisateurs afin de 
\t\t\tsusciter des liens d'amiti&#233;. RezoSup se r&#233;serve le choix et la 
\t\t\tgestion de ces canaux.
\t\t</p>

\t</blockquote>

\t<h2>Principes d'utilisation</h2>
\t
\t<blockquote> 
\t\t
\t\t<h4>Article 8 : Usage des Services</h4>
\t\t<p>Les Services <i>ChanServ</i>, <i>NickServ</i>, <i>BotServ</i> et <i>MemoServ</i> 
\t\t\tsont mis &#224; la disposition des utilisateurs afin de leur apporter un 
\t\t\tconfort d'utilisation. Toute tentative de d&#233;tournement des Services 
\t\t\t&#224; des fins pour lesquelles ils n'ont pas &#233;t&#233; pr&#233;vus 
\t\t\tsera punie comme indiqu&#233; dans l'avertissement.
\t\t</p>

\t\t<h4>Article 9 : Usage des bots</h4>
\t\t<p>Les bots sont tol&#233;r&#233;s &#224; condition de ne pas nuire aux serveurs 
\t\t\tou aux utilisateurs. Tout abus sera puni comme indiqu&#233; dans l'avertissement.
\t\t</p>

\t\t<h4>Article 10 : Conflits entre utilisateurs</h4>
\t\t<p>D'une mani&#232;re g&#233;n&#233;rale, les IRC Op&#233;rateurs sont responsables 
\t\t\tdu bon fonctionnement du r&#233;seau IRC, mais en aucun cas des diff&#233;rents 
\t\t\tcanaux (&#224; l'exception de <tt>#opers</tt>, <tt>#help</tt> et des canaux
\t\t\tg&eacute;n&eacute;riques), ni des conflits entre utilisateurs. Les utilisateurs
\t\t\tsont soumis &#224; l'impartialit&#233; des Services <i>ChanServ</i> et <i>NickServ</i>.
\t\t</p>

\t\t<h4>Article 11 : Messages en masse et publicité</h4>
\t\t<p>L'envoi en masse de messages, ainsi que la publicit&#233; non sollicit&#233;e (spam), 
\t\t\tsont interdits. Tout contrevenant sera puni comme indiqu&#233; dans l'avertissement.
\t\t</p>
\t\t\t\t
\t\t<h4>Article 12 : Commerce</h4>
\t\t<p>Toute activit&#233; commerciale est strictement interdite sur RezoSup. 
\t\t\tTout contrevenant sera puni comme indiqu&#233; dans l'avertissement.
\t\t</p>
\t\t
\t\t<h4>Article 13 : Religion et politique</h4>
\t\t<p>Tout pros&#233;lytisme religieux ou politique est strictement interdit 
\t\t\tsur RezoSup. Tout contrevenant sera puni comme indiqu&#233; dans l'avertissement.
\t\t</p>

\t</blockquote>

\t<h2>Actes malveillants</h2>
\t
\t<blockquote>
\t\t<h4>Article 14 : Usurpation d'identit&#233;</h4>
\t\t<p>Toute personne tentant d'usurper l'identit&#233; d'un autre utilisateur 
\t\t\tfr&#233;quentant le r&#233;seau sera punie comme indiqu&#233; dans l'avertissement.
\t\t</p>

\t\t<h4>Article 15 : Harc&#232;lement</h4>\t
\t    <p>Il est interdit de harceler les utilisateurs par des messages r&eacute;p&eacute;t&eacute;s. 
\t      En cas de nuisances prolong&#233;es, les op&#233;rateurs pourront d&#233;cider 
\t      (&#233;ventuellement au vu de logs) de prendre des mesures contre les fauteurs 
\t      de troubles, comme indiqu&#233; dans l'avertissement.
\t\t </p>

\t    <h4>Article 16 : Inondation de messages (flood)</h4>
\t    <p>L'envoi excessif de messages r&eacute;p&eacute;t&eacute;s &agrave; destination d'un 
\t      serveur ou d'un utilisateur est interdit. L'acte est puni comme indiqu&#233; 
\t      dans l'avertissement.
\t\t </p>

\t\t<h4>Article 17 : D&#233;ni de service (DoS)</h4>
\t\t<p>Il est interdit de chercher &#224; exploiter les faiblesses et les bogues 
\t\t\tdes clients et serveurs IRC, ou d'entreprendre toute action pour laquelle 
\t\t\tils n'ont pas &#233;t&#233; pr&#233;vus. Les attaques de type d&#233;ni 
\t\t\tde service sont rigoureusement interdites, les coupables seront imm&#233;diatement 
\t\t\tinterdits de connexion sur le serveur (K-line), et leur fournisseur d'acc&#232;s 
\t\t\tsera averti.
\t\t</p>
\t
\t</blockquote>

</blockquote>

<h1><a name=\"operateur\"></a>Charte IRC Op&#233;rateur</h1>

<blockquote>

\t<h2>G&#233;n&#233;ralit&#233;s</h2>

\t<blockquote> 

\t\t<h4>Article 1 : Connexion &#224; RezoSup</h4>
\t\t<p>Ne peuvent &#234;tre connect&#233;s &#224; RezoSup que des serveurs IRC 
\t\t\td'esprit acad&#233;mique (&#233;cole ou universit&#233;).
\t\t</p>
\t\t<p> Les responsables des Services Informatiques de l'&#233;cole ou de l'universit&#233; 
\t\t\tdoivent avoir donn&#233; leur accord &#224; l'existence de tels serveurs. 
\t\t\tCet accord est formalis&#233; par la signature de la pr&#233;sente charte 
\t\t\tet du formulaire de connexion rempli (disponible sur le site de RezoSup :
\t\t\t<tt><a href=\"http://www.rezosup.org/\">http://www.rezosup.org/</a></tt>). Cet accord 
\t\t\tdoit &#234;tre reconduit au 1<SUP>er</SUP>octobre pour une dur&#233;e d'un 
\t\t\tan.
\t\t</p>
\t\t<p>La connexion de ces serveurs doit &#234;tre stable et permanente.</p>

\t\t<h4>Article 2 : Modification de la charte</h4>
\t\t<p>Les modifications &eacute;ventuelles de la pr&eacute;sente charte sont 
\t\t\tvot&eacute;es par l'assembl&eacute;e consultative (c.f. article 9) &agrave; 
\t\t\tmajorit&eacute; des 4/5 des votants, puis sont soumises &agrave; l'assembl&eacute;e 
\t\t\tex&eacute;cutive.
\t\t</p>
\t\t<p>Il peut &#234;tre envisag&#233; des modifications mineures si la pr&#233;sente 
\t\t\tcharte entre en conflit avec la charte d'utilisation des &#233;quipements 
\t\t\tinformatiques de l'&#233;cole ou de l'universit&#233; d&#233;sirant se connecter 
\t\t\t&#224; RezoSup.
\t\t</p>

\t\t<h4>Article 3 : Responsabilit&#233; sur le serveur IRC</h4>
\t\t<p>La responsabilit&#233; d'un serveur IRC raccord&#233; &#224; RezoSup rel&#232;ve 
\t\t\tenti&#232;rement et en permanence des Op&#233;rateurs du serveur. Ceux-ci 
\t\t\ts'engagent &#224; faire respecter la charte, &#224; notifier toute modification 
\t\t\tintroduite au niveau de leur serveur pouvant affecter l'ensemble du r&#233;seau 
\t\t\tRezoSup et doivent disposer de toutes les autorisations n&#233;cessaires 
\t\t\tpour mettre en oeuvre leur serveur.
\t\t</p>
\t\t<p> En cas d'absence, les Op&#233;rateurs d'autres serveurs peuvent prendre 
\t\t\tdes mesures si le besoin s'en fait sentir.
\t\t</p>

\t\t<h4>Article 4 : Liste de diffusion</h4>
\t\t<p>Il existe une liste de diffusion RezoSup
\t\t\t(<tt><a href=\"mailto:rezosup@rezosup.net\">rezosup@rezosup.net</A></tt>) &#224;
\t\t\tlaquelle l'adh&#233;sion de tous les Op&#233;rateurs est obligatoire.
\t\t</p>
\t\t<p> Une personne souhaitant participer au d&#233;veloppement de RezoSup peut 
\t\t\t&#234;tre inscrite &#224; la liste de diffusion apr&#232;s approbation &#224; 
\t\t\tl'unanimit&#233; de l'assembl&#233;e ex&#233;cutive (c.f. articles 9 et 
\t\t\t10).
\t\t</p>
\t\t
\t</blockquote>

\t<h2>Ligne de conduite</h2>

\t<blockquote> 
\t\t
\t\t<h4>Article 5 : Cordialit&#233;</h4>
\t\t<p>Les discussions entre Op&#233;rateurs se doivent d'&#234;tre cordiales.</p>
\t\t
\t\t<h4>Article 6 : Pr&#233;sence</h4>
\t\t<p>Les IRC Op&#233;rateurs ont pour obligation d'&#234;tre pr&#233;sents sur 
\t\t\tle canal <tt>#opers</tt> et sur le canal <tt>#help</tt>.
\t\t</p>
\t\t<p> Le canal <tt>#opers</tt> sert, entre autres, &#224; d&#233;battre quotidiennement 
\t\t\td'&#233;ventuels probl&#232;mes ou de dispositions &#224; prendre. Il est 
\t\t\ten mode Op&#233;rateurs seulement (+O) et r&#233;serv&#233; aux Op&#233;rateurs, 
\t\t\tm&#234;me s'il est possible d'y inviter certains utilisateurs pour une dur&#233;e 
\t\t\td&#233;termin&#233;e.
\t\t</p>
\t\t<p>Le canal <tt>#help</tt> est ouvert &#224; tous, et a pour but d'apporter 
\t\t\tl'aide n&#233;cessaire aux utilisateurs en difficult&#233;.
\t\t</p>
\t\t
\t\t<h4>Article 7 : Le K-line</h4>
\t\t<p>Le K-line est un droit accord&#233; &#224; tous les Op&#233;rateurs sur 
\t\t\tleur serveur respectif et il est laiss&#233; &#224; leur discr&#233;tion. 
\t\t</p>
\t\t<p>La d&#233;cision d'un K-line global (akill) sur tous les serveurs de RezoSup 
\t\t\test un droit accord&eacute; aux Op&eacute;rateurs de Services. En cas de 
\t\t\td&eacute;saccord entre les Op&eacute;rateurs au sujet de cet akill, l'assembl&eacute;e 
\t\t\tconsultative d&eacute;cide (&agrave; la majorit&eacute; simple de ses membres) de 
\t\t\tle laisser en place ou de le supprimer.
\t\t</p>

\t\t<h4>Article 8 : Intervention des Op&#233;rateurs</h4>
\t\t<p>Les Op&#233;rateurs sont fortement incit&#233;s &#224; ne pas s'impliquer 
\t\t\tdans des sujets qui ne concernent pas la gestion du serveur. Leur statut 
\t\t\tne leur donne aucun droit d'intervenir, notamment suite &#224; des sollicitations 
\t\t\td'amis ou autres.
\t\t</p>
\t\t<p> Tout abus constat&#233; donnera lieu &#224; une r&#233;vision de leur 
\t\t\tstatut.
\t\t</p>

\t</blockquote>

\t<h2>Organisation</h2>

\t<blockquote> 

\t\t<h4>Article 9 : Assembl&#233;es</h4>
\t\t<p>Deux assembl&#233;es sont pr&#233;vues ; une assembl&#233;e dite \"consultative\", 
\t\t\tet une assembl&#233;e dite \"ex&#233;cutive\" :
\t\t</p>
\t\t<ul>
\t\t\t<li>L'<i>assembl&#233;e consultative</i> est compos&#233;e des membres fondateurs 
\t\t\t\tde RezoSup. Son &#233;largissement, dont les modalit&#233;s sont laiss&#233;es
\t\t\t\t&#224; sa discr&#233;tion, est souhait&#233; et pr&#233;vu.
\t\t\t\tElle se r&#233;unit pour les d&#233;cisions concernant les
\t\t\t\tfondements de RezoSup :
\t\t\t<ul>
\t\t\t\t<li>Elle peut prendre, &agrave; l'unanimit&eacute; de ses membres, des 
\t\t\t\t\td&eacute;cisions qu'elle estime &ecirc;tre dans l'int&eacute;r&ecirc;t 
\t\t\t\t\tde RezoSup, et qui pr&eacute;valent sur toute autre disposition,
\t\t\t\t</li>
\t\t\t\t<li>Elle peut imposer son veto sur des d&#233;cisions qui seraient contraires 
\t\t\t\t\t&#224; l'esprit original de RezoSup,
\t\t\t\t</li>
\t\t\t\t<li>Elle g&#232;re les Services et nomme les Administrateurs de Services.</li>
\t\t\t</ul>
\t\t\t</li>
\t\t\t<br>
\t\t\t<li>L'<i>assembl&#233;e ex&#233;cutive</i> est form&#233;e 
\t\t\t\tdes repr&eacute;sentants des &#233;coles ou universit&#233;s poss&#233;dant 
\t\t\t\tun serveur reli&#233; &agrave; RezoSup et ayant pass&eacute; la phase 3 
\t\t\t\t(c.f. article 17). Elle se r&#233;unit pour les d&#233;cisions courantes
\t\t\t\trelatives au d&eacute;veloppement de RezoSup :
\t\t\t<ul>
\t\t\t\t<li>Accueil d'une nouvelle &#233;cole et d'un serveur IRC pendant une 
\t\t\t\t\tsession d'acceptation,
\t\t\t\t</li>
\t\t\t\t<li>Gestion courante,</li>
\t\t\t\t<li>Renvoi d'un Op&eacute;rateur malveillant, etc...</li>
\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t\t
    \t<p>Les d&#233;cisions de l'assembl&eacute;e ex&eacute;cutive sont prises 
\t\t      &#224; la majorit&#233; absolue, les votes se d&#233;roulant comme 
\t\t      d&#233;crit &#224; l'article 10.
\t\t</p>
\t\t<p> Chaque &#233;cole ou universit&#233; dispose d'au moins 2 IRC Op&eacute;rateurs 
\t\t\t(dont l'administrateur du serveur), et d'au plus 4 IRC Op&eacute;rateurs 
\t\t\tauxquels peut s'ajouter 1 IRC Op&eacute;rateur pour 100 utilisateurs sur 
\t\t\tle serveur.
\t\t</p>
\t\t<p> L'administrateur de chaque &#233;cole ou universit&#233; est propos&#233; 
\t\t\tpar l'&#233;cole rejoigant le r&eacute;seau lors de la session d'acceptation
\t\t\tet accept&#233; &#224; la majorit&#233; qualifi&#233;e (2/3) par les membres
\t\t\tde l'assembl&#233;e ex&#233;cutive pr&#233;sents lors de la session.
\t\t</p>

\t\t<h4>Article 10 : Le vote</h4>
\t\t<p>Un vote est toujours propos&eacute; par un membre de l'assembl&eacute;e 
\t\t\tconsultative, et &eacute;ventuellement &agrave; la sollicitation d'un membre 
\t\t\tde l'assembl&eacute;e ex&eacute;cutive.
\t\t</p>
\t\t<p>Un vote se fait via la liste de diffusion et est ouvert pour une dur&eacute;e 
\t\t\tde 3 jours.
\t\t</p>
\t\t<p>Le droit de vote est donn&#233; lors de la 3&egrave;me phase de la connexion 
\t\t\tcomme indiqu&#233; dans l'article 17. Il est accord&#233; une voix et une 
\t\t\tseule par serveur leaf de RezoSup.
\t\t</p>
\t\t<p>Chaque voix doit &#234;tre communiqu&#233;e par l'administrateur du serveur, 
\t\t\tou en cas de vacance, par un Op&#233;rateur d&#233;sign&#233;.
\t\t</p>
\t\t<p>S'il est constat&#233; l'abstention des Op&#233;rateurs d'un serveur pendant 
\t\t\t3 votes cons&#233;cutifs sans justification valable, le statut de ce serveur 
\t\t\tsera discut&#233;.
\t\t</p>

\t\t<h4>Article 11 : Op&#233;rateurs d'honneur</h4>
\t\t<p>Si une personne impliqu&#233;e dans la gestion de RezoSup, en quittant 
\t\t\tl'&#233;cole ou l'universit&#233; o&#249; elle se trouve, exprime le souhait 
\t\t\tde continuer &#224; apporter sa contribution, l'assembl&#233;e consultative 
\t\t\tvote &#224; l'unanimit&#233; pour l'acc&#232;s de cette personne au statut 
\t\t\td'Op&#233;rateur d'honneur de RezoSup.
\t\t</p>
\t\t<p>Ce statut conf&#232;re la possibilit&#233; d'&#234;tre Op&#233;rateur 
\t\t\tde n'importe quel hub ou leaf de RezoSup, sous r&#233;serve d'acceptation 
\t\t\tde l'administrateur du hub ou leaf correspondant.
\t\t</p>
\t\t<p>Tous les ans, au cours du mois d'octobre, l'assembl&#233;e consultative 
\t\t\tdoit se r&#233;unir afin de valider &#224; l'unanimit&#233; le statut de 
\t\t\tchaque Op&#233;rateur d'honneur existant.
\t\t</p>
\t\t
\t</blockquote>
\t
\t<h2>Serveur et Services</h2>

\t<blockquote> 

\t\t<h4>Article 12 : Serveur IRC</h4>
\t\t<p>Le serveur IRC doit &#234;tre, pour tous, solid-ircd-3.4.8 ou sup&#233;rieur. 
\t\t\tSa version sera rediscut&#233;e r&#233;guli&#232;rement pour d'&#233;ventuelles 
\t\t\tmises &#224; jour.
\t\t</p>
\t\t<p>Le <i>MOTD</i> du serveur IRC comprend deux parties :</p>
\t\t<ol>
\t\t\t<li>une partie fixe impos&#233;e par RezoSup :
\t\t\t<ul>
\t\t\t\t<li>mention de l'appartenance &#224; RezoSup ;</li>
          \t\t<li>liste des &eacute;coles et universit&eacute;s reli&eacute;es &#224; 
\t\t\t\t\tRezoSup ;
\t\t\t\t</li>
\t\t\t\t<li>liste des serveurs publics de RezoSup ;</li>
\t\t\t\t<li>mention de la charte RezoSup ;</li>
\t\t\t\t<li>liste des sites Web officiels concernant RezoSup ;</li>
\t\t\t\t<li>liste des IRC Op&#233;rateurs du serveur ;</li>
\t\t\t\t<li>liste des canaux officiels de RezoSup ;</li>
\t\t\t\t<li>mention du charset pr&#233;conis&#233; ;</li>
\t\t\t</ul>
\t\t\t</li>
\t\t\t<br>
\t\t\t<li>une partie libre propre au serveur.</li>
\t\t</ol>

\t\t<h4>Article 13 : Services r&#233;serv&#233;s aux Op&#233;rateurs</h4>
\t\t<p>Les seuls Services Op&#233;rateurs autoris&#233;s sont <i>OperServ</i> 
\t\t\tet <i>CloneServ</i>. Seuls les Op&#233;rateurs globaux en ont le contr&#244;le. 
\t\t\tCes services incluent les possibilit&#233;s de changer les modes de tout 
\t\t\tcanal, d'interdire l'acc&#232;s d'un canal &#224; n'importe quel utilisateur, 
\t\t\tde contr&#244;ler le nombre de clones, et d'interdire toute connexion sur 
\t\t\tle r&#233;seau. Il ne doit &#234;tre fait usage de ces services que dans 
\t\t\tun but de maintenance et dans le respect de l'article 8.
\t\t</p>

\t\t<h4>Article 14 : Services accessibles &#224; tous les clients</h4>
\t\t<p>Les seuls Services clients autoris&#233;s sont <i>ChanServ</i>, <i>NickServ</i>, 
\t\t\t<i>MemoServ</i> et <i>BotServ</i>. Des Services additionnels peuvent 
\t\t\tn&eacute;anmoins &ecirc;tre mis en place, apr&egrave;s approbation
\t\t\tde l'assembl&eacute;e consultative.
\t\t</p>
\t
\t</blockquote>

\t<h2>Connexions</h2>

\t<blockquote> 

\t\t<h4>Article 15 : Connexion des leafs</h4>
\t\t<p>Un seul serveur IRC leaf par &#233;cole ou universit&#233; peut &#234;tre 
\t\t\tconnect&#233;.
\t\t</p>
\t\t<p>Il est souhaitable que le serveur IRC soit un serveur d&#233;di&#233; 
\t\t\t(discut&#233; au cas par cas).
\t\t</p>
\t\t<p>Il doit, pour des raisons de s&#233;curit&#233;, &#234;tre filtr&#233; 
\t\t\ten ICMP (de quelque mani&#232;re que ce soit) et respecter le param&#233;trage 
\t\t\td&#233;fini par RezoSup.
\t\t</p>
\t\t<p>Le syst&#232;me d'exploitation sous lequel est g&#233;r&#233; le serveur 
\t\t\tIRC, doit &#234;tre de type Unix. L'administrateur veillera &#224; fournir 
\t\t\tle d&#233;tail des mesures qu'il a prises pour assurer l'int&#233;grit&#233; 
\t\t\tde la s&#233;curit&#233; du serveur lui appartenant mais aussi des serveurs 
\t\t\tde RezoSup en g&#233;n&#233;ral.
\t\t</p>

\t\t<h4>Article 16 : Connexion des hubs</h4>
\t\t<p>Si une &#233;cole ou une universit&#233; est d&#233;sign&#233;e comme hub 
\t\t\tde RezoSup, un second serveur IRC pour cette &#233;cole ou universit&#233; 
\t\t\tpeut &#234;tre connect&#233;. Ce second serveur doit respecter les m&#234;mes 
\t\t\tconditions techniques que celles cit&#233;es dans l'article 15.
\t\t</p>

\t\t<h4>Article 17 : Phases d'une connexion</h4>
\t\t<p>Une connexion, si les conditions des articles 12 &#224; 16 sont respect&#233;es, 
\t\t\tse fait en 3 phases :
\t\t</p>
\t\t<ul>
\t\t\t<li><u>1&egrave;re phase :</u>discussion d'une 
\t\t\t\tdur&#233;e minimale de 1 mois, comprenant un test technique et la signature 
\t\t\t\tde la pr&#233;sente charte. Vote &#224; majorit&#233; des 2/3 des votants 
\t\t\t\tpour le passage en 2&egrave;me phase.
\t\t\t</li>
\t\t\t<br>
\t\t\t<br>
\t\t\t<li><u>2&egrave;me phase :</u>test de la connexion 
\t\t\t\tpour une dur&#233;e minimale de 3 mois. A l'issue de cette p&eacute;riode, 
\t\t\t\tle serveur doit alors comporter un minimum de 10 clients connect&eacute;s 
\t\t\t\ten permanence. Vote &#224; majorit&#233; des 4/5 des votants pour le passage 
\t\t\t\ten 3&egrave;me phase si la condition pr&eacute;c&eacute;dente est respect&eacute;e.
\t\t\t</li>
\t\t\t<br>
\t\t\t<br>
\t\t\t<li><u>3&egrave;me phase :</u> connexion d&#233;finitive. 
\t\t\t\tLe droit de vote est donn&#233; au nouveau serveur IRC connect&#233;. 
\t\t\t\tCe nouveau serveur fait alors partie de l'assembl&#233;e ex&#233;cutive 
\t\t\t\t(c.f. article 9). Tout Op&#233;rateur de ce serveur est obligatoirement 
\t\t\t\tinscrit &#224; la liste de diffusion de RezoSup.
\t\t\t</li>
\t\t</ul>

\t\t<h4>Article 18 : D&#233;connexion d'un serveur</h4>
\t\t<p>La d&#233;connexion d'un serveur, si elle n'est pas souhait&#233;e par 
\t\t\tle parti concern&#233;, est vot&eacute;e &agrave; la majorit&eacute; des 
\t\t\t2/3 des votants par l'assembl&eacute;e ex&eacute;cutive (le parti concern&eacute; 
\t\t\tconserve son droit de vote).
\t\t</p>
\t\t<p> En cas de d&eacute;connexion, ce serveur IRC perd son droit de vote sur 
\t\t\tRezoSup, et ses Op&#233;rateurs sont supprim&#233;s de la liste de diffusion 
\t\t\tde RezoSup.
\t\t</p>

\t</blockquote>

</blockquote>
";
    }

    public function getTemplateName()
    {
        return "RezoRezoSupBundle:Default:charte.html.twig";
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

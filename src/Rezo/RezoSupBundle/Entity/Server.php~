<?php

namespace Rezo\RezoSupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Server
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Server
{


    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="serveur")
     */
    protected $admin;



    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="serveur", type="string", length=255)
     */
    private $serveur;

    /**
     * @var integer
     *
     * @ORM\Column(name="phase", type="smallint")
     */
    private $phase;

    /**
     * @var string
     *
     * @ORM\Column(name="ecole", type="string", length=255)
     */
    private $ecole;

    /**
     * @var string
     *
     * @ORM\Column(name="diminutif", type="string", length=255)
     */
    private $diminutif;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="assoce", type="string", length=255)
     */
    private $assoce;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_assoce", type="string", length=255)
     */
    private $texte_assoce;

    /**
     * @var string
     *
     * @ORM\Column(name="url_assoce", type="string", length=255)
     */
    private $url_assoce;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_link", type="smallint")
     */
    private $ordre_link;

    /**
     * @var integer
     *
     * @ORM\Column(name="ssl_active", type="smallint")
     */
    private $ssl_active;

    /**
     * @var integer
     *
     * @ORM\Column(name="ipv6", type="smallint")
     */
    private $ipv6;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->admin = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set serveur
     *
     * @param string $serveur
     * @return Server
     */
    public function setServeur($serveur)
    {
        $this->serveur = $serveur;
    
        return $this;
    }

    /**
     * Get serveur
     *
     * @return string 
     */
    public function getServeur()
    {
        return $this->serveur;
    }

    /**
     * Set phase
     *
     * @param integer $phase
     * @return Server
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
    
        return $this;
    }

    /**
     * Get phase
     *
     * @return integer 
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set ecole
     *
     * @param string $ecole
     * @return Server
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;
    
        return $this;
    }

    /**
     * Get ecole
     *
     * @return string 
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set diminutif
     *
     * @param string $diminutif
     * @return Server
     */
    public function setDiminutif($diminutif)
    {
        $this->diminutif = $diminutif;
    
        return $this;
    }

    /**
     * Get diminutif
     *
     * @return string 
     */
    public function getDiminutif()
    {
        return $this->diminutif;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Server
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Server
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set assoce
     *
     * @param string $assoce
     * @return Server
     */
    public function setAssoce($assoce)
    {
        $this->assoce = $assoce;
    
        return $this;
    }

    /**
     * Get assoce
     *
     * @return string 
     */
    public function getAssoce()
    {
        return $this->assoce;
    }

    /**
     * Set texte_assoce
     *
     * @param string $texteAssoce
     * @return Server
     */
    public function setTexteAssoce($texteAssoce)
    {
        $this->texte_assoce = $texteAssoce;
    
        return $this;
    }

    /**
     * Get texte_assoce
     *
     * @return string 
     */
    public function getTexteAssoce()
    {
        return $this->texte_assoce;
    }

    /**
     * Set url_assoce
     *
     * @param string $urlAssoce
     * @return Server
     */
    public function setUrlAssoce($urlAssoce)
    {
        $this->url_assoce = $urlAssoce;
    
        return $this;
    }

    /**
     * Get url_assoce
     *
     * @return string 
     */
    public function getUrlAssoce()
    {
        return $this->url_assoce;
    }

    /**
     * Set ordre_link
     *
     * @param integer $ordreLink
     * @return Server
     */
    public function setOrdreLink($ordreLink)
    {
        $this->ordre_link = $ordreLink;
    
        return $this;
    }

    /**
     * Get ordre_link
     *
     * @return integer 
     */
    public function getOrdreLink()
    {
        return $this->ordre_link;
    }

    /**
     * Set ssl_active
     *
     * @param integer $sslActive
     * @return Server
     */
    public function setSslActive($sslActive)
    {
        $this->ssl_active = $sslActive;
    
        return $this;
    }

    /**
     * Get ssl_active
     *
     * @return integer 
     */
    public function getSslActive()
    {
        return $this->ssl_active;
    }

    /**
     * Set ipv6
     *
     * @param integer $ipv6
     * @return Server
     */
    public function setIpv6($ipv6)
    {
        $this->ipv6 = $ipv6;
    
        return $this;
    }

    /**
     * Get ipv6
     *
     * @return integer 
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * Add admin
     *
     * @param \Rezo\RezoSupBundle\Entity\User $admin
     * @return Server
     */
    public function addAdmin(\Rezo\RezoSupBundle\Entity\User $admin)
    {
        $this->admin[] = $admin;
    
        return $this;
    }

    /**
     * Remove admin
     *
     * @param \Rezo\RezoSupBundle\Entity\User $admin
     */
    public function removeAdmin(\Rezo\RezoSupBundle\Entity\User $admin)
    {
        $this->admin->removeElement($admin);
    }

    /**
     * Get admin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
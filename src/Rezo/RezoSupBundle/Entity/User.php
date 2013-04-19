<?php

namespace Rezo\RezoSupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser
{


     /**
     * @ORM\ManyToOne(targetEntity="Server", inversedBy="admin")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     */
    protected $serveur;

	/**
     * @ORM\OneToOne(targetEntity="Admin", mappedBy="associatedUser")
     */
    private $admin;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo1", type="string", length=255, nullable=true)
     */
    private $pseudo1;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo2", type="string", length=255, nullable=true)
     */
    private $pseudo2;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo3", type="string", length=255, nullable=true)
     */
    private $pseudo3;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo4", type="string", length=255, nullable=true)
     */
    private $pseudo4;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo5", type="string", length=255, nullable=true)
     */
    private $pseudo5;

    /**
     * @var string
     *
     * @ORM\Column(name="channels", type="string", length=255, nullable=true)
     */
    private $channels;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="naissance", type="date", nullable=true)
     */
    private $naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="icq", type="integer", nullable=true)
     */
    private $icq;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;


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
     * Set level
     *
     * @param integer $level
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pseudo1
     *
     * @param string $pseudo1
     * @return User
     */
    public function setPseudo1($pseudo1)
    {
        $this->pseudo1 = $pseudo1;
    
        return $this;
    }

    /**
     * Get pseudo1
     *
     * @return string 
     */
    public function getPseudo1()
    {
        return $this->pseudo1;
    }

    /**
     * Set pseudo2
     *
     * @param string $pseudo2
     * @return User
     */
    public function setPseudo2($pseudo2)
    {
        $this->pseudo2 = $pseudo2;
    
        return $this;
    }

    /**
     * Get pseudo2
     *
     * @return string 
     */
    public function getPseudo2()
    {
        return $this->pseudo2;
    }

    /**
     * Set pseudo3
     *
     * @param string $pseudo3
     * @return User
     */
    public function setPseudo3($pseudo3)
    {
        $this->pseudo3 = $pseudo3;
    
        return $this;
    }

    /**
     * Get pseudo3
     *
     * @return string 
     */
    public function getPseudo3()
    {
        return $this->pseudo3;
    }

    /**
     * Set pseudo4
     *
     * @param string $pseudo4
     * @return User
     */
    public function setPseudo4($pseudo4)
    {
        $this->pseudo4 = $pseudo4;
    
        return $this;
    }

    /**
     * Get pseudo4
     *
     * @return string 
     */
    public function getPseudo4()
    {
        return $this->pseudo4;
    }

    /**
     * Set pseudo5
     *
     * @param string $pseudo5
     * @return User
     */
    public function setPseudo5($pseudo5)
    {
        $this->pseudo5 = $pseudo5;
    
        return $this;
    }

    /**
     * Get pseudo5
     *
     * @return string 
     */
    public function getPseudo5()
    {
        return $this->pseudo5;
    }

    /**
     * Set channels
     *
     * @param string $channels
     * @return User
     */
    public function setChannels($channels)
    {
        $this->channels = $channels;
    
        return $this;
    }

    /**
     * Get channels
     *
     * @return string 
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Set naissance
     *
     * @param \DateTime $naissance
     * @return User
     */
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;
    
        return $this;
    }

    /**
     * Get naissance
     *
     * @return \DateTime 
     */
    public function getNaissance()
    {
        return $this->naissance;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set icq
     *
     * @param integer $icq
     * @return User
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;
    
        return $this;
    }

    /**
     * Get icq
     *
     * @return integer 
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return User
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return User
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set serveur
     *
     * @param \Rezo\RezoSupBundle\Entity\Server $serveur
     * @return User
     */
    public function setServeur(\Rezo\RezoSupBundle\Entity\Server $serveur = null)
    {
        $this->serveur = $serveur;
    
        return $this;
    }

    /**
     * Get serveur
     *
     * @return \Rezo\RezoSupBundle\Entity\Server 
     */
    public function getServeur()
    {
        return $this->serveur;
    }

    /**
     * Set admin
     *
     * @param \Rezo\RezoSupBundle\Entity\Admin $admin
     * @return User
     */
    public function setAdmin(\Rezo\RezoSupBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return \Rezo\RezoSupBundle\Entity\Admin 
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
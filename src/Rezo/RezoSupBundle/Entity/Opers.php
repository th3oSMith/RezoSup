<?php

namespace Rezo\RezoSupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opers
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Opers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_server", type="smallint")
     */
    private $id_server;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo1", type="string", length=255)
     */
    private $pseudo1;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo2", type="string", length=255)
     */
    private $pseudo2;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo3", type="string", length=255)
     */
    private $pseudo3;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo4", type="string", length=255)
     */
    private $pseudo4;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo5", type="string", length=255)
     */
    private $pseudo5;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20)
     */
    private $telephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="naissance", type="datetime")
     */
    private $naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=50)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;


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
     * Set id_server
     *
     * @param integer $idServer
     * @return Opers
     */
    public function setIdServer($idServer)
    {
        $this->id_server = $idServer;
    
        return $this;
    }

    /**
     * Get id_server
     *
     * @return integer 
     */
    public function getIdServer()
    {
        return $this->id_server;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Opers
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
     * @return Opers
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
     * @return Opers
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
     * @return Opers
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
     * @return Opers
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
     * @return Opers
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
     * @return Opers
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
     * @return Opers
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
     * Set email
     *
     * @param string $email
     * @return Opers
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Opers
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
     * Set naissance
     *
     * @param \DateTime $naissance
     * @return Opers
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
     * Set photo
     *
     * @param string $photo
     * @return Opers
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
     * Set message
     *
     * @param string $message
     * @return Opers
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
}
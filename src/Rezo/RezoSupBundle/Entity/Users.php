<?php

namespace Rezo\RezoSupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Users
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
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=255)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="alternative", type="string", length=255)
     */
    private $alternative;

    /**
     * @var string
     *
     * @ORM\Column(name="nick_gpe", type="string", length=255)
     */
    private $nick_gpe;

    /**
     * @var string
     *
     * @ORM\Column(name="channels", type="string", length=255)
     */
    private $channels;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="icq", type="string", length=255)
     */
    private $icq;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255)
     */
    private $pass;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_server", type="smallint")
     */
    private $id_server;


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
     * Set nick
     *
     * @param string $nick
     * @return users
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    
        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set alternative
     *
     * @param string $alternative
     * @return users
     */
    public function setAlternative($alternative)
    {
        $this->alternative = $alternative;
    
        return $this;
    }

    /**
     * Get alternative
     *
     * @return string 
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * Set nick_gpe
     *
     * @param string $nickGpe
     * @return users
     */
    public function setNickGpe($nickGpe)
    {
        $this->nick_gpe = $nickGpe;
    
        return $this;
    }

    /**
     * Get nick_gpe
     *
     * @return string 
     */
    public function getNickGpe()
    {
        return $this->nick_gpe;
    }

    /**
     * Set channels
     *
     * @param string $channels
     * @return users
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
     * Set emails
     *
     * @param string $emails
     * @return users
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    
        return $this;
    }

    /**
     * Get emails
     *
     * @return string 
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return users
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return users
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
     * @return users
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
     * Set url
     *
     * @param string $url
     * @return users
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
     * Set icq
     *
     * @param string $icq
     * @return users
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;
    
        return $this;
    }

    /**
     * Get icq
     *
     * @return string 
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return users
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
     * Set description
     *
     * @param string $description
     * @return users
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return users
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    
        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set id_server
     *
     * @param integer $idServer
     * @return users
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
     * Set email
     *
     * @param string $email
     * @return Users
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
}
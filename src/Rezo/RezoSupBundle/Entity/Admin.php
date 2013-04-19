<?php

namespace Rezo\RezoSupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Admin
{
	
	/**
     * @ORM\OneToOne(targetEntity="User", inversedBy="admin")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $associatedUser;
	
	
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
     * @ORM\Column(name="alias", type="integer")
     */
    private $alias;

    /**
	* @var string
	*
	* @ORM\Column(name="user", type="string", length=255)
	*/
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=255)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mailing", type="boolean", nullable=true)
     */
    private $mailing;

    /**
     * @var boolean
     *
     * @ORM\Column(name="oper", type="boolean", nullable=true)
     */
    private $oper;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=true)
     */
    private $admin;


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
     * Set alias
     *
     * @param integer $alias
     * @return Admin
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return integer 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Admin
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Admin
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
     * Set password
     *
     * @param string $password
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mailing
     *
     * @param boolean $mailing
     * @return Admin
     */
    public function setMailing($mailing)
    {
        $this->mailing = $mailing;
    
        return $this;
    }

    /**
     * Get mailing
     *
     * @return boolean 
     */
    public function getMailing()
    {
        return $this->mailing;
    }

    /**
     * Set oper
     *
     * @param boolean $oper
     * @return Admin
     */
    public function setOper($oper)
    {
        $this->oper = $oper;
    
        return $this;
    }

    /**
     * Get oper
     *
     * @return boolean 
     */
    public function getOper()
    {
        return $this->oper;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return Admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set associatedUser
     *
     * @param \Rezo\RezoSupBundle\Entity\User $associatedUser
     * @return Admin
     */
    public function setAssociatedUser(\Rezo\RezoSupBundle\Entity\User $associatedUser = null)
    {
        $this->associatedUser = $associatedUser;
    
        return $this;
    }

    /**
     * Get associatedUser
     *
     * @return \Rezo\RezoSupBundle\Entity\User 
     */
    public function getAssociatedUser()
    {
        return $this->associatedUser;
    }
}

<?php

namespace Rezo\RezoSupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class News
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=40)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="oper_id", type="smallint")
     */
    private $oper_id;

    /**
     * @var string
     *
     * @ORM\Column(name="urltext", type="string", length=255, nullable=true)
     */
    private $urltext;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=40, nullable=true)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=16, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=40, nullable=true)
     */
    private $site;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="smallint",nullable=true)
     */
    private $type_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="smallint", nullable=true)
     */
    private $deleted;


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
     * Set date
     *
     * @param \DateTime $date
     * @return News
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
     * Set title
     *
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return News
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return News
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
     * Set oper_id
     *
     * @param integer $operId
     * @return News
     */
    public function setOperId($operId)
    {
        $this->oper_id = $operId;
    
        return $this;
    }

    /**
     * Get oper_id
     *
     * @return integer 
     */
    public function getOperId()
    {
        return $this->oper_id;
    }

    /**
     * Set urltext
     *
     * @param string $urltext
     * @return News
     */
    public function setUrltext($urltext)
    {
        $this->urltext = $urltext;
    
        return $this;
    }

    /**
     * Get urltext
     *
     * @return string 
     */
    public function getUrltext()
    {
        return $this->urltext;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return News
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    
        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return News
     */
    public function setTarget($target)
    {
        $this->target = $target;
    
        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return News
     */
    public function setSite($site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set type_id
     *
     * @param integer $typeId
     * @return News
     */
    public function setTypeId($typeId)
    {
        $this->type_id = $typeId;
    
        return $this;
    }

    /**
     * Get type_id
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     * @return News
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}

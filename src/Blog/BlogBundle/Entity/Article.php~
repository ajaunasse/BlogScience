<?php

namespace Blog\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Blog\BlogBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text",nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="text", nullable=false)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Blog\BlogBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;

    /**
    * @ORM\ManyToOne(targetEntity="Blog\BlogBundle\Entity\Image")
    */
  private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbvues", type="integer")
     */
    private $nbvues = 0 ;

     /**
   * @ORM\ManyToMany(targetEntity="Blog\BlogBundle\Entity\Tag", cascade={"persist"})
   */

    private $tag;



    function __construct(){
        $this->date = new \DateTime() ;
        $this->categories   = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
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
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
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
     * Set online
     *
     * @param boolean $online
     * @return Article
     */
    public function setOnline($online)
    {
        $this->online = $online;
    
        return $this;
    }

    /**
     * Get online
     *
     * @return boolean 
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set categorie
     *
     * @param \Blog\BlogBundle\Entity\Categorie $categorie
     * @return Article
     */
    public function setCategorie(\Blog\BlogBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Blog\BlogBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
   * @param Blog\BlogBundle\Entity\Categorie $categorie
   * @return Article
   */
  public function addCategorie(\Blog\BlogBundle\Entity\Categorie $categorie)
  {
    $this->categories[] = $categorie;
    return $this;
  }

  /**
   * @param Blog\BlogBundle\Entity\Categorie $categorie
   */
  public function removeCategorie(\Blog\BlogBundle\Entity\Categorie $categorie)
  {
    $this->categories->removeElement($categorie);
  }

    /**
   * @param Blog\BlogBundle\Entity\Image $image
   * @return Article
   */
  public function setImage(\Blog\BlogBundle\Entity\Image $image = null)
  {
    $this->image = $image;
    return $this;
  }

  /**
   * @return Blog\BlogBundle\Entity\Image
   */
  public function getImage()
  {
    return $this->image;
  }

    /**
     * Set nbvues
     *
     * @param integer $nbvues
     * @return Article
     */
    public function setNbvues($nbvues)
    {
        $this->nbvues = $nbvues;
    
        return $this;
    }

    /**
     * Get nbvues
     *
     * @return integer 
     */
    public function getNbvues()
    {
        return $this->nbvues;
    }

    /**
     * Add tag
     *
     * @param \Blog\BlogBundle\Entity\Tag $tag
     * @return Article
     */
    public function addTag(\Blog\BlogBundle\Entity\Tag $tag)
    {
        $this->tag[] = $tag;
    
        return $this;
    }

    /**
     * Remove tag
     *
     * @param \Blog\BlogBundle\Entity\Tag $tag
     */
    public function removeTag(\Blog\BlogBundle\Entity\Tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
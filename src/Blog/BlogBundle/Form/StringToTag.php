<?php
 
namespace Blog\BlogBundle\Form;
 
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;
use Blog\BlogBundle\Entity\Tag;
 
class StringToTag implements DataTransformerInterface
{
 
    private $om;
 
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }
 
    public function reverseTransform($ftags)
    {
        $tags = new ArrayCollection();
        $tag = strtok($ftags, ",");
        while($tag !== false) {
            $itag = new Tag();
            $itag->setName($tag);
            if(!$tags->contains($itag))
                $tags[] = $itag;
            $tag = strtok(",");
        }
        return $tags;
    }
 
    public function transform($tags)
    {
        $ftags = "";
        if($tags != null) {
        foreach($tags as $tag)
            $ftags = $ftags.','.$tag->getName();
     
        }
        return $ftags;
    }
}
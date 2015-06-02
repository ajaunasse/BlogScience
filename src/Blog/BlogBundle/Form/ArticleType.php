<?php

namespace Blog\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text', array(
              'attr' => array('class'=> 'form-control')))
            ->add('description', 'textarea', array(
              'attr' => array('class'=> 'form-control')) )
            ->add('contenu', 'textarea', array(
              'attr' => array('class'=> 'form-control',)))
            ->add('slug', 'text', array(
              'attr' => array('class'=> 'form-control')))
            ->add('categorie', 'entity',        array(
                    'class'    => 'BlogBundle:Categorie',
                    'property' => 'name',
                    'multiple' => false,
                    'attr' => array('class'=> 'form-control')
      ))
            ->add('image', 'entity',        array(
                    'class'    => 'BlogBundle:Image',
                    'property' => 'name',
                    'multiple' => false,
                    'attr' => array('class'=> 'form-control')))
              ->add('tag', 'collection', array(
                  'type' => new TagType(),
                  'allow_add' => true,
                  'allow_delete' => true,
                  'by_reference' => false,
            
            ))
            ->add('online', 'checkbox', array(
              'required'    => false,))
         
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_blogbundle_article';
    }
}

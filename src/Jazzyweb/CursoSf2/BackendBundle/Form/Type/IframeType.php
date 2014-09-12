<?php
namespace Jazzyweb\CursoSf2\BackendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IframeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('autor', 'text')
            ->add('emailAutor', 'email')
            ->add('anchura', 'number')
            ->add('altura', 'number')
            ->add('file', 'file')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'iframe';
    }

    /**
     * Necesario si queremos usar formularios embebidos.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jazzyweb\CursoSf2\BackendBundle\Entity\Iframe',
        ));
    }
}
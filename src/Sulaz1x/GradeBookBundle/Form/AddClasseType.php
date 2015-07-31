<?php
use SymfonyComponentFormAbstractType;
use SymfonyComponentFormFormBuilderInterface;
use SymfonyComponentOptionsResolverOptionsResolverInterface;

class AddClasseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('description');
        $builder->add('start');
        $builder->add('end');
        $builder->add('dueDate', null, array('widget' => 'single_text'));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sulaz1x\GradeBookBundle\Entity\Classe',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'addClasse';
    }
}

?>

<?php
use SymfonyComponentFormAbstractType;
use SymfonyComponentFormFormBuilderInterface;
use SymfonyComponentOptionsResolverOptionsResolverInterface;

class AddCoursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => '',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '';
    }
}


?>

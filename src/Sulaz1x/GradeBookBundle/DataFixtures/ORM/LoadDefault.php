<?php

namespace Sulaz1x\SecurityBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\Persistence\ObjectManager;
use Sulaz1x\SecurityBundle\Entity\User;
use Sulaz1x\GradeBookBundle\Entity\Classe;
use Sulaz1x\GradeBookBundle\Entity\Cours;
use Sulaz1x\GradeBookBundle\Entity\Examen;

class LoadDefault implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function load(ObjectManager $manager)
    {
        // Les variables
        $listCours = array('Français', 'Math', 'Allemand');
        $classeName = "8P7";
        $classeDescription = "La classe 8P7 de Mme Gomez";

        $classe = new Classe;
        $classe->setName($classeName);
        $classe->setDescription($classeDescription);
        $manager->persist($classe);
        $manager->flush();

        $em = $this->container->get('doctrine')->getEntityManager('default');

        $repository = $em->getRepository('Sulaz1xSecurityBundle:User');
        $students = $repository->findAll();
        foreach ($students as $student){
            $student->setClasse($classe);
            $manager->persist($student);
        }

        foreach ($listCours as $coursname) {
          // On crée l'utilisateur
          $cours = new Cours;

          // Le nom d'utilisateur et le mot de passe sont identiques
          $cours->setName($coursname);
          $cours->setDescription("Un cours de test");
          $cours->setStart(new \Datetime('25-08-2015'));
          $cours->setEnd(new \Datetime('25-07-2016'));
          $classe->addCours($cours);
          $manager->persist($cours);
          $manager->persist($classe);
        }

        // On déclenche l'enregistrement
        $manager->flush();
    }
}

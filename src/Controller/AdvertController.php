<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use App\Entity\Advert;
use App\Entity\Image;
use App\Entity\Application;
use App\Entity\Category;
use App\Entity\Skill;
use App\Entity\AdvertSkill;
use App\Form\AdvertType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdvertController extends AbstractController
{
  public function index()
  {
    $listAdverts = $this->getDoctrine()
    ->getRepository('App\Entity\Advert')
    ->findAll()
    ;

    return $this->render('Advert/index.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }

  public function view($id)
  {

    // On récupère l'entité correspondante à l'id'
    $em = $this->getDoctrine()->getManager();
    $advert = $em->find('App\Entity\Advert', $id);

    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
    // ou null si l'id $id  n'existe pas, d'où ce if :
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    $listApplications = $em->getRepository('App\Entity\Application')->findBy(array('advert' => $advert));
    $listAdvertSkills = $em->getRepository('App\Entity\AdvertSkill')->findBy(array('advert' => $advert));

    return $this->render('Advert/view.html.twig', array(
      'advert' => $advert,
      'listApplications' => $listApplications,
      'listAdvertSkills' => $listAdvertSkills
    ));
  }

  public function add(Request $request)
  {
    // Création de l'entité
    $advert = new Advert();

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $form = $this->get('form.factory')->create(AdvertType::class, $advert);
    // Si la requête est en POST
    if ($request->isMethod('POST')) {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
      $form->handleRequest($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('Advert/add.html.twig', array(
      'form' => $form->createView(),
    ));
    /*$advert->setTitle('Recherche développeur Symfony.');
    $advert->setAuthor('Alexandre');
    $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    $image = new Image();
    $image->setUrl("https://femmedigitale.net/wp-content/uploads/2016/01/m%C3%A9nage-300x211.jpg");
    $image->setAlt("job de reve");
    $advert->setImage($image);

    $application1 = new Application();
    $application1->setAuthor("Pierre");
    $application1->setContent("Je suis tres motivé");

    $application2 = new Application();
    $application2->setAuthor("Jean");
    $application2->setContent("Je suis grave bg");

    $advert->addApplication($application1);
    $advert->addApplication($application2);
    $application1->setAdvert($advert);
    $application2->setAdvert($advert);

    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    $listCategories = $em->getRepository('App\Entity\Category')->findAll();
    foreach ($listCategories as $category) {
      $advert->addCategory($category);
    }

    $listSkills = $em->getRepository('App\Entity\Skill')->findAll();
    foreach ($listSkills as $skill) {
      $advertSkill = new AdvertSkill();
      $advertSkill->setAdvert($advert);
      $advertSkill->setSkill($skill);
      $advertSkill->setLevel('Débutant');
      $em->persist($advertSkill);
    }
    // Étape 1 : On « persiste » les entités
    $em->persist($advert);
    $em->persist($application1);
    $em->persist($application2);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

    // Reste de la méthode qu'on avait déjà écrit
    $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

    // Puis on redirige vers la page de visualisation de cettte annonce
    return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));*/
    
  }

  
  public function edit($id, Request $request)
  {

    $advert = $this->getDoctrine()
      ->getManager()
      ->getRepository('App\Entity\Advert')
      ->find($id)
    ;

    // Et on construit le formBuilder avec cette instance de l'annonce, comme précédemment
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $advert);
    
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // Étape 2 : On déclenche l'enregistrement
    $em->flush();
    
    return $this->render('Advert/edit.html.twig', array(
      'advert' => $advert
    ));
  }

  
  public function delete($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
    // on trouve l'advert à supprimer
    $advert = $em->getRepository('App\Entity\Advert')->find($id);

    $listApplications = $em->getRepository('App\Entity\Application')->findAll();
    foreach ($listApplications as $application) {
      if ($application->getAdvert() == $advert)  {
        $em->remove($application);
      }
    }

    $listAdvertSkills = $em->getRepository('App\Entity\AdvertSkill')->findAll();
    foreach ($listAdvertSkills as $advertSkill) {
      if ($advertSkill->getAdvert() == $advert)  {
        $em->remove($advertSkill);
      }
    }

    foreach ($advert->getCategories() as $category) {
      $advert->removeCategory($category);
    }

    // Étape 1 : On prépare la suppression de l'entité
    $em->remove($advert);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

    return $this->render('Advert/delete.html.twig'); 
  }

  public function menuAction()
  {
    $listAdverts = $this->getDoctrine()
    ->getRepository('App\Entity\Advert')
    ->findBy(array(), null, 3, null)
    ;

    return $this->render('Advert/menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }
}

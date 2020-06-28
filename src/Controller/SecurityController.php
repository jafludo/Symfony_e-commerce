<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\AccountType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SecurityController extends AbstractController
{
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // Création de l'entité
        $user = new Utilisateur();
    
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->get('form.factory')->create(AccountType::class, $user);
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
          $form->handleRequest($request);
    
          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($form->isValid()) {
            //on encode le mdp
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            // On enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
    
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
    
            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('security_login');
          }
        }
    
        // À ce stade, le formulaire n'est pas valide car :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
        return $this->render('security/add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    public function view($id)  {
        // On récupère l'entité correspondante à l'id'
        $em = $this->getDoctrine()->getManager();
        $user = $em->find('App\Entity\Utilisateur', $id);

        // $user est donc une instance de OC\PlatformBundle\Entity\Utilisateur
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $user) {
            throw new NotFoundHttpException("L'utilisateur d'id ".$id." n'existe pas.");
        }

        return $this->render('Account/view.html.twig', array(
            'user' => $user
        ));
    }
}

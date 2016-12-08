<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Commentaires;
use AppBundle\Entity\Cafes;
use AppBundle\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;




class DefaultController extends Controller
{
   
    /**
     * @Route("/", name="Lister")
     */

    public function actionLister(Request $request){

        $filtres = array();
        $requete = $this->get('request');
        if( $requete->getMethod() == 'POST' ) {
            $nom = $requete->request->get('nom');
            $adresse = $requete->request->get('adresse');
            $arrondissement = $requete->request->get('arrondissement');

            $filtres['nom'] = $nom;
            
            $filtres['nom'] = addslashes($filtres['nom']);
            // protection cross-site scripting
            $filtres['nom'] = htmlentities($filtres['nom']);
            $filtres['nom'] = strip_tags($filtres['nom']);
            
            
            $filtres['adresse'] = $adresse;
            
            $filtres['adresse'] = addslashes($filtres['adresse']);
            // protection cross-site scripting
            $filtres['adresse'] = htmlentities($filtres['adresse']);
            $filtres['adresse'] = strip_tags($filtres['adresse']);
            
            
            $filtres['arrondissement'] = $arrondissement;
            
            $filtres['arrondissement'] = addslashes($filtres['arrondissement']);
            // protection cross-site scripting
            $filtres['arrondissement'] = htmlentities($filtres['arrondissement']);
            $filtres['arrondissement'] = strip_tags($filtres['arrondissement']);


            //Récupération de la liste de café selon la recherche
            $qb = $this->getDoctrine()->getEntityManager()->createQueryBuilder();
            $qb->add('select', 'n')
                ->add('from', 'AppBundle:Cafes n')
                ->add('where', $qb->expr()->andx(
                        $qb->expr()->like('n.nom', '?1'),
                        $qb->expr()->like('n.adresse', '?2'),
                        $qb->expr()->like('n.arrondissement', '?3')
                    ))
                ->setParameter(1, '%'.$nom.'%')
                ->setParameter(2, '%'.$adresse.'%')
                ->setParameter(3, '%'.$arrondissement.'%');
            $query = $qb->getQuery();
            $cafes = $query->getResult();
        }
        else {
            //Si aucune recherche n'est efféctué on retourne tous les cafés
            $repository = $this->getDoctrine()->getRepository('AppBundle:Cafes');
            $cafes = $repository->findAll();
            $filtres['arrondissement'] = "";
            $filtres['nom'] = "";
            $filtres['adresse'] = "";
        }

        if($request->isXmlHttprequest()) {
            return $this->render('default/tableauPartiel.html.twig', array('cafes'=>$cafes, 'arrondissement'=>$filtres['arrondissement'], 'nom'=>$filtres['nom'], 'adresse'=>$filtres['adresse']));
        }

        return $this->render('default/index.html.twig', array('cafes'=>$cafes, 'arrondissement'=>$filtres['arrondissement'], 'nom'=>$filtres['nom'], 'adresse'=>$filtres['adresse']));

    }
    
    
    /**
     * @Route("/voir/{id}", name="voir")
     */
    public function createAction($id)
    {
        
        $cafe = $this->getDoctrine()->getRepository('AppBundle:Cafes')->find($id);
        
        $com = $this->getDoctrine()->getRepository('AppBundle:Commentaires')->findBy(array('idCafe' => $id));
        
        if (!$cafe) {
            throw $this->createNotFoundException(
                'Aucun café trouvé '
            );
        }
        
        return $this->render('default/voirCafe.html.twig', array('cafe' => $cafe, 'com' => $com));
    }
    
    
     /**
     * @Route("/comm/ajouter/{id}", name="addComm")
     */
    public function createComm($id) {
        
        $task = new Commentaires();
        $task->setAuteur("Nom");
        $task->setDate(new \DateTime('today'));
        $task->setEtoile(0);
        $task->setTexte("text");
        $task->setIdCafe($id);

        $form = $this->createFormBuilder($task)
            ->add('auteur', 'text')
            ->add('date', 'date')
            ->add('etoile', 'integer')
            ->add('texte', 'text')
            ->add('idCafe', 'integer')
            ->add('save', 'button', array('attr' => array('class' => 'save'),))
            ->getForm();
        
        return $this->render('default/addComm.html.twig', array('form' => $form->createView(), 'id' => $id));
    }
    
    /**
     * @Route("/comm/ajout/{id}", name="ajout")
     */
    public function ajoutComm($id) {
        
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
        
            $request = $this->get('request');

            if( $request->getMethod() == 'POST' ) {

                $idCafe=$request->request->get('idCafe');
                $date=$request->request->get('date');
                $texte=$request->request->get('texte');
                $etoile=$request->request->get('etoile');
                $auteur=$request->request->get('auteur');

                $comm = new Commentaires();
                $comm->setIdCafe($idCafe);
                $comm->setAuteur($auteur);
                $comm->setDate($date);
                $comm->setTexte($texte);
                $comm->setEtoile($etoile);



                $em = $this->getDoctrine()->getManager();
                $em->persist($comm);
                $em->flush();

                return DefaultController::createAction($id);

            }
        
        }
        else {
             throw new AccessDeniedException();
        }
        
    }
    
    /**
     * @Route("/trier", name="trier")
     */
    /*public function trierCafe() {
        
        $request = $this->get('request');
        $array = array();
        

        if( $request->getMethod() == 'POST' ) {
        
        if($request->request->get('nom') != null) { 
            
            
            if($request->request->get('nom') != '') {
                    
                    $nom = $request->request->get('nom');
                    $nom = htmlspecialchars( $nom );
                    
                    $array['nom'] = $nom;
                    
                }
           
                if($request->request->get('adresse') != '') {
                    
                    $adresse = $request->request->get('adresse');
                    $adresse = htmlspecialchars( $adresse );
                    
                    $array['adresse'] = $adresse;
                }
                
                if($request->request->get('arrondissement') != '') {
                    
                    $arrondissement = $request->request->get('arrondissement');
                    $arrondissement = htmlspecialchars( $arrondissement );
                    
                    $array['arrondissement'] = $arrondissement;
                 }
            }
            
            $repository = $this->getDoctrine() ->getRepository('AppBundle:Cafes');
            
            $cafes = $repository->findBy($array);
            
            if (!$cafes) {
            throw $this->createNotFoundException(
                'Aucun café trouvé '
            );
        }

        return $this->render('default/index.html.twig', array('cafes' => $cafes));
        }
    }*/
    
    /**
     * @Route("/cafe/ajouter", name="addCafe")
     */
    public function createCafe() {
        
         if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        
            return $this->render('default/addCafe.html.twig');
         }
         else {
             throw new AccessDeniedException();
        }
    }
    
    
    /**
     * @Route("/cafe/ajout", name="ajoutCafe")
     */
    public function ajoutCafe() {
        
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        
        $request = $this->get('request');

        if( $request->getMethod() == 'POST' ) {
            
            
            $nom=$request->request->get('nom');
            $adresse=$request->request->get('adresse');
            $arron=$request->request->get('arron');
            $geo=$request->request->get('geo');
            $prixC=$request->request->get('prixC');
            $prixS=$request->request->get('prixS');
            $prixT=$request->request->get('prixT');
            
            $cafe = new Cafes();
            
            $cafe->setNom($nom);
            $cafe->setAdresse($adresse);
            $cafe->setArrondissement($arron);
            $cafe->setGeoLatitude($geo);
            $cafe->setPrixComptoir($prixC);
            $cafe->setPrixSalle($prixS);
            $cafe->setPrixTerasse($prixT);

            $em = $this->getDoctrine()->getManager();
            $em->persist($cafe);
            $em->flush();
            
            return $this->redirectToRoute("Lister");

        }
        
        }
        else {
            throw new AccessDeniedException();
        }
        
        
    }
    
        /**
        * @Route("/inscription/form", name="inscription")
        */
       public function createFormIns() {

           return $this->render('default/inscription.html.twig');
       }
       
    /**
     * @Route("/inscription/ajout", name="ajoutUtil")
     */
    public function ajoutUtil() {
        
        $request = $this->get('request');

        if( $request->getMethod() == 'POST' ) {
                      
            
            $login=$request->request->get('login');
            $mdp=$request->request->get('mdp');
            
            $utils = $this->getDoctrine()->getRepository('AppBundle:Utilisateurs')->findAll();
            
            $util='';
            
            foreach ($utils as $value) {
                
                if($value->getLogin() == $login)
                    $util = $value;
            }
        
            if ($util) {
                
                return $this->render('default/inscription.html.twig', array('message' => 'Login déjà utilisé !','login' => $login));
            }
            else {
            
            $util = new Utilisateurs();
            
            $util->setLogin($login);
            $util->setMdp($mdp);
            $util->setDroit(0);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($util);
            $em->flush();
            
            return DefaultController::connexionForm();
            
            }

        }
        
        
    }
    
        /**
        * @Route("/connexion", name="connexion")
        */
       public function connexionForm() {

           return $this->render('default/connexion.html.twig');
       }
       
       /**
     * @Route("/connexion/verif", name="checkCo")
     */
    public function checkCo() {
        
        $request = $this->get('request');

        if( $request->getMethod() == 'POST' ) {
                      
            
            $login=$request->request->get('login');
            $mdp=$request->request->get('mdp');
            
            $utils = $this->getDoctrine()->getRepository('AppBundle:Utilisateurs')->findAll();
            
            $util;
            
            foreach ($utils as $value) {
                
                if($value->getLogin() == $login && $value->getMdp() == $login)
                    $util = $value;
            }
        
            if (!$util) {
                
                return $this->render('default/inscription.html.twig', array('message' => 'Mauvais Login ou Mauvais mdp!','login' => $login));
            }
            else {
                
                $session = new Session();
                $session->start();
            
                $session->set('login',$util->getLogin());
                $session->set('mdp',$util->getMdp());
                $session->set('droit',$util->getDroit());
            
                return $this->redirectToRoute("Lister");
            
            }

        }
        
        
    }
    
    /**
        * @Route("/deconnexion", name="deconnexion")
        */
       public function deconnexion() {
           
           $session = $this->getRequest()->getSession();
           
           $session->clear();
           $session->invalidate();
          
           return $this->redirectToRoute("Lister");
       }

       /**
        * @Route("/suppCafe/{id}", name="suppCafe")
        */
       public function suppCafe($id) {
           if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();
            $cafe = $em->getRepository('AppBundle:Cafes')->find($id);

             if (!$cafe) {
                 throw $this->createNotFoundException(
                     'Aucun cafe trouvé pour cet id : '.$id
                 );
             }

             $em->remove($cafe);
             $em->flush();

             return $this->redirectToRoute("Lister");
         }
         else {
           throw new AccessDeniedException();
       }
        
       }
       
        
        /**
        * @Route("/modifCafe/{id}", name="modifCafe")
        */
       public function modifCafe($id) {
           
           if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
           
            $em = $this->getDoctrine()->getManager();
            $cafe = $em->getRepository('AppBundle:Cafes')->find($id);

             if (!$cafe) {
                 throw $this->createNotFoundException(
                     'Aucun cafe trouvé pour cet id : '.$id
                 );
             }

            return $this->render('default/modifCafe.html.twig',array('cafe'=>$cafe));
           
           }
           else {
               throw new AccessDeniedException();
           }
        }
        
        
         /**
        * @Route("/update/{id}", name="update")
        */
        public function updateAction($id)
        {
            if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
                $request = $this->get('request');

               if( $request->getMethod() == 'POST' ) {


                   $nom=$request->request->get('nom');
                   $adresse=$request->request->get('adresse');
                   $arron=$request->request->get('arron');
                   $geo=$request->request->get('geo');
                   $prixC=$request->request->get('prixC');
                   $prixS=$request->request->get('prixS');
                   $prixT=$request->request->get('prixT');

                   $em = $this->getDoctrine()->getManager();
                   $cafe = $em->getRepository('AppBundle:Cafes')->find($id);

                   if (!$cafe) {
                       throw $this->createNotFoundException(
                           'Aucun cafe trouvé pour cet id : '.$id
                       );
                   }

                   $cafe->setNom($nom);
                   $cafe->setAdresse($adresse);
                   $cafe->setArrondissement($arron);
                   $cafe->setGeoLatitude($geo);
                   $cafe->setPrixComptoir($prixC);
                   $cafe->setPrixSalle($prixS);
                   $cafe->setPrixTerasse($prixT);

                   $em->flush();
               }

               return DefaultController::createAction($id);
            }
            else {
                throw new AccessDeniedException();
            }
        }
        
        /**
        * @Route("/suppComm/{id}", name="suppComm")
        */
       public function suppComm($id) {
           
           if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();
            $comm = $em->getRepository('AppBundle:Commentaires')->find($id);

             if (!$comm) {
                 throw $this->createNotFoundException(
                     'Aucun comm trouvé pour cet id : '.$id
                 );
             }
             
             $idCafe = $comm->getIdCafe();

             $em->remove($comm);
             $em->flush();

             return DefaultController::createAction($idCafe);
           }
           else {
                throw new AccessDeniedException();
            }
        }
        
        /**
        * @Route("/modifComm/{id}", name="modifComm")
        */
       public function modifComm($id) {
           
            if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
           
                $em = $this->getDoctrine()->getManager();
                $comm = $em->getRepository('AppBundle:Commentaires')->find($id);

                 if (!$comm) {
                     throw $this->createNotFoundException(
                         'Aucun comm trouvé pour cet id : '.$id
                     );
                 }

                return $this->render('default/modifComm.html.twig',array('comm'=>$comm));
           
            }
            else {
                throw new AccessDeniedException();
            }
        }
        
        /**
        * @Route("/updateComm/{id}", name="updateComm")
        */
    public function updateCommAction($id) {
        
        if (true === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        
            $request = $this->get('request');

            $em = $this->getDoctrine()->getManager();
            $comm = $em->getRepository('AppBundle:Commentaires')->find($id);

            if (!$comm) {
                throw $this->createNotFoundException(
                    'Aucun com trouvé pour cet id : '.$id
                );
            }

            if( $request->getMethod() == 'POST' ) {

                $idCafe=$request->request->get('idCafe');
                $date=$request->request->get('date');
                $texte=$request->request->get('texte');
                $etoile=$request->request->get('etoile');
                $auteur=$request->request->get('auteur');



                $comm->setIdCafe($idCafe);
                $comm->setAuteur($auteur);
                $comm->setDate($date);
                $comm->setTexte($texte);
                $comm->setEtoile($etoile);

                $em->flush();

                return DefaultController::createAction($idCafe);

            }
        }
        else {
            throw new AccessDeniedException();
        }
    }
    
     /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('default/login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }
    //
}

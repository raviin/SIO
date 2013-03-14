<?php
    
namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\InscriptionType;
use Lam\MdlBundle\Entity\Formation;

class FormController extends Controller
{
    public function ajoutAction()
    {
        $uneFormation = new Formation();
        $request = $this->getRequest();
        $form = $this->createForm(new InscriptionType(), $uneFormation);
        $mess = "";
        
        if ($request->getMethod() == "GET")
        {
            $form->bindRequest($request);
            
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($uneFormation);
                $em->flush();
                $mess = "La nouvelle formation a bien été ajoutée.";
                
                $form = $this->createForm(new InscriptionType(), new Formation()); // Initialisation
                // return $this->redirect($this->generateUrl("route", array())); // For redirection
            }
        }
        
        return $this->container->get("templating")->renderResponse
        (
             "LamMdlBundle:Inscription:inscription.html.twig",
             array
             (
                 "form" => $form->createView(),
                 "message" => $mess                    
             )
         );
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Registration;
use AppBundle\Form\Type\RegistrationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller {
	
	/**
	 * @Route("/registration", name="registration")
	 */
	public function registrationAction(Request $request) {
		$registration = new Registration ();
		
		$form = $this->createForm ( RegistrationType::class, $registration );
		
		$form->handleRequest ( $request );
		
		if ($form->isSubmitted () && $form->isValid ()) {
			$em = $this->getDoctrine ()->getManager ();
			$em->persist ( $registration );
			$em->flush ();
			
			return $this->redirectToRoute ( 'registration_success' );
		}
		
		return $this->render ( 'default/registration.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	
	/**
	 * @Route("/registration_success", name="registration_success")
	 */
	public function registrationSuccess() {
		return $this->render ( 'default/registration_success.html.twig' );
	}
}
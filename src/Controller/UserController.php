<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\LoginFormAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use App\Form\UserRegistrationForm;

class UserController extends AbstractController
{
    
    private $authenticator;
    private $guardHandler;
    public function __construct(LoginFormAuthenticator $authenticator, GuardAuthenticatorHandler $guardHandler) {
        $this->authenticator = $authenticator;
        $this->guardHandler = $guardHandler;
    }
     /**
   * @Route("/register", name="user_register")
   */
  public function register(Request $request, UserPasswordEncoderInterface $encoder) {
    $user_form = new UserRegistrationForm();
    $form = $this->createForm(UserRegistrationForm::class);

    $form->handleRequest($request);
    //if ($form->isValid() ) {
     if ($form->isSubmitted() && $form->isValid()) {
            // Values of the User object shared by FormerStudents and Employeers
      $user_form = $form->getData();

      // Save access values in session
      $session = $request->getSession();
      $session->set('username', $user_form->getUsername());
      $session->set('email', $user_form->getEmail());

      $plainPassword = $user_form->getPassword();
      $encoded = $encoder->encodePassword($user_form, $plainPassword);
      $session->set('password', $encoded);

     
         return $this->guardHandler->authenticateUserAndHandleSuccess(
             $user_form,
             $request,
             $this->authenticator,
             'teclado'
         );
    }
    return $this->render('user/register.html.twig', [
      'form' => $form->createView(),
    ]);
  }
}

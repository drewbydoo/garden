<?php

namespace App\Controller;

use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class SecurityController
 * @package App\Controller
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     * @Template()
     * @param AuthenticationUtils $authenticationUtils
     * @return array
     */
    public function login(AuthenticationUtils $authenticationUtils): array
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(UserType::class);

        return [
            'last_username' => $lastUsername,
            'error' => $error,
            'form' => $form->createView(),
        ];
    }
}

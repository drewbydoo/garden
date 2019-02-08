<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class DefaultController
 *
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function homeAction()
    {
        return [];
    }
}

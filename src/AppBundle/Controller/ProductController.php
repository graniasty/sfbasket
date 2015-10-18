<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProductController extends Controller
{
    /**
     * @Route("/list")
     * @Template()
     */
    public function listAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/clearBasket")
     * @Template()
     */
    public function clearBasketAction()
    {
        return array(
                // ...
            );    }

}

<?php

namespace NewParadyme\MongoODMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/mongodb/sample")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}

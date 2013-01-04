<?php

namespace MyBiz\Mobile\AdminBundle\Controller\Setup;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 1/4/13
 * Time: 2:34 PM
 */
class SetupController extends Controller
{
    /**
     * @Route("/index", name="_setup_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Setup:setup.index.html.twig');
    }
}

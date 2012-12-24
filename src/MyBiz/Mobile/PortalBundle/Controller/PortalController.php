<?php

namespace MyBiz\Mobile\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 11/12/12
 * Time: 19:39
 */
class PortalController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortalBundle:Portal:front.html.twig');
    }
}

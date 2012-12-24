<?php

namespace MyBiz\Mobile\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 11/12/12
 * Time: 19:39
 */
class IndexController extends Controller
{
    /**
     * @Route("/index", name="_admin_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle::admin.index.html.twig');
    }

    /**
     * @Route("/contacts/index", name="_contacts_index")
     */
    public function indexContactsAction()
    {
        return $this->render('AdminBundle:Contacts:contacts.index.html.twig');
    }
}

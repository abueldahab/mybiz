<?php

namespace MyBiz\Mobile\AdminBundle\Controller\Contacts;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 11/12/12
 * Time: 19:39
 */
abstract class AbstractContactController extends Controller
{
    public abstract function indexAction();

    public abstract function searchAction();

    public abstract function goToAddContactAction();

    public abstract function addContactAction();

    public abstract function goToContactDetailsAction();

    public abstract function deleteContactAction();

    public abstract function goToModifyContactAction();

    public abstract function modifyContactAction();
}

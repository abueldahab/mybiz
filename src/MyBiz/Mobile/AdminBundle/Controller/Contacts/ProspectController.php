<?php

namespace MyBiz\Mobile\AdminBundle\Controller\Contacts;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyBiz\Engine\CommonBundle\Constants\IndividualTitle;
use MyBiz\Engine\CommonBundle\Constants\PersonType;
use MyBiz\Engine\CommonBundle\Constants\CompanyLegalForm;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 12/12/12
 * Time: 22:25
 */
class ProspectController extends AbstractContactController
{
    /**
     * @Route("/index", name="_prospects_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Contacts:prospects.index.html.twig');
    }

    /**
     * @Route("/search", name="_prospects_search")
     */
    public function searchAction()
    {
        return $this->render('AdminBundle:Contacts:prospects.index.html.twig');
    }

    /**
     * @Route("/goToAdd", name="_prospects_goto_add")
     */
    public function goToAddContactAction()
    {
        return $this->render('AdminBundle:Contacts:prospects.add.html.twig',
            array(  'personTypes' => PersonType::getArray(),
                    'titles' => IndividualTitle::getArray(),
                    'legalForms' => CompanyLegalForm::getArray(),
            )
        );
    }

    /**
     * @Route("/add", name="_prospects_add")
     */
    public function addContactAction()
    {
        // TODO: Implement addContactAction() method.
    }

    public function deleteContactAction()
    {
        // TODO: Implement deleteContactAction() method.
    }

    public function modifyContactAction()
    {
        // TODO: Implement modifyContactAction() method.
    }

    public function goToContactDetailsAction()
    {
        // TODO: Implement screenContactDetailsAction() method.
    }

    public function goToModifyContactAction()
    {
        // TODO: Implement screenModifyContactAction() method.
    }
}

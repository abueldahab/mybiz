<?php

namespace MyBiz\Engine\Contact\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 14/12/12
 * Time: 17:42
 *
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
abstract class AbstractContact extends AbstractEntity
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $contactNbr;

    /**
     * @ORM\Column(type="string")
     */
    private $contactType;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

}

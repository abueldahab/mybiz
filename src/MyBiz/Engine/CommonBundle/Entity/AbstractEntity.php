<?php
/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 22/12/12
 * Time: 15:13
 *
 * @MappedSuperclass
 */
abstract class AbstractEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdDatetime;

    /**
     * @ORM\Column(type="string")
     */
    private $createdByUser;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastModifiedDatetime;

    /**
     * @ORM\Column(type="string")
     */
    private $lastModifiedByUser;
}

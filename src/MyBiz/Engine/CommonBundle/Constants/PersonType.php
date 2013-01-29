<?php

namespace MyBiz\Engine\CommonBundle\Constants;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 1/15/13
 * Time: 2:24 PM
 */
class PersonType
{
    private static $personTypes = array(
        'INDIVIDUAL' => 1,
        'COMPANY' => 2,
    );

    public static function getArray() {
        return self::$personTypes;
    }

    public static function getValueFor($key) {
        return self::$personTypes[$key];
    }
}

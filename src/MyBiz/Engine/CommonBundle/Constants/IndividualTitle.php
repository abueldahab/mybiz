<?php

namespace MyBiz\Engine\CommonBundle\Constants;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 1/11/13
 * Time: 9:49 AM
 */
class IndividualTitle
{
    private static $titles = array(
        'MR' => 1,
        'MRS' => 2,
        'MISS' => 3,
    );

    public static function getArray() {
        return self::$titles;
    }

    public static function getValueFor($key) {
        return self::$titles[$key];
    }
}

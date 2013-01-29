<?php

namespace MyBiz\Engine\CommonBundle\Constants;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 1/16/13
 * Time: 11:24 AM
 */
class ProductType
{
    private static $productTypes = array(
        'ARTICLE' => 1,
        'SERVICE' => 2,
    );

    public static function getArray() {
        return self::$productTypes;
    }

    public static function getValueFor($key) {
        return self::$productTypes[$key];
    }
}

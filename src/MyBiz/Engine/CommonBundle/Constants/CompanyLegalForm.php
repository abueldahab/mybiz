<?php

namespace MyBiz\Engine\CommonBundle\Constants;

/**
 * User: Noël Wuyts <noel.wuyts@mybiz.be>
 * Date: 1/11/13
 * Time: 9:53 AM
 */
class CompanyLegalForm
{
    private static $legalForms = array(
        'EENMANSZAAK' => 1,
        'BVBA' => 2,
        'NV' => 3,
    );

    public static function getArray() {
        return self::$legalForms;
    }

    public static function getValueFor($key) {
        return self::$legalForms[$key];
    }
}

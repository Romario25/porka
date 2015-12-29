<?php
namespace app\components;
use DateTime;

/**
 * Created by PhpStorm.
 * User: ataman
 * Date: 29.12.15
 * Time: 19:37
 */
class MyHelper
{
    public static function isClassNew($currentDate){
        return (date_diff(new DateTime(), new DateTime($currentDate))->days < 7);
    }
}
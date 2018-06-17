<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 6/9/18
 * Time: 8:41 PM
 */

namespace Faktura\Calculations\Calculator;


class CalculatorFactory
{
    public static function build()
    {
        require_once __DIR__ . '/../../bootstrap.php';

        $config = require_once FAKTURA_CALCULATIONS_ROOT_PATH . '/config/faktura-calculations.php';

        return new Calculator($config, new Tax);
    }
}
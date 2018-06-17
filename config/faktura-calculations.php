<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 6/9/18
 * Time: 7:56 PM
 */

return [
    'percentage'    => (int) (getenv('FAKTURA_DEFAULT_TAX_PERCENTAGE')  ? getenv('FAKTURA_DEFAULT_TAX_PERCENTAGE') : 22),
    'precision'     => (int) 2,
];
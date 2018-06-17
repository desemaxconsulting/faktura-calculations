<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 6/17/18
 * Time: 2:11 PM
 */
namespace Faktura\Calculations\Calculator;

interface TaxInterface
{
    /**
     * Calculates applicable taxation.
     *
     * @param $price
     * @param null $percentage
     * @return float
     */
    public function calculate($price, $percentage);

    /**
     * Applies taxation to a given price.
     *
     * @param $price
     * @param null $percentage
     * @return float
     */
    public function apply($price, $percentage);
}
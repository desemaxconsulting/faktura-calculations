<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 6/9/18
 * Time: 8:24 PM
 */

namespace Faktura\Calculations\Calculator;

// @todo
// apply all tax localization  here
class Tax implements TaxInterface
{
    protected $defaultPercentage = 22;

    /**
     * Calculates applicable taxation.
     *
     * @param $price
     * @param null $percentage
     * @return float
     */
    public function calculate($price, $percentage = null)
    {
        if (empty($percentage)) {
            $percentage = $this->defaultPercentage;
        }

        if (! is_integer($percentage)) {
            throw new \InvalidArgumentException("Invalid percentage");
        }

        return (float) ($price * ($percentage / 100));
    }

    /**
     * Applies taxation to a given price.
     *
     * @param $price
     * @param null $percentage
     * @return float
     */
    public function apply($price, $percentage = null)
    {
        return (float) ($price + $this->calculate($price, $percentage));
    }

}
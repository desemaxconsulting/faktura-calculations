<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 6/9/18
 * Time: 8:23 PM
 */

namespace Faktura\Calculations\Calculator;


class Calculator
{
    protected $config;

    protected $tax;

    /**
     * Calculator constructor.
     *
     * @param $config
     */
    public function __construct($config, TaxInterface $tax)
    {
        $this->config = $config;
        $this->tax = $tax;
    }

    /**
     * Returns configuration.
     *
     * @return mixed
     */
    public function config()
    {
        return $this->config;
    }

    /**
     * Defines taxation to a given price.
     *
     * @param $price
     * @return float
     */
    public function taxes($price)
    {
        return $this->round(
            $this->tax->calculate($price, $this->config['percentage'])
        );
    }

    /**
     * Current used taxation.
     *
     * @return int
     */
    public function appliedTaxation()
    {
        return (int) $this->config['percentage'];
    }

    /**
     * Total pricing after taxation.
     *
     * @param $price
     * @return float
     */
    public function tax($price)
    {
        return $this->round($this->tax->apply($price));
    }

    /**
     * Round up a given value.
     *
     * @param float $value
     * @return string
     */
    protected function round(float $value)
    {
        $precision = (int) $this->config['precision'];

        return bcadd($value, 0, $precision);
    }
}
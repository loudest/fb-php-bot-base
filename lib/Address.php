<?php

/**
 * Class Address
 * 
 * @package slimtrader\Messages
 */
class Address
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * Address constructor.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get Data
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
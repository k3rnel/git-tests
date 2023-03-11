<?php

class Cart
{
    private $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function __invoke()
    {
        $arr = array();

        foreach($this->products as $key => $product)
        {
            $arr[$key] = $product->id;
        }
        return $arr;
    }
}
<?php

class Store
{
    protected $values = [];

    public function __call($method, $arguments)
    {
        $this->values[] = $method;
        return $this;
    }

    public function __toString()
    {
        return implode(' ', $this->values);
    }
}

$store = new Store;
$store->foo()->bar()->hey()->ho();
echo $store; // foo bar hey ho

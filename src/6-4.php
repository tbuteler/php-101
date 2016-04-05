<?php

class Store
{
    protected $values = [];

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }

    public function __get($key)
    {
        return isset($this->values[$key]) ? $this->values[$key] : null;
    }
}

$store = new Store;
$store->foo = 'bar';
echo $store->foo; // bar
echo $store->hey; // null

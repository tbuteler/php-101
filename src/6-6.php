<?php

trait Random
{
    public function random()
    {
        return array_rand(range(1,999));
    }
}

class Lottery
{
    use Random;
}

$lottery = new Lottery;
echo $lottery->random(); // 1-999

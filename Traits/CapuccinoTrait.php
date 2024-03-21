<?php

trait CapuccinoTrait
{
    public function makeCapuccino()
    {
        echo static::class . ' is making capuccino.' . PHP_EOL;
    }
}
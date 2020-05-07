<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{

    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function area() : float
    {
       return pi() * ($this->radius * $this->radius);
    }

}
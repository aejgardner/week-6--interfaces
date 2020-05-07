<?php

namespace App\Shapes;

class Square implements ShapeInterface
{

    private $sideLength;

    public function __construct(int $length)
    {
        $this->sideLength = $length;
    }

    public function area() : float
    {
        return $this->sideLength * $this->sideLength;
    }

}
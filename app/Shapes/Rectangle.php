<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{

    private $width;
    private $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() : float
    {
        return $this->width * $this->height;
    }

}
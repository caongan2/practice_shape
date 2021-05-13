<?php


class Cylinder extends Circle
{
    public int $height;

    public function __construct(string $name, float|int $radius, int$height)
    {
        parent::__construct($name, $radius);
        $this->height= $height;
    }

    public function  calculateAreaCylinder(): int|float
    {
        return parent::calculateARea() * 2 + parent::calculatePerameter() * $this->height;
    }

    public function calculateVolume(): int|float
    {
        return parent::calculateARea() * $this->height;
    }
}
<?php


class Rectangle extends Shape
{
    public int $width;
    public int $height;

    public function __construct(string $name,
                                int $width,
                                int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateAre(): int|float
    {
        return $this->width * $this->height;
    }

    public function calculatePerameter(): int|float
    {
        return ($this->width + $this->height) * 2;
    }
}
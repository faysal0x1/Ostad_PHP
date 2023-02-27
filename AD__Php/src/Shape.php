<?php

namespace Faysal;

class Shape
{
    public function __construct(protected string $color)
    {
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

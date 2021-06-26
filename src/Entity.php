<?php

namespace Movable;
class Entity implements Movable
{
    private float $x;
    private float $y;
    private float $z;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->z = 0;
    }

    public function PrintPosition()
    {
        echo $this->x ." " . $this->y . " " . $this->z . PHP_EOL;
    }

    public function SetPosition($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

}

?>

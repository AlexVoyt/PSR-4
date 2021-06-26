<?php

namespace Movable;
class ChaoticEntity implements Movable
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
        $this->x = rand(-10, 10)*$x;
        $this->y = rand(-10, 10)*$y;
        $this->z = rand(-10, 10)*$z;
    }

}

?>


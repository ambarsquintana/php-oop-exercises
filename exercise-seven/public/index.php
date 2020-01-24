<?php 

require '../vendor/autoload.php';


trait CanShootArrow
{
    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
    }
}

trait CanRide
{
    public function ride()
    {
        echo "<p>Cabalgó</p>";
    }
}

///////////////////////////////////////////

class Knight
{
    use CanRide;
}

class Archer
{
    use CanShootArrow;

    public function walk()
    {
        echo "<p>Caminó</p>";
    }
}

class MountedArcher extends Archer
{
    use CanShootArrow, CanRide;
}

///////////////////////////////////////////

$archer = new Archer();
$archer->shootArrow();

$knight = new Knight();
$knight->ride();

$mountedArcher = new MountedArcher();
$mountedArcher->shootArrow();
$mountedArcher->ride();
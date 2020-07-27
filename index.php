<?php
declare(strict_types=1);
/*
$a = "b";
$b = "c";

$c = fn ($hello) => "hello from closure ".$hello;
$data ??= "sucka blyat";
// echo $$a;

echo $data;
// echo $$b("blyat");
*/

abstract class Shape 
{
    private int $x;
    private int $y;

    function __construct(int $x,int $y) 
    {
        $this->x = $x;
        $this->y = $y;
    }

    abstract protected function display() :string;
    public function __toString() :string {
        return $this->display();
    }

    protected function getX() :int 
    {
        return $this->x;
    }
    protected function getY() :int 
    {
        return $this->y;
    }

}

class Box extends Shape 
{
    public function display() :string
    {
        return (
        "x: ".
            $this->getX()
        ."\n".
        "y: ".
            $this->getY()
        );
    }
}

class Square extends Shape
{
    function __construct(int $a) 
    {
        parent::__construct($a,$a);
    }

    public function display() :string
    {
        return "X: ". $this->getX();
    }
}

$hello = function() {
    return "hello there:".$this;
};
$g = new Box(15,12);
$z = new Square(5);

$cg = $hello->bindTo($g);

$rectangle = new class(12,13) extends Shape {
    public function display() :string { 
        return "hello";
        }
    };

// echo $rectangle;
echo $cg();
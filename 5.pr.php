<?php

class Clothing_for_women
{
    private $name;
    private $price;
    private $size;

    public function __construct($name, $price, $size)
    {
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }

    public function __toString()
    {
        return __CLASS__ . ' name: ' . $this->name . '; price: ' . $this->price . '; size: ' . $this->size . PHP_EOL;
    }
}

class Dresses extends Clothing_for_women
{
    private $style;
    private $length;

    public function __construct($name, $price, $size)
    {
        parent::__construct($name, $price, $size);
    }

    public function setStyle ($s)
    {
        $this->style = $s;
    }

    public function setLength($l)
    {
        $this->length = $l;
    }

    public function __toString()
    {
        $parentToString = parent::__toString();

        return $parentToString . __CLASS__ . ' style: ' . $this->style . '; length: ' . $this->length . PHP_EOL;
    }
}

class Shirts extends Clothing_for_women
{
    public $sleeves;
    public $color;
    public $fabric;


    public function __construct($name, $price, $size)
    {
        parent::__construct($name, $price, $size);
    }

    public function __toString()
    {
        $parentToString = parent::__toString();

        return $parentToString . __CLASS__ . ' sleeves: ' . $this->sleeves . '; color: ' . $this->color . '; fabric: ' . $this->fabric . PHP_EOL;
    }
}

$dress1 = new Dresses('Платье в горошек', '790 грн', 42);
$dress1->setStyle('Повседневное платье');
$dress1->setLength('Middle');

$shirt1 = new Shirts ('Рубашка для офиса', '545 грн', 44);
$shirt1->sleeves = 'Три четверти';
$shirt1->color = 'Голубой';
$shirt1->fabric = 'Хлопок';

echo '<pre>' . $dress1 . '</pre>';
echo '<pre>' . $shirt1 .'</pre>';
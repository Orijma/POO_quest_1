<?php

class Bicycle
{
    private string $color;

    private int $speed;
    
    private int $nbSeats = 1;

    private int $nbWheels = 2;

    public function  _construct($color)
    {
        $this->color = $color;


    }


    public function getColor(): String{
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }



    public function forward(): String
    {
        $this->speed=15;
        return "GO !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->speed > 0) {
            $this->speed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }



}



?>
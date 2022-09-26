<?php
namespace App\Service\Electrodomesticos;

abstract class Electrodomestico 
{   
    private $precio = 1001 ;
    private $color;
    private $consumo;
    private $peso;

      


    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of consumo
     */ 
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     *
     * @return  self
     */ 
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;

        return $this;
    }

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }
}
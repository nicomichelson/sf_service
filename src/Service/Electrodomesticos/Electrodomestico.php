<?php
namespace App\Service\Electrodomesticos;

abstract class Electrodomestico 
{   
    private $precio  ;
    private $color ;
    private $consumo;
    private $peso;

    public function __contruct(
        int $precio = 1000, 
        string $color = "blanco",
        string $consumo = "F",
        int $peso = 5
    )
    {
        $this->precio = $precio;
        $this->color = $color;
        $this->consumo = $consumo;
        $this->peso = $peso;
    }

    public function __toString()
    {
        return  $this->precio ."<br>". 
        $this->color ."<br>".
        $this->consumo ."<br>".
        $this->peso;
    }
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
        $this->color = $this->comprobarColor($color);

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
        $this->consumo = $this->comprobarConsumoEnergetico($consumo);

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

    private function comprobarConsumoEnergetico(string $letra):string
    {
        $letras = ["A","B","C","D","E","F"];

        
        if(in_array(strtoupper($letra), $letras))
        {
            return  strtoupper($letra);
        }  

        return "F";
    }

    private function comprobarColor(string $color): string
    {
        $colores = [ "blanco", "negro", "rojo", "azul", "gris"];

        if(in_array(strtolower($color), $colores))
        {
            return strtolower($color);
        }

        return "blanco";
    }

    private function precioFinal(): int
    {

    }
}
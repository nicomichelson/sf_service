<?php
namespace App\Service\Electrodomesticos;

class Lavarropas extends Electrodomestico
{
    
    public function __construct()
    {
        // $this->electrodomestico = parent::class;
    }

    public function mostrar()
    {
        return $this->getPrecio();
    }


}
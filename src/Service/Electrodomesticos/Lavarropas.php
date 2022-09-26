<?php
namespace App\Service\Electrodomesticos;

class Lavarropas extends Electrodomestico
{
    
    public function __construct()
    {
        parent::__contruct();
    }

    public function mostrar()
    {
        return $this->getPrecio();
    }


}
<?php
namespace App\Service\Electrodomesticos;

class Lavarropas extends Electrodomestico
{
   
    private $carga;

    public function __construct(int $carga)
    {
        parent::__contruct();

        $this->carga = $carga;
        
        
    }

    public function getCarga()
    {
        return $this->carga;
    }

   

    public function mostrar()
    {
        return $this->getPrecio();
    }


}
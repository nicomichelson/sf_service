<?php

namespace App\Service;

class PasswordGeneratorService
{
    public function __construct(int $longitud)
    {
        $this->longitud = $longitud;
        $this->password = $this->generarPassword();
    }
    
    public function __toString()
    {
        return 'hola desde el serviciop de password';
    }
    
    public function saludar()
    {
        return 'desde el generador de password'. $this->longitud;
    }

    public function getPassword()
    {
        return $this->password;
    }

    private function generarPassword()
    {
            $password="";
            for ($i=0; $i < $this->longitud ; $i++) { 
                $eleccion = rand(1,3);

                if($eleccion == 1){
                    //elijo una minuscula
                    $minuscula = chr(rand(97,123));
                    $password .= $minuscula;

                }elseif ($eleccion == 2) {
                    $mayuscula = chr(rand(65,91));
                    $password .= $mayuscula;
                }else {
                    $numero = chr(rand(48,58));
                    $password .= $numero;
                }
            }
            return $password;
    }
}
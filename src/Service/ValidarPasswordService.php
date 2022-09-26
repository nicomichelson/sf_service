<?php
namespace App\Service;

class ValidarPasswordService
{
    public static function validar($password)
    {
        //devuelve un booleano si es fuerte o no, para que sea 
            //fuerte debe tener mas de 2 mayúsculas, mas de 1 minúscula y mas de 5 números.
            // if(preg_match(self::PASS_VALIDAR, $password)){
            //     return true;
            // }
            // return false;

            $cuenta_numero = 0;
            $cuenta_mayuscula = 0;
            $cuenta_minuscula = 0;

            //convertir array
            $array = str_split($password);
            
            foreach ($array as $key => $value) {
                if(ctype_upper($value)){
                  $cuenta_mayuscula += 1;  
                }elseif (ctype_lower($value)) {
                    $cuenta_minuscula += 1;
                }else{
                    $cuenta_numero +=1;
                }
            }

            if($cuenta_mayuscula>1 && $cuenta_minuscula > 0 && $cuenta_numero > 4 ){
                return true;
            }else{
                return false;
            }
    }
}
<?php

namespace App\Service;

class CheckerService
{
   private $adminEmail;

   public function __construct(string $adminEmail)
   {
        $this->adminEmail = $adminEmail;
   }

   public function saludar()
   {
        return $this->adminEmail; 
   }

   public static function isValid($val = 'B')
   {
        return  ($val == 'A') ? true : false; 
   }
}


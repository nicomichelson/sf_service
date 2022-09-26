<?php

namespace App\Controller;

// use App\Service\CheckerService;

use App\Service\CheckerService;
use App\Service\Electrodomesticos\Lavarropas;
use App\Service\PasswordGeneratorService;
use App\Service\ValidarPasswordService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    public function __construct(CheckerService $checker, 
        PasswordGeneratorService $pass,
        ValidarPasswordService $validarPassword
    )
    {
        
        $this->checker = $checker;
        $this->pass = $pass;
        // $this->$validarPassword = $validarPassword;        
    }

    
    
    /**
     * @Route("/main", name="app_main")
     */
    public function index(ValidarPasswordService $validarPassword,
        Lavarropas $lavarropas
    ): Response
    {
        
        // dump($this->$checker); die;
        
        $arr=['A', 'A', 'B', 'A'];
        $html = ''; 
        
        foreach ($arr as $val) {
            $html.=  ' <br> IS VALID: '. json_encode($this->checker::isValid($val)) . "<br> ";      
        }

        // dump($this->checker->saludar(), $this->checker::isValid('A')); die;
        // dump($this->pass->saludar()); die; 
        $pass = $this->pass;
        $valido = $validarPassword::validar($pass->getPassword());
        
        dump($lavarropas->mostrar()); die;
        
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'html' => $html,
            // 'saludar' => $this->checker->saludar(),
            'saludar' => $this->pass->saludar(),
            'valido' => json_encode($valido),
            'password' => $pass->getPassword()
        ]);

        
    }
}

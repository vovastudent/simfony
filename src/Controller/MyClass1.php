<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MyClass1 extends AbstractController
{

    public function index(): Response
    {
        return $this->json(["massege"=>"<h1>Hello my class 1</h1>"]);

    }

}
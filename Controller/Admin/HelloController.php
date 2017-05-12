<?php

namespace TrainingBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HelloController extends Controller
{
    public function helloAction()
    {
        return $this->render('TrainingBundle:Hello:hello.html.twig', array());
    }
}
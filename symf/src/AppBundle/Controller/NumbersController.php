<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class NumbersController extends Controller
{
    /**
     * @Route("/api/multiplication", name="get_numbers_multiplication")
     */
    public function multiplicationAction(Request $request)
    {
        $data = $request->request->all();
        if (isset($data['numbera']) 
            && is_numeric($data['numbera']) 
            && isset($data['numberb']) 
            && is_numeric($data['numberb']) 
        ) {
            return new JsonResponse(array(
                'result' => $data['numbera'] * $data['numberb'],
            ));
        }else{
            return new JsonResponse(array(
                'error' => 'Wrong data passed',
            ));
        }
    }
}

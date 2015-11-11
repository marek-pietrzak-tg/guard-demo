<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
     * @Route("/api/hello-world", name="hello_world", defaults={"_format": "json"})
     */
    public function getAction()
    {
        return new JsonResponse("Hello World!");
    }
}

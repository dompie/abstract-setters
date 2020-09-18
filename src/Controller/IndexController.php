<?php
/*
 * Author: Dominik Piekarski <code@dompie.de>
 * Created at: 2020/09/18
 */
declare(strict_types=1);

namespace App\Controller;

use App\RealTest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{

    /**
     * @Route("/")
     */
    public function index(RealTest $service)
    {
        try {
            $out = $service->example();
        } catch (\Throwable $t) {
            $out = 'It failed';
        }

        return new Response($out);
    }
}

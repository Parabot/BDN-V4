<?php
/**
 * @author JKetelaar
 */

namespace App\Controller\Rest;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class HomeController
 * @package App\Controller\Rest
 *
 * @Rest\Route("/api")
 */
class HomeController extends AbstractFOSRestController
{
    /**
     * @Get("/example", name="example")
     */
    public function index()
    {
        $view = $this->view(['example' => ['response']]);

        return $this->handleView($view);
    }
}

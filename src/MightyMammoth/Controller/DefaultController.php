<?php declare(strict_types = 1);

namespace MightyMammoth\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 *
 * @package MightyMammoth\Controller
 */
class DefaultController
{
    /**
     * @return Response
     */
    public function indexAction() : Response
    {
        return new Response('<html><body>Hello!</body></html>');
    }
}

<?php

namespace MightyMammoth\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 *
 * @package MightyMammoth\Controller
 */
class DefaultController
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return new Response('<html><body>Hello!</body></html>');
    }
}

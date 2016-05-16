<?php declare(strict_types = 1);

namespace MightyMammoth\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;

/**
 * Class DefaultController
 *
 * @package MightyMammoth\Controller
 */
class DefaultController
{
    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * DefaultController constructor.
     *
     * @param EngineInterface $templating
     */
    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
     * @return Response
     */
    public function indexAction() : Response
    {
        return new Response($this->templating->render('default/index.html.twig'));
    }
}

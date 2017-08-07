<?php

use MaxBeckers\GoogleActions\Helper\ResponseHelper;
use MaxBeckers\GoogleActions\Request\Request;
use MaxBeckers\GoogleActions\RequestHandler\AbstractRequestHandler;
use MaxBeckers\GoogleActions\Response\Response;

/**
 * Just a simple example request handler.
 *
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class SimpleRequestHandler extends AbstractRequestHandler
{
    /**
     * @var ResponseHelper
     */
    private $responseHelper;

    /**
     * {@inheritdoc}
     */
    public function supportsRequest(Request $request): bool
    {
        // support all  requests, should not be done.
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(Request $request): Response
    {
        return $this->responseHelper->respond('Success :)');
    }
}
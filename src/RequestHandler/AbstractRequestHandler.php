<?php

namespace MaxBeckers\GoogleActions\RequestHandler;

use MaxBeckers\GoogleActions\Request\Request;
use MaxBeckers\GoogleActions\Response\Response;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
abstract class AbstractRequestHandler
{
    /**
     * Check if the request handler can handle given request.
     *
     * @param Request $request
     *
     * @return bool
     */
    public abstract function supportsRequest(Request $request): bool;

    /**
     * Handle the given request end return a response object.
     *
     * @param Request $request
     *
     * @return Response
     */
    public abstract function handleRequest(Request $request): Response;
}

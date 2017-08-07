<?php

namespace MaxBeckers\GoogleActions\RequestHandler;

use MaxBeckers\GoogleActions\Exception\MissingRequestHandlerException;
use MaxBeckers\GoogleActions\Request\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class RequestHandlerRegistry
{
    /**
     * @var AbstractRequestHandler[]
     */
    private $requestHandlers = [];

    /**
     * @param Request $request
     *
     * @throws MissingRequestHandlerException
     *
     * @return AbstractRequestHandler
     */
    public function getSupportingHandler(Request $request): AbstractRequestHandler
    {
        foreach ($this->requestHandlers as $requestHandler) {
            if ($requestHandler->supportsRequest($request)) {
                return $requestHandler;
            }
        }

        throw new MissingRequestHandlerException();
    }

    /**
     * @param AbstractRequestHandler $handler
     */
    public function addHandler(AbstractRequestHandler $handler)
    {
        $this->requestHandlers[] = $handler;
    }
}

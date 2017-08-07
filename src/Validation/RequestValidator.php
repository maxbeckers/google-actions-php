<?php

namespace MaxBeckers\GoogleActions\Validation;

use MaxBeckers\GoogleActions\Exception\InvalidRequestException;
use MaxBeckers\GoogleActions\Request\Request;

/**
 * @author Maximilian Beckers <beckers.maximilian@gmail.com>
 */
class RequestValidator
{
    /**
     * Validate request data.
     *
     * @throws InvalidRequestException
     *
     * @param Request $request
     */
    public function validate(Request $request)
    {
        // Todo validate request, throw error on invalid
    }
}

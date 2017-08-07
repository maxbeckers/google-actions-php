<?php

use MaxBeckers\GoogleActions\Request\Request;
use MaxBeckers\GoogleActions\RequestHandler\RequestHandlerRegistry;
use MaxBeckers\GoogleActions\Validation\RequestValidator;

require '../vendor/autoload.php';
require 'Handlers/SimpleRequestHandler.php';

$requestBody = file_get_contents('php://input');
if ($requestBody) {
    $googleRequest = Request::fromGoogleRequest($requestBody);

    // Request validation
    $validator = new RequestValidator();
    $validator->validate($googleRequest);

    // add handlers to registry
    $mySimpleRequestHandler = new SimpleRequestHandler();
    $requestHandlerRegistry = new RequestHandlerRegistry();
    $requestHandlerRegistry->addHandler($mySimpleRequestHandler);

    $response = $requestHandlerRegistry->getSupportingHandler($googleRequest)->handleRequest($googleRequest);
    // render response
    header('Content-Type: application/json');
    echo json_encode($response);
}

exit();

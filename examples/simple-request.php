<?php

use MaxBeckers\GoogleActions\Request\Request;
use MaxBeckers\GoogleActions\Response\Response;

require '../vendor/autoload.php';

$requestBody = file_get_contents('php://input');
if ($requestBody) {
    $alexaRequest = Request::fromGoogleRequest($requestBody);

    // todo generate response
    $response = new Response();
    // render response
    header('Content-Type: application/json');
    echo json_encode($response);
}

exit();

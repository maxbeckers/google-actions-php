# Google actions php library
This library is a helper for google actions with php.

## Install via composer
Require the package with composer:
```
composer require maxbeckers/google-actions-php
```

## Usage
Handle the request: 
- map request data to request object
- validate request
- handle request data
- create response
- send response

### Map request data to request object
Map needed request headers and request body to `Request`.
```php
use MaxBeckers\GoogleActions\Request\Request;
...
$requestBody  = file_get_contents('php://input');
$googleRequest = Request::fromGoogleRequest($requestBody);
```
### Validate request
The `RequestValidator` will handle the google request validation.
```php
use MaxBeckers\GoogleActions\Validation\RequestValidator;
...
$validator = new RequestValidator();
$validator->validate($googleRequest);
```
### Register request handlers
For different requests it's helpful to create different RequestHandlers.
```php
use MaxBeckers\GoogleActions\RequestHandler\RequestHandlerRegistry;
...
$requestHandlerRegistry = new RequestHandlerRegistry();
$requestHandlerRegistry->addHandler($myRequestHandler);
```
### Use registry to handle request
```php
use MaxBeckers\GoogleActions\RequestHandler\RequestHandlerRegistry;
...
$requestHandler = $requestHandlerRegistry->getSupportingHandler($googleRequest);
$response       = $requestHandler->handleRequest($googleRequest);
```
### Render response
```php
header('Content-Type: application/json');
echo json_encode($response);
exit();
```
### Create a new request handler
The new request handler must extend `AbstractRequestHandler`.
First implement the abstract `supportsRequest`-method.
```php
public function supportsRequest(Request $request): bool
{
    return true; // check request data
}
```
Then implement the `handleRequest`-method. For simple responses there is a `ResponseHelper`.
```php
use MaxBeckers\GoogleActions\Helper\ResponseHelper;
...
/** @var ResponseHelper */
private $responseHelper;
...
public function handleRequest(Request $request): Response
{
    // todo set needed response data
    return $responseHelper->respond('Success :)');
}
```

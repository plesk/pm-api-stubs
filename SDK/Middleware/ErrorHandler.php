<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware;
/**
 * Wraps uncaught exceptions into a JSON response.
 * Sets HTTP response code to the exception's code if it is within 400-499.
 * @since 18.0.41
 */
class ErrorHandler implements \Psr\Http\Server\MiddlewareInterface
{

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

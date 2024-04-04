<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware;
/**
 * Returns 301/308 in case the request was made to plain HTTP.
 * @since 18.0.41
 */
class HttpsRedirect implements \Psr\Http\Server\MiddlewareInterface
{

    /**
     * @param \Psr\Http\Message\ResponseFactoryInterface $factory
     * @param bool $browserRequest Send HTTP 308 in order to preserve POST request in browsers
     */
    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory, bool $browserRequest = false) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

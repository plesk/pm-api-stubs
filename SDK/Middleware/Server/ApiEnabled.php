<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Server;
/**
 * Validates that remote API is allowed on the server.
 * Returns HTTP 403 if remote API is disabled in panel.ini.
 * @since 18.0.41
 */
class ApiEnabled implements \Psr\Http\Server\MiddlewareInterface
{

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

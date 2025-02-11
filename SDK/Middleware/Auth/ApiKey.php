<?php
// Copyright 1999-2025. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Auth;
/**
 * Initializes Plesk session from the "X-API-Key" header.
 * @see \Plesk\SDK\Middleware\Access\Session To enforce that session was opened by this middleware.
 * @since 18.0.41
 */
class ApiKey implements \Psr\Http\Server\MiddlewareInterface
{

    public function __construct(?int $loginDelay = null) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

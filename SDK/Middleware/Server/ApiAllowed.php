<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Server;
/**
 * Validates that remote API access is allowed for the remote IP.
 * Returns HTTP 403 if panel.ini defines a list of IP addresses that can access the API and current client IP is not in that list.
 * Returns HTTP 403 if IP Access Restriction Management does not allow current client IP to access Plesk.
 * @since 18.0.41
 */
class ApiAllowed implements \Psr\Http\Server\MiddlewareInterface
{

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

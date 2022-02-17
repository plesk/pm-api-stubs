<?php
// Copyright 1999-2022. Plesk International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Returns HTTP 401 if no session is defined by other means like BasicAuth, or KeyHeaderAuth.
 * @since 18.0.41
 */
class Session implements \Psr\Http\Server\MiddlewareInterface
{

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Server;
/**
 * Validates that Plesk is initialized.
 * Returns HTTP 503 with a JSON object '{ "message": "<...>" }' if Plesk is not initialized yet.
 * @since 18.0.41
 */
class Initialized implements \Psr\Http\Server\MiddlewareInterface
{

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

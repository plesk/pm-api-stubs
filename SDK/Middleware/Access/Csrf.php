<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Validates that request has proper forgery protection token.
 * Must be called only if the request is called within existing Plesk session.
 * Returns HTTP 403 if forgery protection check has failed.
 * @since 18.0.41
 */
class Csrf implements \Psr\Http\Server\MiddlewareInterface
{

    /**
     * @param \Psr\Http\Message\ResponseFactoryInterface $factory
     * @param array $limitMethods Limit token check to the specified HTTP methods (default: [POST, PUT, PATCH, DELETE])
     */
    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory, array $limitMethods = ['POST', 'PUT', 'PATCH', 'DELETE']) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

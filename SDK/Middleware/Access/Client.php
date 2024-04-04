<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Validates that access was performed by specified user or any user that can impersonate as this user.
 * Requires clientId argument to exist in the provided ServerRequestInterface.
 * Returns HTTP 400 if no ID was provided, HTTP 403 if access is denied or HTTP 404 if there is no object with such ID.
 * @since 18.0.41
 */
class Client implements \Psr\Http\Server\MiddlewareInterface
{

    public const REQUEST_ATTR_CLIENT_ID = 'clientId';

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

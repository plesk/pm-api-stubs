<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Validates that access was performed by user that has access to the specified domain.
 * Requires domainId argument to exist in the provided ServerRequestInterface.
 * Returns HTTP 400 if no ID was provided, HTTP 403 if access is denied or HTTP 404 if there is no object with such ID.
 * @since 18.0.41
 */
class Domain implements \Psr\Http\Server\MiddlewareInterface
{

    public const REQUEST_ATTR_DOMAIN_ID = 'domainId';

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

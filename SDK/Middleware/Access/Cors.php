<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Adds cross-origin resource sharing headers as configured server-wide.
 * @since 18.0.41
 */
class Cors implements \Psr\Http\Server\MiddlewareInterface
{

    private const REQUEST_ORIGIN_HEADER = 'Origin';

    private const CORS_CREDENTIALS_HEADER = 'Access-Control-Allow-Credentials';

    private const CORS_EXPOSE_HEADER = 'Access-Control-Expose-Headers';

    private const CORS_HEADERS_HEADER = 'Access-Control-Allow-Headers';

    private const CORS_METHODS_HEADER = 'Access-Control-Allow-Methods';

    private const CORS_ORIGIN_HEADER = 'Access-Control-Allow-Origin';

    /**
     * @param \Psr\Http\Message\ResponseFactoryInterface $factory
     * @param array{origin?: array<string>, methods?: array<string>, headers?: array<string>, credentials?: bool, expose?: array<string>} $options
     * CORS configuration is applied as follows:
     *  origin: Configures the `Access-Control-Allow-Origin` header.
     *    Array with the allowed origins. `null` value dynamically generates header based on the Origin of the request.
     *    If wildcard value is present in the array, `*` will always be returned as the allowed origin.
     *    Default value: null
     *  methods: Configures the `Access-Control-Allow-Methods` header.
     *    Array with the allowed HTTP verbs.
     *    Default value: [GET, HEAD, PUT, PATCH, POST, DELETE]
     *  headers: Configures the `Access-Control-Allow-Headers` header.
     *    Array with the allowed headers.
     *    Default value: [X-Forgery-Protection-Token, Authorization]
     *  credentials: Configures the presence of the `Access-Control-Allow-Credentials` header.
     *    Default value: false
     *  expose: Configures the `Access-Control-Expose-Headers` header.
     *    Array with the headers that should be exposed to the browser client.
     *    Default value: []
     */
    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory, array $options = []) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

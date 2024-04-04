<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Validates that access was performed by user with the specified role.
 * Returns HTTP 403 if current user's role is not in the allowed ones.
 * @since 18.0.41
 */
class UserRole implements \Psr\Http\Server\MiddlewareInterface
{

    /**
     * Plesk administrator
     * @since 18.0.41
     */
    public const ROLE_ADMIN = 'admin';

    /**
     * Additional admin account
     * @since 18.0.41
     */
    public const ROLE_ADMIN_ALIAS = 'admin-alias';

    /**
     * Reseller user
     * @since 18.0.41
     */
    public const ROLE_RESELLER = 'reseller';

    /**
     * Client user
     * @since 18.0.41
     */
    public const ROLE_CLIENT = 'client';

    /**
     * Additional user of the subscription
     * @since 18.0.41
     */
    public const ROLE_SERVICE = 'service';

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory, array $roles = ['admin', 'admin-alias', 'client', 'reseller', 'service']) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}

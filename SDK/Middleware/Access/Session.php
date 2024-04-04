<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Access;
/**
 * Returns HTTP 401 if no session is defined by other means like BasicAuth, or KeyHeaderAuth.
 * Returns HTTP 400 if user cannot be properly authorized by this middleware.
 * @since 18.0.41
 */
class Session implements \Psr\Http\Server\MiddlewareInterface
{

    public const SESSION_USER_LOGIN_ATTRIBUTE = 'api_session_user_login';

    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

    /**
     * Switches behavior in regard to the session origin.
     * Set to `false` to require session to originate from the handled request.
     * Set to `true` to accept sessions that were started within a different request (e.g. by navigating to Plesk and logging in there).
     *
     * @param bool $isAllowed
     * @return $this
     *
     * @since 18.0.50
     */
    public function setExternalSessionAllowed(bool $isAllowed): self { }

}

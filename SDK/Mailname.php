<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK;
/**
 * Mailname wrapper
 *
 * @since 18.0.53
 */
class Mailname
{

    /**
     * Create new mailname wrapper
     * @throws \pm_Exception
     */
    public function __construct(int $id) { }

    /**
     * Retrieve mailname by known id
     * @throws \pm_Exception
     */
    public static function getById(int $id): self { }

    /**
     * Retrieve mailname id
     */
    public function getId(): int { }

    /**
     * Retrieve email address
     */
    public function getEmailAddress(): string { }

    /**
     * Retrieve mailname domain
     * @throws \pm_Exception
     */
    public function getDomain(): \pm_Domain { }

}

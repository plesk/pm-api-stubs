<?php
// Copyright 1999-2023. Plesk International GmbH. All rights reserved.
/**
 * Domain alias wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_DomainAlias
{

    /**
     * Create new domain alias wrapper
     *
     * @param int $domainAliasId
     * @throws pm_Exception
     */
    public function __construct(int $domainAliasId) { }

    /**
     * Retrieve domain aliases for the specified domain
     *
     * @param pm_Domain $domain
     * @throws pm_Exception
     *
     * @return pm_DomainAlias[]
     * @since 18.0.42
     */
    public static function getByDomain(pm_Domain $domain): array { }

    /**
     * Retrieve domain alias ID.
     *
     * @return int
     */
    public function getId(): int { }

    /**
     * Retrieves domain alias name in ASCII format
     *
     * @return string
     * @since 18.0.42
     */
    public function getName(): string { }

    /**
     * Retrieves domain name as it is displayed in UI
     *
     * @return string
     * @since 18.0.42
     */
    public function getDisplayName(): string { }

    /**
     * Shows whether web hosting is enabled on the domain alias
     *
     * @return bool
     * @since 18.0.42
     */
    public function hasServiceWeb(): bool { }

    /**
     * Shows whether DNS service is enabled on the domain alias
     *
     * @return bool
     * @since 18.0.42
     */
    public function hasServiceDns(): bool { }

    /**
     * Shows whether mail service is enabled on the domain alias
     *
     * @return bool
     * @since 18.0.42
     */
    public function hasServiceMail(): bool { }

    /**
     * Shows whether 301 redirect to HTTPS is enabled on the domain alias
     *
     * @return bool
     * @since 18.0.42
     */
    public function hasSeoRedirect(): bool { }

    /**
     * Retrieve domain alias by known id
     *
     * @param int $domainAliasId
     * @throws pm_Exception
     *
     * @return pm_DomainAlias
     */
    public static function getByDomainAliasId(int $domainAliasId): pm_DomainAlias { }

    /**
     * Return DNS zone of domain alias
     *
     * @throws pm_Exception
     *
     * @return pm_Dns_Zone
     */
    public function getDnsZone(): pm_Dns_Zone { }

}

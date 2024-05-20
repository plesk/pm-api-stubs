<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
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
     * Retrieve primary domain of domain alias
     *
     * @return pm_Domain
     * @throws pm_Exception
     * @since 18.0.60
     */
    public function getDomain(): pm_Domain { }

    /**
     * Retrieve property of domain alias
     *
     * @param string $name
     * @return mixed
     * @throws pm_Exception
     * @since 18.0.60
     */
    public function getProperty(string $name): ?mixed { }

    /**
     * Return value of domain alias custom setting by given name
     *
     * @param string $name Setting name
     * @param string|null $default Default value of setting
     * @return string|null
     * @since 18.0.60
     */
    public function getSetting(string $name, string $default = null): ?string { }

    /**
     * Define value of domain alias custom setting
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     * @return void
     * @since 18.0.60
     */
    public function setSetting(string $name, string $value): void { }

    /**
     * Delete all domain alias custom settings
     *
     * @param string $prefix Settings name prefix
     * @return void
     * @since 18.0.60
     */
    public function deleteSettings(string $prefix = ''): void { }

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
     * Retrieve domain alias by display name
     *
     * @param string $domainAliasName
     * @return pm_DomainAlias
     * @throws pm_Exception
     * @since 18.0.60
     */
    public static function getByName(string $domainAliasName): pm_DomainAlias { }

    /**
     * Return DNS zone of domain alias
     *
     * @throws pm_Exception
     *
     * @return pm_Dns_Zone
     */
    public function getDnsZone(): pm_Dns_Zone { }

}

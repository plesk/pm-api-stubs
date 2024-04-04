<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Zone
{

    /**
     * Enable DNS zone.
     */
    public function enable(): void { }

    /**
     * Disable DNS zone.
     */
    public function disable(): void { }

    /**
     * Return true if DNS zone enabled.
     *
     * @return bool
     */
    public function isEnabled(): bool { }

    /**
     * Return true if DNS zone is master.
     *
     * @return bool
     */
    public function isMaster(): bool { }

    /**
     * Return SOA record of DNS Zone.
     *
     * @return pm_Dns_SoaRecord
     */
    public function getSoaRecord(): pm_Dns_SoaRecord { }

    /**
     * Return id of DNS Zone.
     *
     * @return int
     */
    public function getId(): int { }

    /**
     * Return host name of DNS Zone.
     *
     * @return string|null
     */
    public function getName(): ?string { }

    /**
     * Return host display name of DNS Zone.
     *
     * @return string|null
     * @since 18.0.36
     */
    public function getDisplayName(): ?string { }

    /**
     * Return dns records of dns zone.
     *
     * @return []pm_Dns_Record
     */
    public function getRecords(): array { }

    /**
     * Return dns records of dns zone by type.
     *
     * @param string $type
     *
     * @return []pm_Dns_Record
     */
    public function getRecordsByType(string $type): array { }

    /**
     * Return DNS zone by zone ID.
     *
     * @param int $zoneId
     *
     * @throws pm_Exception
     *
     * @return pm_Dns_Zone
     */
    public static function getById(int $zoneId): pm_Dns_Zone { }

    /**
     * Return domain of DNS zone.
     * 
     * @throws pm_Exception
     * @return pm_Domain|null
     */
    public function getDomain(): ?pm_Domain { }

    /**
     * Return domain alias of DNS zone.
     *
     * @throws pm_Exception
     * @return pm_DomainAlias|null
     */
    public function getDomainAlias(): ?pm_DomainAlias { }

}

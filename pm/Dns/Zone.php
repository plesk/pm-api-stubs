<?php
// Copyright 1999-2020. Plesk International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Zone
{

    const STATUS_ENABLED = 'enabled';

    const STATUS_DISABLED = 'disabled';

    const TYPE_MASTER = 'master';

    /**
     * Unique number of Dns zone.
     *
     * @var int
     */
    protected $id;

    /**
     * Host name.
     *
     * @var string
     */
    protected $name;

    /**
     * Type DNS Zone.
     *
     * @var string
     */
    protected $type;

    /**
     * Status DNS Zone, enabled or disabled.
     *
     * @var string
     */
    protected $status;

    /**
     * SOA record of DNS zone.
     *
     * @var pm_Dns_SoaRecord
     */
    protected $soaRecord;

    /**
     * Enable DNS zone.
     */
    public function enable() { }

    /**
     * Disable DNS zone.
     */
    public function disable() { }

    /**
     * Return true if DNS zone enabled.
     *
     * @return bool
     */
    public function isEnabled() { }

    /**
     * Return true if DNS zone is master.
     *
     * @return bool
     */
    public function isMaster() { }

    /**
     * Return SOA record of DNS Zone.
     *
     * @return pm_Dns_SoaRecord
     */
    public function getSoaRecord() { }

    /**
     * Return id of DNS Zone.
     *
     * @return int
     */
    public function getId() { }

    /**
     * Return host name of DNS Zone.
     *
     * @return string|null
     */
    public function getName() { }

    /**
     * Return dns records of dns zone.
     *
     * @return []pm_Dns_Record
     */
    public function getRecords() { }

    /**
     * Return dns records of dns zone by type.
     *
     * @param string $type
     *
     * @return []pm_Dns_Record
     */
    public function getRecordsByType(string $type) { }

    /**
     * Return DNS zone by zone ID.
     *
     * @param int $zoneId
     *
     * @throws pm_Exception
     *
     * @return pm_Dns_Zone
     */
    public static function getById(int $zoneId) { }

    /**
     * Return domain of DNS zone.
     * 
     * @throws pm_Exception
     * @return pm_Domain|null
     */
    public function getDomain() { }

    /**
     * Return domain alias of DNS zone.
     *
     * @throws pm_Exception
     * @return pm_DomainAlias|null
     */
    public function getDomainAlias() { }

}

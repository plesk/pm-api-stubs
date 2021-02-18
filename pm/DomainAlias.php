<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
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
    public function __construct($domainAliasId) { }

    /**
     * Retrieve domain alias ID.
     * 
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve domain alias by known id
     *
     * @param int $domainAliasId
     * @return pm_DomainAlias
     * @throws pm_Exception
     */
    public static function getByDomainAliasId($domainAliasId) { }

    /**
     * Return DNS zone of domain alias
     *
     * @return pm_Dns_Zone
     */
    public function getDnsZone() { }

}

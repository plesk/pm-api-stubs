<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_SoaRecord
{

    /**
     * Return ttl value of SOA record.
     *
     * @return int|null
     */
    public function getTtl() { }

    /**
     * Specifies ttl value of SOA record.
     *
     * @param int $ttl
     *
     * @return pm_Dns_SoaRecord
     */
    public function setTtl(int $ttl) { }

    /**
     * Return refresh value of SOA record.
     *
     * @return int|null
     */
    public function getRefresh() { }

    /**
     * Set refresh value of SOA record.
     *
     * @param int $refresh
     *
     * @return pm_Dns_SoaRecord
     */
    public function setRefresh(int $refresh) { }

    /**
     * Return retry value of SOA record.
     *
     * @return int|null
     */
    public function getRetry() { }

    /**
     * Set retry value of SOA record.
     *
     * @param int $retry
     *
     * @return pm_Dns_SoaRecord
     */
    public function setRetry(int $retry) { }

    /**
     * Return expire value of SOA record.
     *
     * @return int|null
     */
    public function getExpire() { }

    /**
     * Set expire value of SOA record.
     *
     * @param int $expire
     *
     * @return pm_Dns_SoaRecord
     */
    public function setExpire(int $expire) { }

    /**
     * Return minimum value of SOA record.
     *
     * @return int|null
     */
    public function getMinimum() { }

    /**
     * Set minimum value of SOA record.
     *
     * @param int $minimum
     *
     * @return pm_Dns_SoaRecord
     */
    public function setMinimum(int $minimum) { }

    /**
     * Return DNS zone of SOA record.
     *
     * @return pm_Dns_SoaRecord
     */
    public function getZone() { }

    /**
     * Save SOA record;
     */
    public function save() { }

}

<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
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
    public function getTtl(): ?int { }

    /**
     * Specifies ttl value of SOA record.
     *
     * @param int $ttl
     *
     * @return pm_Dns_SoaRecord
     */
    public function setTtl(int $ttl): pm_Dns_SoaRecord { }

    /**
     * Return refresh value of SOA record.
     *
     * @return int|null
     */
    public function getRefresh(): ?int { }

    /**
     * Set refresh value of SOA record.
     *
     * @param int $refresh
     *
     * @return pm_Dns_SoaRecord
     */
    public function setRefresh(int $refresh): pm_Dns_SoaRecord { }

    /**
     * Return retry value of SOA record.
     *
     * @return int|null
     */
    public function getRetry(): ?int { }

    /**
     * Set retry value of SOA record.
     *
     * @param int $retry
     *
     * @return pm_Dns_SoaRecord
     */
    public function setRetry(int $retry): pm_Dns_SoaRecord { }

    /**
     * Return expire value of SOA record.
     *
     * @return int|null
     */
    public function getExpire(): ?int { }

    /**
     * Set expire value of SOA record.
     *
     * @param int $expire
     *
     * @return pm_Dns_SoaRecord
     */
    public function setExpire(int $expire): pm_Dns_SoaRecord { }

    /**
     * Return minimum value of SOA record.
     *
     * @return int|null
     */
    public function getMinimum(): ?int { }

    /**
     * Set minimum value of SOA record.
     *
     * @param int $minimum
     *
     * @return pm_Dns_SoaRecord
     */
    public function setMinimum(int $minimum): pm_Dns_SoaRecord { }

    /**
     * Return DNS zone of SOA record.
     *
     * @return pm_Dns_SoaRecord
     */
    public function getZone(): pm_Dns_Zone { }

    /**
     * Save SOA record;
     */
    public function save(): void { }

}

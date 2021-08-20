<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Record
{

    const TYPE_NS = 'NS';

    const TYPE_A = 'A';

    const TYPE_AAAA = 'AAAA';

    const TYPE_CNAME = 'CNAME';

    const TYPE_MX = 'MX';

    const TYPE_PTR = 'PTR';

    const TYPE_TXT = 'TXT';

    const TYPE_SRV = 'SRV';

    const TYPE_AXFR = 'AXFR';

    const TYPE_DS = 'DS';

    const TYPE_CAA = 'CAA';

    
    public function __construct($recordId = null) { }

    /**
     * Return id of DNS record.
     *
     * @return int|null
     */
    public function getId() { }

    /**
     * Return type of DNS record.
     *
     * @return string|null
     */
    public function getType() { }

    /**
     * Return host name of DNS record.
     *
     * @return string|null
     */
    public function getHost() { }

    /**
     * Return value of DNS record.
     *
     * @return string|null
     */
    public function getValue() { }

    /**
     * Return option of DNS record.
     *
     * @return string|null
     */
    public function getOption() { }

    /**
     * Return TTL of DNS record.
     *
     * @return int|null
     */
    public function getTtl() { }

    /**
     * Set type of DNS record.
     *
     * @param string $type
     *
     * @return pm_Dns_Record
     */
    public function setType(string $type) { }

    /**
     * Set name host of DNS record.
     *
     * @param string $host
     *
     * @return pm_Dns_Record
     */
    public function setHost(string $host) { }

    /**
     * Set value of DNS record.
     *
     * @param string $value
     *
     * @return pm_Dns_Record
     */
    public function setValue(string $value) { }

    /**
     * Set option of DNS record.
     *
     * @param string|null $option
     *
     * @return pm_Dns_Record
     */
    public function setOption(string $option) { }

    /**
     * Set TTL of DNS record.
     *
     * @param int|null $ttl
     *
     * @return pm_Dns_Record
     */
    public function setTtl(int $ttl) { }

    /**
     * Set DNS zone of Dns Record.
     *
     * @param pm_Dns_Record $zone
     *          
     * @throws pm_Exception
     *
     * @return $this
     */
    public function setZone(pm_Dns_Zone $zone) { }

    /**
     * Return DNS zone of DNS record.
     *
     * @return pm_Dns_Zone
     */
    public function getZone() { }

    /**
     * Return DNS record by ID.
     *
     * @param int $recordId
     *
     * @return pm_Dns_Record
     */
    public static function getById(int $recordId) { }

    /**
     * Save DNS record.
     */
    public function save() { }

    /**
     * Remove DNS record.
     */
    public function remove() { }

}

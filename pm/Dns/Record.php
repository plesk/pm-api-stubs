<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Record
{

    public const TYPE_NS = 'NS';

    public const TYPE_A = 'A';

    public const TYPE_AAAA = 'AAAA';

    public const TYPE_CNAME = 'CNAME';

    public const TYPE_MX = 'MX';

    public const TYPE_PTR = 'PTR';

    public const TYPE_TXT = 'TXT';

    public const TYPE_SRV = 'SRV';

    public const TYPE_AXFR = 'AXFR';

    public const TYPE_DS = 'DS';

    public const TYPE_CAA = 'CAA';

    public const TYPE_TLSA = 'TLSA';

    private const OWNER_TYPE_DOMAIN = 'domain';

    private const OWNER_TYPE_DOMAIN_ALIAS = 'domainAlias';

    /**
     * @param int|null $recordId
     * @throws pm_Exception
     */
    public function __construct($recordId = null) { }

    /**
     * Return id of DNS record.
     *
     * @return int|null
     */
    public function getId(): ?int { }

    /**
     * Return type of DNS record.
     *
     * @return string|null
     */
    public function getType(): ?string { }

    /**
     * Return host name of DNS record.
     *
     * @return string|null
     */
    public function getHost(): ?string { }

    /**
     * Return value of DNS record.
     *
     * @return string|null
     */
    public function getValue(): ?string { }

    /**
     * Return option of DNS record.
     *
     * @return string|null
     */
    public function getOption(): ?string { }

    /**
     * Return TTL of DNS record.
     *
     * @return int|null
     */
    public function getTtl(): ?int { }

    /**
     * Set type of DNS record.
     *
     * @param string $type
     *
     * @return pm_Dns_Record
     */
    public function setType(string $type): pm_Dns_Record { }

    /**
     * Set name host of DNS record.
     *
     * @param string $host
     *
     * @return pm_Dns_Record
     */
    public function setHost(string $host): pm_Dns_Record { }

    /**
     * Set value of DNS record.
     *
     * @param string $value
     *
     * @return pm_Dns_Record
     */
    public function setValue(string $value): pm_Dns_Record { }

    /**
     * Set option of DNS record.
     *
     * @param string|null $option
     *
     * @return pm_Dns_Record
     */
    public function setOption(string $option): pm_Dns_Record { }

    /**
     * Set TTL of DNS record.
     *
     * @param int|null $ttl
     *
     * @return pm_Dns_Record
     */
    public function setTtl(int $ttl): pm_Dns_Record { }

    /**
     * Set DNS zone of Dns Record.
     *
     * @param pm_Dns_Zone $zone
     *
     * @throws pm_Exception
     *
     * @return $this
     */
    public function setZone(pm_Dns_Zone $zone): pm_Dns_Record { }

    /**
     * Return DNS zone of DNS record.
     *
     * @return pm_Dns_Zone
     */
    public function getZone(): pm_Dns_Zone { }

    /**
     * Return DNS record by ID.
     *
     * @param int $recordId
     *
     * @return pm_Dns_Record
     */
    public static function getById(int $recordId): pm_Dns_Record { }

    /**
     * Save DNS record.
     */
    public function save(): void { }

    /**
     * Remove DNS record.
     */
    public function remove(): void { }

    /**
     * Return the list of available DNS record types
     * @return array
     * @since 18.0.55
     */
    public static function availableTypes(): array { }

    /**
     * Return whether the DNS record type is available
     * @return bool
     * @since 18.0.55
     */
    public static function isTypeAvailable(string $type): bool { }

}

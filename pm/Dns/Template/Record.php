<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Template_Record extends pm_Dns_Record
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

    /**
     * Construct DNS template record in '<domain>' zone
     */
    public function __construct() { }

    /**
     * Return template of DNS record by ID.
     *
     * @throws pm_Exception
     *
     * @return pm_Dns_Template_Record
     */
    public static function getById(int $id): pm_Dns_Record { }

    /**
     * Remove template of DNS record.
     */
    public function remove(): void { }

}

<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Template_Record extends pm_Dns_Record
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

    /**
     * Return template of DNS record by ID.
     *
     * @throws pm_Exception
     *
     * @return pm_Dns_Template_Record
     */
    public static function getById(int $id) { }

    /**
     * Remove template of DNS record.
     */
    public function remove() { }

}

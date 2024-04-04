<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Panel dns wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.33
 */
class pm_Dns_Template
{

    /**
     * Return all templates of DNS records.
     *
     * @return pm_Dns_Template_Record[]
     */
    public static function getRecords(): array { }

    /**
     * Return template of SAO record.
     *
     * @return pm_Dns_Template_SoaRecord
     */
    public static function getSoaRecord(): pm_Dns_Template_SoaRecord { }

}

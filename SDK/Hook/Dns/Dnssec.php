<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Hook\Dns;

abstract class Dnssec implements \Plesk\SDK\Hook\HookInterface
{

    /**
     * Returns XML as string which will be used for DNSSEC configuration of given DNS zone
     *
     * @param pm_Dns_Zone $zone
     * @return string
     *
     * @since 18.0.55
     */
    abstract public function getZoneMsDnsConfig(\pm_Dns_Zone $zone): string;

}

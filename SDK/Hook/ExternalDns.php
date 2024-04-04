<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Hook;

abstract class ExternalDns implements \Plesk\SDK\Hook\HookInterface
{

    /** @var null|pm_Domain|pm_DomainAlias */
    protected $owner;

    /**
     * Creates hook's instance with specified owner
     * @param null|pm_Domain|pm_DomainAlias $owner
     */
    public static function getForOwner($owner): self { }

    /**
     * Is hook configured for current owner
     */
    abstract public function isConfigured(): bool;

    /**
     * Returns settings subform for current owner
     */
    abstract public function getSettingsSubForm(): \pm_Form_SubForm;

    /**
     * Called after all "onDnsZone*" handlers - in the end
     */
    public function finalize(): void { }

    public function onDnsZoneCreate(\pm_Dns_Zone $zone): void { }

    public function onDnsZoneUpdate(\pm_Dns_Zone $zone): void { }

    public function onDnsZoneDelete(\pm_Dns_Zone $zone): void { }

}

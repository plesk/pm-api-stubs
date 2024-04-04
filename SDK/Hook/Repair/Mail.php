<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Hook\Repair;

abstract class Mail implements \Plesk\SDK\Hook\HookInterface
{

    /**
     * Repairs mail configuration provided by the extension.
     *
     * @param \Plesk\SDK\Repair\Context $context
     */
    abstract public function repairAll(\Plesk\SDK\Repair\Context $context): void;

    /**
     * Repairs mail configuration of selected domains provided by the extension.
     *
     * @param array $domainNames
     * @param \Plesk\SDK\Repair\Context $context
     */
    abstract public function repairDomains(array $domainNames, \Plesk\SDK\Repair\Context $context): void;

    /**
     * Repairs mail configuration of selected mailnames provided by the extension.
     *
     * @param array $mailnames
     * @param \Plesk\SDK\Repair\Context $context
     */
    abstract public function repairMailnames(array $mailnames, \Plesk\SDK\Repair\Context $context): void;

}

<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Promo block for admin home page
 *
 * @package Plesk_Modules
 */
abstract class pm_Promo_AdminHome extends Promo_Hideable implements pm_Hook_Interface
{

    /**
     * Module identity
     *
     * @var string
     */
    protected $_moduleId;

    /**
     * Create promo block
     *
     * @param string $moduleId
     */
    protected function __construct($moduleId) { }

    /**
     * Retrieve translated message from locale file
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public function lmsg($key, $params = []) { }

    /**
     * Check if block is active
     *
     * @return bool
     */
    public function isActive() { }

    /**
     * On hide event hook
     *
     */
    public function onHide() { }

    /**
     * Retrieve text for promo title
     *
     * @return string
     */
    public function getTitle() { }

    /**
     * Retrieve promo text
     *
     * @return string
     */
    public function getText() { }

    /**
     * Retrieve icon URL (for 32x32 icon)
     *
     * @return string
     */
    public function getIconUrl() { }

    /**
     * Retrieve text for Hide link
     *
     * @return string
     */
    public function getHideText() { }

    /**
     * Retrieve URL for promo button
     *
     * @return string
     */
    public function getButtonUrl() { }

    /**
     * Retrieve text for promo button
     *
     * @return string
     */
    public function getButtonText() { }

}

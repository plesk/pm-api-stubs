<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Promo block for customer (on Websites&Domains page)
 *
 * @package Plesk_Modules
 * @since 11.0
 */
abstract class pm_Promo_CustomerHome implements pm_Hook_Interface
{

    /**
     * Module identity
     *
     * @var string
     */
    protected $_moduleId;

    /**
     * Client identity
     *
     * @var int
     */
    protected $_clientId;

    /**
     * Create promo block
     *
     */
    public function __construct() { }

    /**
     * Retrieve translated message from locale file
     *
     * @param string $key
     * @param array $params
     * @return string
     * @since 12.0 added argument $params
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

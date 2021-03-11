<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for getting promo blocks
 *
 * @package Plesk_Modules
 * @since 17.8
 */
abstract class pm_Hook_Promos implements pm_Hook_Interface
{

    /**
     * Retrieve the list of promo blocks
     *
     * @return pm_Promo_AdminHome[]|pm_Promo_CustomerHome[]
     */
    abstract public function getPromos();

}

<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for injection into search results.
 * Full-text search index is used.
 *
 * @package Plesk_Modules
 * @since 17.8
 */
abstract class pm_Hook_Search implements pm_Hook_Interface
{

    /**
     * Retrieve the list of search index.
     *
     * @return pm_SearchIndex[]
     */
    abstract public function getIndex();

}

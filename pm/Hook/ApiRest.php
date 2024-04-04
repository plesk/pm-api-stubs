<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Hook for getting REST API metadata
 *
 * @package Plesk_Modules
 * @since 18.0.44
 */
abstract class pm_Hook_ApiRest implements pm_Hook_Interface
{

    /**
     * Retrieve REST API schema information
     *
     * ```php
     * [
     *     [
     *         'name' => 'My Extension REST API v1.0 (Beta)',
     *         'url' => '/api/my-extension/schema/openapi',
     *     ],
     *     [
     *         'name' => 'My Extension REST API v0.2',
     *         'url' => '/modules/my-extension/public/swagger.json',
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getSchema(): array;

}

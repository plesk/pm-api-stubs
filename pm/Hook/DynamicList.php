<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Abstract class for adding custom content to domain card in dynamic view
 *
 * @package Plesk_Modules
 * @since 18.0
 */
abstract class pm_Hook_DynamicList implements pm_Hook_Interface
{

    /**
     * Retrieve the list of domain card tabs
     *
     * ```php
     * [
     *      'uniqueTabId' => [
     *          'title' => 'My Awesome Tab',
     *          'content' => '<span>My awesome tab content</span>',
     *          'order' => 3,
     *          'default' => false,
     *      ]
     * ]
     * ```
     *
     * @param string $itemId identifier of domain or alias object in format {a|d}:{objectId}
     * @return array
     */
    public function getTabs($itemId) { }

    /**
     * Retrieve the left sidebar of domain card
     *
     * ```php
     *  '<span>My awesome card sidebar</span>'
     *  ```
     *
     * @since 18.0.56
     * @param string $itemId
     * @return string|null
     */
    public function getSidebar(string $itemId): ?string { }

    /**
     * Retrieve the list of columns
     *
     * ```php
     * [
     *      'column-key' => [
     *          'title' => 'My Column',
     *          'order' => 'before:status',
     *      ]
     * ]
     * ```
     *
     * @since 18.0.56
     * @return array
     */
    public function getColumns(): array { }

    /**
     * Retrieve data of visible list items
     *
     * @since 18.0.56
     * @param array $data
     * @return array
     */
    public function getData(array $data): array { }

    /**
     * Retrieve all list data
     *
     * @param array $data
     * @return array
     * @since 18.0.56
     */
    public function getDataProvider(array $data): array { }

    public function getInitContent(): ?string { }

    public function getAdditionalTitleContent(): ?string { }

}

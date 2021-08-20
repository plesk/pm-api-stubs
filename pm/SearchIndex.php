<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Global search index and presentation
 *
 * @package Plesk_Modules
 * @since 17.8
 */
abstract class pm_SearchIndex
{

    /**
     * The data of the item.
     * Serialized and stored by the search engine.
     *
     * @var mixed
     */
    protected $data;

    /**
     * Creates an item of search index with the provided data.
     *
     * Only scalar types are allowed in the data.
     * Use assoc arrays for multiple fields.
     *
     * @param mixed $data
     */
    public function __construct($data = null) { }

    /**
     * Returns the data of the item.
     *
     * Usage of the data is preferred than fetching from external resources.
     *
     * @return mixed
     */
    final public function getData() { }

    /**
     * Returns a set of fields to be used in full-text index.
     *
     * Use string or array of strings for simple text index.
     * Use the following structure for a fields with specific boost
     * ```php
     * [
     *      [
     *          'name' => 'title',
     *          'content' => 'some text data',
     *          'boost' => 0.5,
     *      ],
     * ]
     * ```
     *
     * @return array[]|string[]|string
     */
    abstract public function getIndexedFields();

    /**
     * Returns a title for the search result
     *
     * @return string
     */
    public function getTitle() { }

    /**
     * Returns a description (tooltip) for the search result.
     *
     * @return string
     */
    public function getDescription() { }

    /**
     * Returns an icon (32x32px) for the search result.
     *
     * @return string
     */
    public function getIcon() { }

    /**
     * Returns a link for the search result
     *
     * @return string
     */
    public function getLink() { }

    /**
     * Finds whether the search result should be visible to the current user.
     *
     * @return bool
     */
    public function isVisible() { }

    /**
     * Returns a boost of the search result.
     *
     * @return float
     */
    public function getBoost() { }

}

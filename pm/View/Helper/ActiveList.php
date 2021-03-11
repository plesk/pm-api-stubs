<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Helper for rendering active list
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_View_Helper_ActiveList extends Zend_View_Helper_Abstract implements Zend_View_Helper_Interface
{

    const LAYOUT_AUTO = 'auto';

    const LAYOUT_RESPONSIVECOLUMN = 'responsivecolumn';

    
    protected $_componentType = 'Jsw.ActiveList';

    
    protected $_localeSection = 'components.active-list';

    /**
     * Render active list
     *
     * ```php
     * $this->activeList([
     *     'data' => array,
     *     'layout' => string|array,
     *     'locale' => array,
     * ]);
     * ```
     *
     * @param array $options
     *
     * @return $this
     */
    public function activeList(array $options = []) { }

    /**
     * Set data
     *
     * ```php
     * $this->activeList()->setData([
     *     [
     *         'id' => string,
     *         'icon' => string, // optional
     *         'title' => string,
     *         'type' => string // optional
     *         'labels' => [ // optional
     *             [
     *                 'type' => string,
     *                 'value' => string
     *             ],
     *             ...
     *         ],
     *         'primaryActions' => [ // optional
     *             [
     *                 'title' => string,
     *                 'link' => string,
     *             ],
     *             ...
     *         ],
     *         'summary' => [ // optional
     *             [
     *                 'name' => string,
     *                 'value' => string,
     *             ],
     *             ...
     *         ],
     *         'toolbar' => [ // optional
     *             [
     *                 'title' => string,
     *                 'iconClass' => string,
     *                 'link' => string,
     *             ],
     *             ...
     *         ],
     *         'services' => [ // optional
     *             [
     *                 'title' => string,
     *                 'icon' => string,
     *                 'link' => string,
     *                 'toolbar' => [ // optional
     *                     [
     *                         'title' => string,
     *                         'link' => string,
     *                     ],
     *                     ...
     *                 ],
     *                 'messages' => [ // optional
     *                     [
     *                         'icon' => string, // optional
     *                         'info' => string,
     *                         'noEscape' => bool, // optional, default is false
     *                     ],
     *                     ...
     *                 ],
     *             ],
     *             ...
     *         ],
     *         'additionalHtml' => string, // optional
     *         'actions' => [ // optional
     *             [
     *                 'title' => string,
     *                 'icon' => string,
     *                 'link' => string,
     *             ],
     *             ...
     *         ],
     *     ],
     *     ...
     * ]);
     * ```
     *
     * @param array $data
     *
     * @return $this
     */
    public function setData(array $data) { }

    /**
     * Set the layout for items. Layout may be specified as either as a String or as an Object:
     *
     * **Specify as a String**
     * ```php
     * $this->activeList()->setLayout(pm_View_Helper_ActiveList::LAYOUT_RESPONSIVECOLUMN);
     * ```
     *
     * **Specify as an Object**
     * ```php
     * $this->activeList()->setLayout([
     *     'type' => pm_View_Helper_ActiveList::LAYOUT_RESPONSIVECOLUMN,
     *     'stretched' => true,
     *     'columns' => 'xl-2 xxl-3',
     * ]);
     * ```
     *
     * The *type* option can take the following values pm_View_Helper_ActiveList::LAYOUT_AUTO (by default)
     * or pm_View_Helper_ActiveList::LAYOUT_RESPONSIVECOLUMN
     *
     * The pm_View_Helper_ActiveList::LAYOUT_RESPONSIVECOLUMN layout id a simple grid-like layout
     * for proportionally dividing container space and allocating it to each item. You can set
     * additional optional options *stretched* and *columns* for this layout type.
     *
     * The *stretched* option is making elements the equal height in row.
     *
     * The *columns* option is whitespace separated configuration of how many columns in
     * list for specific viewport size in following format (sm|md|lg|xl|xxl|xxxl)-(1-6).
     * For example, 'xl-2 xxl-3' means that there will be 2 columns when viewport is "xl"
     * and 3 columns when viewport is "xxl".
     *
     * @param string|array $layout
     *
     * @return $this
     */
    public function setLayout($layout) { }

    /**
     * Set locale
     *
     * ```php
     * $this->activeList()->setLocale([
     *     'noObjects' => $this->lmsg('noObjects'),
     * ]);
     * ```
     *
     * @param array $locale
     *
     * @return $this
     */
    public function setLocale(array $locale = []) { }

}

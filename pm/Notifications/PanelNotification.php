<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Panel notification class
 *
 * @package Plesk_Modules
 * @since 18.0
 */
abstract class pm_Notifications_PanelNotification
{

    public const CATEGORY_INFORMATION = 'Information';

    public const CATEGORY_WARNING = 'Warning';

    public const CATEGORY_ALERT = 'Alert';

    public const CATEGORY_PROMOTION = 'Promotion';

    public const CATEGORY_FEEDBACK = 'Feedback';

    public const AREA_WEBSITES = 'Websites';

    public const AREA_ACCOUNTS = 'Accounts';

    public const AREA_SECURITY = 'Security';

    public const AREA_PERFORMANCE = 'Performance';

    public const AREA_MAINTENANCE = 'Maintenance';

    public const AREA_PRODUCT = 'Product';

    /**
     * Retrieve title of notification, which will be shown at settings page
     *
     * @return string
     */
    public function getTitle() { }

    /**
     * Retrieve message of notification
     *
     * @return string
     */
    public function getMessage() { }

    /**
     * Retrieve subject of notification
     *
     * @return string
     */
    public function getSubject() { }

    /**
     * Retrieve text of notification button
     *
     * @return string
     */
    public function getActionText() { }

    /**
     * Retrieve url of notification button
     *
     * @return string
     */
    public function getActionUrl() { }

    /**
     * Does notification button should open url in new tab
     *
     * @return bool
     */
    public function openActionInNewTab() { }

    /**
     * Retrieve category of notification, which conveys how important is it
     *
     * @return string one of predefined category constants
     */
    public function getCategory() { }

    /**
     * Retrieve area of notification
     *
     * @return string one of predefined area constants or empty string
     */
    public function getArea() { }

    /**
     * Retrieve notification context, which describe who send notification (typically extension name used)
     *
     * @return string
     */
    public function getContext() { }

    /**
     * Retrieve notification context icon (typically extension icon used)
     *
     * @return string
     */
    public function getContextIcon() { }

    /**
     * Convert send parameters to template parameters
     *
     * @param array $params
     * @return array
     */
    public function prepareRenderParams(array $params) { }

    /**
     * Retrieve message key of notification (optional)
     *
     * @return string|null
     */
    public function getMessageKey(): ?string { }

    /**
     * Flag to show Promotion or Feedback message as toast
     *
     * @return bool
     */
    public function isPromotion(): bool { }

}

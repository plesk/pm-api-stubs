<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Abstract class for injection into backup/restore status message
 *
 * @package Plesk_Modules
 * @since 18.0.41
 */
abstract class pm_Hook_Backup_Task implements pm_Hook_Backup
{

    /**
     * Updates status data
     *
     * ```php
     * public function getStatus(array $status): array
     * {
     *      $status['additionalContent'] .= '<a href="/modules/sample-extension/index.php?task-id=' . $status['id'] . '">Extra link</a>';
     *      return $status;
     * }
     * ```
     *
     * @param array $status Original status
     * @return array Updated status
     */
    public function getStatus(array $status): array { }

}

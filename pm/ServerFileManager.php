<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Manager of files on server level.
 *
 * @package Plesk_Modules
 * @since 12.5
 */
class pm_ServerFileManager extends pm_FileManager
{

    /**
     * @param bool $privilegedUser Initialize file manager with root permissions
     *
     * @since 12.5
     * @since 17.8 Has $privilegedUser parameter to be used with a non-privileged user
     */
    public function __construct(bool $privilegedUser = true) { }

}

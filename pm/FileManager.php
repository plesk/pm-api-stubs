<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Manager of hosted files for module.
 *
 * @package Plesk_Modules
 */
class pm_FileManager 
{

    /**
     * Create new instance of manager
     *
     * @param $domainId
     */
    public function __construct($domainId) { }

    /**
     * Return full path on filesystem by relative path inside webspace
     *
     * @param string $path
     * @return string
     */
    public function getFilePath($path) { }

    /**
     * Checks whether a file or directory exists.
     *
     * @param string $filename
     * @return bool
     */
    public function fileExists($filename) { }

    /**
     * Writes a string data to a file
     *
     * @param string $filename
     * @param string $data
     */
    public function filePutContents($filename, $data) { }

    /**
     * Reads entire file into a string
     *
     * @param string $filename
     * @return string
     */
    public function fileGetContents($filename) { }

}

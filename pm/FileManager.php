<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Manager of hosted files for module (webspace level).
 *
 * @package Plesk_Modules
 */
class pm_FileManager 
{

    /**
     * Creates new instance of manager
     *
     * @param $domainId
     */
    public function __construct($domainId) { }

    /**
     * Returns full path on filesystem by relative path inside webspace
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

    /**
     * Creates a directory by path ($perms and $recursively are ignored on Windows)
     *
     * @param string $dirname
     * @param string $perms
     * @param bool $recursively
     */
    public function mkdir($dirname, $perms = '0755', $recursively = false) { }

    /**
     * Updates the access date and / or modification date of a file or directory.
     *
     * @param $filename
     */
    public function touch($filename) { }

    /**
     * Changes the access permissions to file system objects (files and directories)
     *
     * @param string $filename
     * @param string $mode
     */
    public function chmod($filename, $mode) { }

    /**
     * Moves file from source to destination
     *
     * @param string $source
     * @param string $destination
     */
    public function moveFile($source, $destination) { }

    /**
     * Removes file by name
     *
     * @param string $filename
     */
    public function removeFile($filename) { }

    /**
     * Removes directory by name
     *
     * @param string $dirname
     */
    public function removeDirectory($dirname) { }

}

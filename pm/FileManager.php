<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Manager of hosted files for module (webspace level).
 *
 * @package Plesk_Modules
 * @since 11.5
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
     * @since 12.5
     */
    public function mkdir($dirname, $perms = '0755', $recursively = false) { }

    /**
     * Updates the access date and / or modification date of a file or directory.
     *
     * @param $filename
     * @since 12.5
     */
    public function touch($filename) { }

    /**
     * Changes the access permissions to file system objects (files and directories) totally are ignored on Windows
     *
     * @param string $filename
     * @param string $mode
     * @since 12.5
     */
    public function chmod($filename, $mode) { }

    /**
     * Copies file system objects (files and directories) from source to destination
     *
     * @param string $source
     * @param string $destination
     * @since 17.0
     */
    public function copyFile($source, $destination) { }

    /**
     * Moves file system objects (files and directories) from source to destination
     *
     * @param string $source
     * @param string $destination
     * @since 12.5
     */
    public function moveFile($source, $destination) { }

    /**
     * Removes file by name
     *
     * @param string $filename
     * @since 12.5
     */
    public function removeFile($filename) { }

    /**
     * Removes directory by name
     *
     * @param string $dirname
     * @since 12.5
     */
    public function removeDirectory($dirname) { }

    /**
     * Returns file size in bytes
     *
     * @param string $filename
     * @return string
     * @since 12.5
     */
    public function fileSize($filename) { }

    /**
     * Returns joined path parts
     *
     * @param string[] ...$pathParts Parts for joining to path
     * @return string
     * @since 17.0
     */
    public function joinPath(...$pathParts) { }

    /**
     * Returns list of files and directories inside the specified path
     *
     * @param string $path
     * @param bool $skipDots
     * @param bool $showSystemFiles
     * @return string[] List of file names
     * @since 17.0
     */
    public function scanDir($path, $skipDots = false, $showSystemFiles = true) { }

    /**
     * Returns list of paths inside the specified sources that match the patterns
     *
     * @param string[] $patterns List of patterns, which will be searched
     * @param boolean $recursively [optional] Whether a recursive search should be done. Default is true
     * @param string $path [optional] Path where search will be performed. Default is /
     * @return string[] List of paths
     * @since 17.0
     */
    public function find($patterns, $recursively = true, $path = '/') { }

    /**
     * Checks if path is inside webspace
     *
     * @param string $path
     * @return bool
     * @since 17.0
     */
    public function isSubpath($path) { }

    /**
     * Returns relative path inside webspace by full path
     *
     * @param string $path
     * @return string
     * @since 17.0
     */
    public function getRelativeFilePath($path) { }

    /**
     * Zip user files
     *
     * @param string $path Path, where you want to put new archive
     * @param string $archiveName Name for your archive
     * @param array $files Array of files paths, which will be included to your archive
     * @since 17.8
     */
    public function zip($path, $archiveName, $files) { }

    /**
     * Unzip user files to certain folder
     *
     * @param string $source Path, where packed archive is hosted.
     * @param string $destination Path, where you want to put files from packed archive
     * @param boolean $overwrite, optional
     * @since 17.8
     */
    public function unzip($source, $destination, $overwrite = false) { }

    /**
     * Checks if path is directory or not.
     *
     * @param string $path Path to file or directory
     * @return bool
     * @since 17.8
     */
    public function isDir($path) { }

    /**
     * Upload file specified by source to destination ($perms are ignored on Windows)
     *
     * @param string $source Path where file is located
     * @param string $destination Path where file is to be uploaded
     * @param string $perms [optional] Permissions of the uploaded file. Ignored on Windows. Default is 0644
     * @since 18.0.30
     */
    public function upload(string $source, string $destination, string $perms = '0644') { }

}

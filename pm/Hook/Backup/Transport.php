<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Hook for backup transport, e.g. backup to cloud
 *
 * @package Plesk_Modules
 * @since 17.8
 */
class pm_Hook_Backup_Transport implements pm_Hook_Backup
{

    const TYPE_SUBSCRIPTION = 'subscription';

    const TYPE_CUSTOMER = 'customer';

    const TYPE_RESELLER = 'reseller';

    const TYPE_SERVER = 'server';

    /**
     * One of the constants TYPE_*
     *
     * @var string
     */
    protected $_objectType;

    /**
     * @var int|null
     */
    protected $_objectId;

    /**
     * Initializes an object of the class. The method should be called explicitly within an overridden method.
     * @param string $objectType (server, reseller, customer, subscription)
     * @param int|null $objectId
     */
    public function init($objectType, $objectId) { }

    /**
     * The method returns true if the extension is configured for the object
     * @return bool
     */
    public function isConfigured() { }

    /**
     * The method checks and reports potential problems with the storage
     * @return string[]
     */
    public function check() { }

    /**
     * The method returns description which is shown in backup manager UI. The description should contains detailed
     * information about storage (name, internal path etc.)
     * @return string
     */
    public function getDescription() { }

    /**
     * The method returns array ['name' => ..., 'size' => ..., 'isDir' => ...]
     * @param string $path
     * @return null|array
     */
    public function stat($path) { }

    /**
     * The method returns array [['name' => ..., 'size' => ..., 'isDir' => ...], ...]
     * @param $path
     * @return array
     * @throws pm_Exception The exception is thrown if the directory does not exist
     */
    public function listDir($path) { }

    /**
     * The method creates the specified directory
     * @param string $path
     */
    public function createDir($path) { }

    /**
     * The method removes the specified file
     * @param string $path
     */
    public function deleteFile($path) { }

    /**
     * The method removes the specified directory
     * @param string $path
     */
    public function deleteDir($path) { }

    /**
     * The method returns size of read buffer preferred for the extension
     * @return int
     */
    public function getReadBufferSize() { }

    /**
     * The method opens file for read from the specified offset
     *
     * @param string $path
     * @param string $offset
     * @return string Returns file descriptor for appendFile
     */
    public function openFileRead($path, $offset) { }

    /**
     * The method reads file content to the local file
     *
     * @param string $fd
     * @param string $localFile
     * @param null | float $size if the size is null the whole file should be read
     * @return string Bytes read
     */
    public function readFile($fd, $localFile, $size = null) { }

    /**
     * The method returns size of write buffer preferred for the extension
     *
     * @return int
     */
    public function getWriteBufferSize() { }

    /**
     * The method opens file for read from the specified offset. If the file already exists it should be truncated
     *
     * @param string $path
     * @return string Returns file descriptor for appendFile
     */
    public function openFileWrite($path) { }

    /**
     * The method appends content of the local file to the file in the extenal storage
     *
     * @param string $fd
     * @param string $localFileName
     * @return string Bytes written
     */
    public function appendFile($fd, $localFileName) { }

    /**
     * The method closes file
     *
     * @param string $fd
     */
    public function closeFile($fd) { }

    /**
     * The method returns subform with storage settings
     *
     * @return pm_Form_SubForm
     */
    public function getSettingsSubForm() { }

    /**
     * This method is called just before show subform provided by getSettingsSubForm. This method may be used for
     * OAuth2 authorization.
     *
     * @param $controller Zend_Controller_Action
     */
    public function authorize($controller) { }

}

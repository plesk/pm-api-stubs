<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
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
     * Returns true if the extension is configured for the object.
     * Override this method in the extension class. Default implementation returns false.
     * @return bool
     */
    public function isConfigured() { }

    /**
     * Checks connection with the storage and reports problems
     * ['errors' => ['message', ...], 'warnings' => ['message', ...]].
     * The method may be overridden in extension class. Default implementation returns empty array.
     * @return array
     */
    public function check() { }

    /**
     * Describes this extension for backup manager UI. The description should include storage name, internal path, etc.
     * The method may be overridden in extension class.
     * Default implementation returns extension's display name.
     * @return string
     */
    public function getDescription() { }

    /**
     * Returns array ['name' => ..., 'size' => ..., 'isDir' => ...].
     * Override this method in the extension class. Default implementation returns null.
     * @param string $path
     * @return null|array
     */
    public function stat($path) { }

    /**
     * Returns array [['name' => ..., 'size' => ..., 'isDir' => ...], ...].
     * Override this method in the extension class. Default implementation returns empty array.
     * @param $path
     * @return array
     */
    public function listDir($path) { }

    /**
     * Creates the specified directory.
     * Override this method in the extension class. Default implementation does nothing.
     * @param string $path
     */
    public function createDir($path) { }

    /**
     * Removes the specified file.
     * Override this method in the extension class. Default implementation does nothing.
     * @param string $path
     */
    public function deleteFile($path) { }

    /**
     * Removes the specified directory.
     * Override this method in the extension class. Default implementation does nothing.
     * @param string $path
     */
    public function deleteDir($path) { }

    /**
     * Prepare a file with the specified name on the storage to read from the specified offset.
     * Override this method in the extension class. Default implementation returns empty string.
     * @param string $path
     * @param int $offset
     * @return mixed Returns file descriptor for readFile
     */
    public function openFileRead($path, $offset) { }

    /**
     * Reads file content to the local file.
     * Override this method in the extension class. Default implementation returns 0.
     * @param mixed $fd descriptor returned by openFileRead method
     * @param string $localFile
     * @param int|null $size if the size is null the whole file should be read
     * @return int Bytes read
     */
    public function readFile($fd, $localFile, $size = null) { }

    /**
     * Prepares the storage to write a new file with the specified name.
     * The method returns handle which should be used in appendFile and closeFile methods.
     * Override this method in the extension class. Default implementation returns empty string.
     * @param string $path
     * @return mixed File descriptor
     */
    public function openFileWrite($path) { }

    /**
     * The method appends content of the local file to the file in the external storage.
     * Override this method in the extension class. Default implementation returns 0.
     * @param mixed $fd descriptor returned by openFileWrite
     * @param string $localFile
     * @return int Bytes written
     */
    public function appendFile($fd, $localFile) { }

    /**
     * Closes file.
     * Override this method in the extension class. Default implementation does nothing.
     * @param mixed $fd descriptor returned by openFileWrite or openFileRead
     */
    public function closeFile($fd) { }

    /**
     * Returns subform with storage settings.
     * Override this method in the extension class. Default implementation empty an instance of pm_Form_SubForm.
     * @return pm_Form_SubForm
     */
    public function getSettingsSubForm() { }

    /**
     * Is called just before show subform provided by getSettingsSubForm. This method may be used for
     * OAuth2 authorization.
     * The method may be overridden in extension class. Default implementation does nothing.
     * @param $controller Zend_Controller_Action
     */
    public function authorize(Zend_Controller_Action $controller) { }

    /**
     * Returns array with information about user disk quota in bytes. If the storage cannot provide
     * information about quota an empty array should be returned.
     * Example ['total' => 5368709120, 'free' => 3221225472]
     * The method may be overridden in extension class. Default implementation returns empty array.
     * @return array
     */
    public function getQuota() { }

    /**
     * Returns an array with information about hash values that the extension returns for files. If the extension
     * is not configured to return hash values or cannot provide them an empty array should be returned.
     * Example ['type' => 'md5', 'blockSize' => 0]
     * If the extension defines the hash it should return it via stat() method or may return it via listDir() method.
     * Hash values should be returned via 'hash' key and should be scalar if  blockSize = 0 or array if blockSize != 0.
     * Hash values are used for verify content of backup files right after creation.
     * Supported hash types: md5, sha1, sha256, quickXor
     * The method may be overridden in extension class. Default implementation returns an empty array.
     * @return array
     * @since 18.0.28
     */
    public function getHash() { }

}

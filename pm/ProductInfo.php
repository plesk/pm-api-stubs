<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Plesk options / info
 *
 * @package Plesk_Modules
 * @since 12.0
 */
class pm_ProductInfo
{

    const PLATFORM_UNIX = 'Unix';

    const PLATFORM_WINDOWS = 'Windows';

    const ARCH_32 = 'i386';

    const ARCH_64 = 'x86_64';

    const OS_CENTOS = 'CentOS';

    const OS_DEBIAN = 'Debian';

    const OS_UBUNTU = 'Ubuntu';

    const OS_REDHAT = 'RedHat';

    const OS_CLOUDLINUX = 'CloudLinux';

    const OS_VZLINUX = 'VZLinux';

    const OS_ALMALINUX = 'AlmaLinux';

    const OS_WINDOWS = 'Microsoft Windows';

    const VERSION_WINDOWS_2008R2 = '6.1';

    const VERSION_WINDOWS_2012 = '6.2';

    const VERSION_WINDOWS_2012R2 = '6.3';

    const VERSION_WINDOWS_2016 = '10.0';

    const VERSION_WINDOWS_2019 = '10.0.1809';

    const VIRT_NONE = 'none';

    const VIRT_VZ = 'vz';

    const VIRT_HYPERV = 'hyperv';

    const VIRT_XEN = 'xen';

    const VIRT_VMWARE = 'vmware';

    const VIRT_KVM = 'kvm';

    const VIRT_PARALLELS_SERVER = 'parallels-server';

    const VIRT_OPENVZ = 'openvz';

    const VIRT_LXC = 'lxc';

    const VIRT_DOCKER = 'docker';

    const PACKAGE_TYPE_RPM = 'rpm';

    const PACKAGE_TYPE_DEB = 'deb';

    const PACKAGE_TYPE_WIN = 'win';

    /**
     * Retrieve Plesk version
     *
     * @throws pm_Exception
     * @return string
     */
    public static function getVersion() { }

    /**
     * Retrieve last installed update
     *
     * @return string Update number or empty string
     */
    public static function getLastInstalledUpdate() { }

    /**
     * Retrieve platform name
     *
     * @return string
     */
    public static function getPlatform() { }

    /**
     * Check if platform is Unix
     *
     * @return bool
     */
    public static function isUnix() { }

    /**
     * Check if platform is Windows
     *
     * @return bool
     */
    public static function isWindows() { }

    /**
     * Get product HWID
     *
     * @return string
     * @since 18.0.23
     */
    public static function getHWID() { }

    /**
     * Retrieve OS name
     *
     * @return string|null
     * @since 17.0
     */
    public static function getOsName() { }

    /**
     * Retrieve OS version
     *
     * @return string|null
     * @since 17.0
     */
    public static function getOsVersion() { }

    /**
     * Retrieve OS short version
     *
     * @return string|null
     * @since 17.0
     * @see pm_ProductInfo::getOsVersion For Windows version constants matching
     */
    public static function getOsShortVersion() { }

    /**
     * Retrieve OS codename
     *
     * @return string|null
     * @since 17.0
     */
    public static function getOsCodename() { }

    /**
     * Retrieve OS package type
     *
     * @return string|null
     * @since 17.0
     */
    public static function getOsPackageType() { }

    /**
     * Retrieve OS architecture
     *
     * @return string|null
     * @since 17.0
     */
    public static function getOsArch() { }

    /**
     * Retrieve virtualization type(s)
     *
     * @param bool $all Set true to get all virtualization types (array)
     * @return array|string
     * @since 17.0
     */
    public static function getVirtualization($all = false) { }

    /**
     * Retrieve absolute path to temp directory.
     *
     * @return string
     * @since 17.8
     */
    public static function getPrivateTempDir() { }

    /**
     * Retrieve absolute path to root directory.
     *
     * @return string
     * @since 17.8
     */
    public static function getProductRootDir() { }

}

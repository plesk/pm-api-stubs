<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Plesk options / info
 *
 * @package Plesk_Modules
 * @since 12.0
 */
class pm_ProductInfo
{

    public const PLATFORM_UNIX = 'Unix';

    public const PLATFORM_WINDOWS = 'Windows';

    public const ARCH_32 = 'i386';

    public const ARCH_64 = 'x86_64';

    public const OS_CENTOS = 'CentOS';

    public const OS_DEBIAN = 'Debian';

    public const OS_UBUNTU = 'Ubuntu';

    public const OS_REDHAT = 'RedHat';

    public const OS_CLOUDLINUX = 'CloudLinux';

    public const OS_VZLINUX = 'VZLinux';

    public const OS_ALMALINUX = 'AlmaLinux';

    public const OS_ROCKY = 'Rocky';

    public const OS_WINDOWS = 'Microsoft Windows';

    public const VERSION_WINDOWS_2008R2 = '6.1';

    public const VERSION_WINDOWS_2012 = '6.2';

    public const VERSION_WINDOWS_2012R2 = '6.3';

    public const VERSION_WINDOWS_2016 = '10.0';

    public const VERSION_WINDOWS_2019 = '10.0.1809';

    public const VIRT_NONE = 'none';

    public const VIRT_VZ = 'vz';

    public const VIRT_HYPERV = 'hyperv';

    public const VIRT_XEN = 'xen';

    public const VIRT_VMWARE = 'vmware';

    public const VIRT_KVM = 'kvm';

    public const VIRT_PARALLELS_SERVER = 'parallels-server';

    public const VIRT_OPENVZ = 'openvz';

    public const VIRT_LXC = 'lxc';

    public const VIRT_DOCKER = 'docker';

    public const PACKAGE_TYPE_RPM = 'rpm';

    public const PACKAGE_TYPE_DEB = 'deb';

    public const PACKAGE_TYPE_WIN = 'win';

    public const HYPERSCALER_ALIBABA = 'Alibaba';

    public const HYPERSCALER_AMAZON = 'AWS/Lightsail';

    public const HYPERSCALER_AZURE = 'Azure';

    public const HYPERSCALER_DIGITALOCEAN = 'DigitalOcean';

    public const HYPERSCALER_GOOGLE = 'GoogleCloud';

    public const HYPERSCALER_VULTR = 'Vultr';

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
    public static function getHWID(): string { }

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

    /**
     * Returns the name of the hyperscaler ths instance is running on, or null if none was detected
     * @since 18.0.39
     */
    public static function getHyperscalerName(): ?string { }

    /**
     * Returns whether this is an instance of a hyperscaler that uses NAT with public/private addresses mapping
     * @since 18.0.39
     */
    public static function hasHyperscalerIpMapping(): bool { }

    /**
     * Returns mapping of private IP addresses to public IP addresses as stated in instance metadata
     * @since 18.0.39
     */
    public static function getHyperscalerIpMapping(): array { }

}

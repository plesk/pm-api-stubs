<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Plesk options / info
 *
 * @package Plesk_Modules
 */
class pm_ProductInfo 
{

    const PLATFORM_UNIX = 'Unix';

    const PLATFORM_WINDOWS = 'Windows';

    const ARCH_32 = 'i386';

    const ARCH_64 = 'x86_64';

    const OS_CENTOS = 'centos';

    const OS_DEBIAN = 'debian';

    const OS_UBUNTU = 'ubuntu';

    const OS_REDHAT = 'redhat';

    const OS_CLOUDLINUX = 'cloudlinux';

    const OS_WINDOWS = 'microsoft windows';

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

    /**
     * Retrieve Plesk version
     *
     * @throws pm_Exception
     * @return string
     */
    public static function getVersion() { }

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
     * Retrieve OS name (in lower case)
     *
     * @return string|null
     */
    public static function getOsName() { }

    /**
     * Retrieve OS version
     *
     * @return string|null
     */
    public static function getOsVersion() { }

    /**
     * Retrieve OS architecture
     *
     * @return string|null
     */
    public static function getOsArch() { }

    /**
     * Retrieve virtualization type(s)
     *
     * @param bool $all Set true to get all virtualization types (array)
     * @return array|string
     */
    public static function getVirtualization($all = false) { }

}

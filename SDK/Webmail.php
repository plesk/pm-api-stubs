<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK;

final class Webmail
{

    /**
     * @param string $name Webmail name that will be used as an identifier of this webmail. Must be unique within the extension.
     * @param string $displayName Name that will be displayed in Plesk UI.
     */
    public function __construct(string $name, string $displayName) { }

    /**
     * Mustache template that will generate the login link to the webmail in Plesk UI.
     *
     * For example: {{ protocol }}://webmail.{{ domainName }}/index.php?login={{ fullMailName }}
     * Available context:
     * * domainName: string, domain name of the selected domain
     * * mailName: string, local part of the email
     * * fullMailName: string, full email address, urlencoded (e.g. user%40example.com)
     * * protocol: string, either "http", or "https"
     *
     * @param string $loginLinkTemplate
     * @return $this
     *
     * @since 18.0.47
     */
    public function setLoginLinkTemplate(string $loginLinkTemplate): self { }

    /**
     * A callback function that decides whether webmail should be visible for a domain or not.
     *
     * @param callable $callback Callback that takes \pm_Domain as an argument and returns a boolean value.
     * @return $this
     *
     * @since 18.0.47
     */
    public function setIsVisibleForDomainCallback(callable $callback): self { }

}

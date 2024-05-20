<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK;
/**
 * Certificate wrapper
 *
 * @package Plesk_Modules
 * @since 18.0.55
 */
class Certificate
{

    public function __construct(int $id) { }

    /**
     * Returns the certificate ID
     */
    public function getId(): int { }

    /**
     * Returns the name of the certificate
     */
    public function getName(): string { }

    /**
     * Returns the certificate signing request (CSR)
     */
    public function getCsr(): string { }

    /**
     * Returns the certificate's private key
     */
    public function getPvtKey(): string { }

    /**
     * Returns the content of the certificate
     */
    public function getCert(): string { }

    /**
     * Returns the file name of the certificate
     */
    public function getCertFile(): string { }

    /**
     * Returns the content of the CA certificate
     */
    public function getCaCert(): string { }

    /**
     * Returns the file name of the CA certificate
     */
    public function getCaFile(): string { }

}

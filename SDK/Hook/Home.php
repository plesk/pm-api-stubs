<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Hook;
/**
 * Hook for embedding custom blocks into administrator's Home page in SPV
 *
 * @since 18.0.60
 */
abstract class Home implements \Plesk\SDK\Hook\HookInterface
{

    /**
     * Retrieve blocks for Home page in SPV
     *
     * @return Home\Block[]
     */
    abstract public function getBlocks(): array;

}

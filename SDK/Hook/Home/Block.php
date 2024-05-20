<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
namespace Plesk\SDK\Hook\Home;
/**
 * Custom block to be embedded into administrator's Home page in SPV
 *
 * @since 18.0.60
 */
abstract class Block
{

    public const SECTION_PLESK = 'plesk';

    public const SECTION_SERVER = 'server';

    public const SECTION_SECURITY = 'security';

    /**
     * Define block unique ID
     *
     * Classname by default.
     *
     * @return string
     */
    public function getId(): string { }

    /**
     * Define block title
     *
     * Attention: unescaped HTML. Extension title by default.
     *
     * @return string
     */
    public function getTitle(): string { }

    /**
     * Define block content
     *
     * Attention: unescaped HTML. Extension description by default.
     *
     * @return string
     */
    public function getContent(): string { }

    /**
     * Define block footer
     *
     * Attention: unescaped HTML. Empty by default.
     *
     * @return string
     */
    public function getFooter(): string { }

    /**
     * Define column the block should be placed to
     *
     * Possible values: 0, 1, 2. Last column by default.
     *
     * @return int
     */
    public function getColumn(): int { }

    /**
     * Define order within the column the block should be placed to
     *
     * Last block in column by default.
     *
     * @return int
     */
    public function getOrder(): int { }

    /**
     * Define if the block content should be loaded asynchronously
     *
     * True by default.
     *
     * @return bool
     */
    public function isAsyncLoaded(): bool { }

    /**
     * Define size of the skeleton (content placeholder) to be shown while content is loaded
     *
     * Applied only to asynchronously loaded blocks.
     * 2 by default.
     *
     * @return int
     */
    public function getSkeletonSize(): int { }

    /**
     * Define if the block is enabled by default
     *
     * true by default.
     *
     * @return bool
     */
    public function isEnabled(): bool { }

    /**
     * Define section the block belongs to
     *
     * To be shown when customizing Home page.
     * SECTION_PLESK by default.
     *
     * @return string
     */
    public function getSection(): string { }

    /**
     * Define order within the section the block should be placed to
     *
     * To be shown when customizing Home page.
     * Last block in section by default.
     *
     * @return int
     */
    public function getSectionOrder(): int { }

    /**
     * Define block name
     *
     * To be shown when customizing Home page.
     * Extension title by default.
     *
     * @return string
     */
    public function getName(): string { }

    /**
     * Define block icon
     *
     * To be shown when customizing Home page.
     *
     * @return string
     */
    public function getIcon(): string { }

}

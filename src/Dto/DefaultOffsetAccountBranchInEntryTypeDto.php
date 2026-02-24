<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The branch to which the default offset account belongs.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetAccountBranchInEntryTypeDtoFactory testFactory()
 */
class DefaultOffsetAccountBranchInEntryTypeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DefaultOffsetAccountBranchInEntryTypeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}

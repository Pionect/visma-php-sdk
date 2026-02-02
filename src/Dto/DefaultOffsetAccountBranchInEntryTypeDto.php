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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

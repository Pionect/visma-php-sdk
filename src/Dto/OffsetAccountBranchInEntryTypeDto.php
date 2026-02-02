<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Default offset account branch &gt; The branch to which the overriding offset account belongs.
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetAccountBranchInEntryTypeDtoFactory testFactory()
 */
class OffsetAccountBranchInEntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

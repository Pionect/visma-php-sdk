<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Rate table &gt; The rate table to be used in the allocation rules, if applicable.
 *
 * @method static \Pionect\VismaSdk\Factories\RateTableInTaskExtendedDtoFactory testFactory()
 */
class RateTableInTaskExtendedDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\RateTableInTaskExtendedDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Rate table &gt; The rate table to be
 * used with the allocation rules, if applicable.
 *
 * @method static \Pionect\VismaSdk\Factories\RateTableInProjectDtoFactory testFactory()
 */
class RateTableInProjectDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\RateTableInProjectDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}

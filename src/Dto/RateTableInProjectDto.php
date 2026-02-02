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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

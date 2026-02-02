<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Organisation details tab &gt; Base currency settings (shared) section &gt; This group of
 * elements holds information that is shared among all branches of the company.
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInBranchDtoFactory testFactory()
 */
class CurrencyInBranchDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $symbol = null,
    ) {}
}

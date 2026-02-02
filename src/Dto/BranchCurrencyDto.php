<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Currency info for branch.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchCurrencyDtoFactory testFactory()
 */
class BranchCurrencyDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $symbol = null,
    ) {}
}

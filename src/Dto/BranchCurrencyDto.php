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
        /** Currency Id. */
        public ?string $id = null,
        /** Currency description. */
        public ?string $description = null,
        /** Currency symbol. */
        public ?string $symbol = null,
    ) {}
}

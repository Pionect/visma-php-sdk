<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency info for branch.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchCurrencyDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchCurrencyDtoFactory factory()
 */
class BranchCurrencyDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $symbol = null,
    ) {}
}

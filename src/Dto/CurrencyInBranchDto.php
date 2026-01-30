<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Organisation details tab &gt; Base currency settings (shared) section &gt; This group of
 * elements holds information that is shared among all branches of the company.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInBranchDtoFactory factory()
 */
class CurrencyInBranchDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $symbol = null,
    ) {}
}

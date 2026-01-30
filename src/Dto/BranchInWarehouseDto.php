<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Branch* &gt; The branch associated with the company.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInWarehouseDtoFactory testFactory()
 */
class BranchInWarehouseDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

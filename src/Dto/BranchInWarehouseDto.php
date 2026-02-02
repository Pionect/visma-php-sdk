<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Branch* &gt; The branch associated with the company.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInWarehouseDtoFactory testFactory()
 */
class BranchInWarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

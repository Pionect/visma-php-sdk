<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCashSaleDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCashSaleDtoFactory factory()
 */
class SalesPersonInCashSaleDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

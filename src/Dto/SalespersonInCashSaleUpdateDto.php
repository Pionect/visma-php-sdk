<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalespersonInCashSaleUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalespersonInCashSaleUpdateDtoFactory factory()
 */
class SalespersonInCashSaleUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

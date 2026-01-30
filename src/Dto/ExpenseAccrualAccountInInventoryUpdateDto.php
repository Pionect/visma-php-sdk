<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccrualAccountInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccrualAccountInInventoryUpdateDtoFactory factory()
 */
class ExpenseAccrualAccountInInventoryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

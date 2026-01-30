<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInInventoryUpdateDtoFactory testFactory()
 */
class ExpenseAccountInInventoryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

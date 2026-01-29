<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInInventoryUpdateDtoFactory factory()
 */
class ExpenseAccountInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}

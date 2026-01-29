<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CancelSalesOrderActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CancelSalesOrderActionDtoFactory factory()
 */
class CancelSalesOrderActionDto extends Model
{
    /** Mandatory field */
    #[Property]
    public ?string $orderType;
}

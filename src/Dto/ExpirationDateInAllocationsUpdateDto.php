<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expiration date &gt; The expiration date of the specified quantity of the stock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpirationDateInAllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpirationDateInAllocationsUpdateDtoFactory factory()
 */
class ExpirationDateInAllocationsUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}

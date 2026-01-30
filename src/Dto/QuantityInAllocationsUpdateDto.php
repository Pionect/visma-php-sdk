<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Quantity &gt; The quantity of the stock item with the same lot number. It is 1 for items with serial
 * numbers.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\QuantityInAllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\QuantityInAllocationsUpdateDtoFactory testFactory()
 */
class QuantityInAllocationsUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}

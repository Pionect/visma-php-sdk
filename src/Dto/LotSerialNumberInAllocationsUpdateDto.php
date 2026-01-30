<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Lot/Serial no. &gt; The lot or serial number of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialNumberInAllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialNumberInAllocationsUpdateDtoFactory testFactory()
 */
class LotSerialNumberInAllocationsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Line no. &gt; The line of the purchase order that contains the selected item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LineNbrInAllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LineNbrInAllocationsUpdateDtoFactory factory()
 */
class LineNbrInAllocationsUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}

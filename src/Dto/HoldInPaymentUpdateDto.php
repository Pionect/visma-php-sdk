<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Hold &gt; A check box that indicates (if selected) that the document is a draft
 * with the On hold status.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\HoldInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\HoldInPaymentUpdateDtoFactory factory()
 */
class HoldInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}

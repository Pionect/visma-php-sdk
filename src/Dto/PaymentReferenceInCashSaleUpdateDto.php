<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentReferenceInCashSaleUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentReferenceInCashSaleUpdateDtoFactory factory()
 */
class PaymentReferenceInCashSaleUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

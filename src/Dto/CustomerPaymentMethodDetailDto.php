<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory factory()
 */
class CustomerPaymentMethodDetailDto extends Model
{
    public function __construct(
        public ?string $detailId = null,
        public ?string $description = null,
        public ?string $value = null,
    ) {}
}

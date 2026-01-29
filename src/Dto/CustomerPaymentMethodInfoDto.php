<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodInfoDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodInfoDtoFactory factory()
 */
class CustomerPaymentMethodInfoDto extends Model
{
    #[Property]
    public ?string $paymentMethodId;

    #[Property]
    public ?bool $isDefault;
}

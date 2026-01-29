<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Financial period* &gt; The financial period to which the payment
 * should be applied, which the system fills in based on the date.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ApplicationPeriodInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ApplicationPeriodInPaymentUpdateDtoFactory factory()
 */
class ApplicationPeriodInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}

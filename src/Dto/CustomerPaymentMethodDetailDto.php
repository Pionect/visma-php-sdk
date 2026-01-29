<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory factory()
 */
class CustomerPaymentMethodDetailDto extends Model
{
    #[Property]
    public ?string $detailId;

    /** Payment method details tab &gt; Description &gt; A description of the selected payment method. */
    #[Property]
    public ?string $description;

    /** Payment method details tab &gt; Value &gt; The value you enter. This must match the input validation mask set for the column. */
    #[Property]
    public ?string $value;
}

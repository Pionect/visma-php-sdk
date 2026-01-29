<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VoidPaymentActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VoidPaymentActionDtoFactory factory()
 */
class VoidPaymentActionDto extends Model
{
    #[Property]
    public ?string $type;

    #[Property]
    public ?bool $returnVoidPayment;
}

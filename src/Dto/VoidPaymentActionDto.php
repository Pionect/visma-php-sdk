<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VoidPaymentActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VoidPaymentActionDtoFactory factory()
 */
class VoidPaymentActionDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?bool $returnVoidPayment = null,
    ) {}
}

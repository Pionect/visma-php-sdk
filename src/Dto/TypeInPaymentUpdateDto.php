<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Type &gt; The type of a document: Payment, Credit note, Prepayment, Customer
 * refund, Void payment, Balance write-off.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TypeInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TypeInPaymentUpdateDtoFactory testFactory()
 */
class TypeInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

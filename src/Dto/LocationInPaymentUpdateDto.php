<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; The customer location associated with the sale.
 * Once the customer is selected, this field displays the customer's default location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPaymentUpdateDtoFactory testFactory()
 */
class LocationInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The vat category of the item, which by default is the vat category associated with the item class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInInventoryUpdateDtoFactory testFactory()
 */
class VatCodeInInventoryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

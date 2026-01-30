<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property is now considered obsolete. Please define ItemType on the item level instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemTypeInCustomerInvoiceLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemTypeInCustomerInvoiceLinesUpdateDtoFactory testFactory()
 */
class ItemTypeInCustomerInvoiceLinesUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}

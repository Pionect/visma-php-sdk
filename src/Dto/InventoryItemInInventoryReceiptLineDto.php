<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Item ID* &gt; The ID of the goods to be transferred.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryItemInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryItemInInventoryReceiptLineDtoFactory testFactory()
 */
class InventoryItemInInventoryReceiptLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}

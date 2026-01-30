<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Location &gt; The location of the customer
 * related to the expenses.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseReceiptDtoFactory factory()
 */
class LocationInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

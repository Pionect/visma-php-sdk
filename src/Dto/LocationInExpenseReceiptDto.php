<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Financial details section &gt; Location &gt; The location of the customer
 * related to the expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseReceiptDtoFactory testFactory()
 */
class LocationInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}

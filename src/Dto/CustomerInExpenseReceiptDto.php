<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Financial details section &gt; Customer &gt; The customer, which should be
 * specified if the employee incurred the expenses while working for a particular customer.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInExpenseReceiptDtoFactory testFactory()
 */
class CustomerInExpenseReceiptDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerInExpenseReceiptDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}

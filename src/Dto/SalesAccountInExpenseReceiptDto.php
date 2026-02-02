<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Financial details section &gt; Sales account &gt; The sales account to
 * which the system records the part of the amount to charge the customer for.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesAccountInExpenseReceiptDtoFactory testFactory()
 */
class SalesAccountInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}

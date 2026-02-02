<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Financial details section &gt; Sales sub. &gt; The corresponding subaccount
 * the system uses to record the amount to charge the customer for.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubInExpenseReceiptDtoFactory testFactory()
 */
class SalesSubInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesSubInExpenseReceiptDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}

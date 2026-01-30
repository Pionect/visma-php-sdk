<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Sales sub. &gt; The corresponding subaccount
 * the system uses to record the amount to charge the customer for.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesSubInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubInExpenseReceiptDtoFactory factory()
 */
class SalesSubInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

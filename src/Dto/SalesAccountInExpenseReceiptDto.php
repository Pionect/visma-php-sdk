<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Sales account &gt; The sales account to
 * which the system records the part of the amount to charge the customer for.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesAccountInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesAccountInExpenseReceiptDtoFactory testFactory()
 */
class SalesAccountInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}

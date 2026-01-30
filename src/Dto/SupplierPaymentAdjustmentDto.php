<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentAdjustmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentAdjustmentDtoFactory testFactory()
 */
class SupplierPaymentAdjustmentDto extends Model
{
    public function __construct(
        public ?string $branch = null,
        public ?string $batchNumber = null,
        public ?string $docType = null,
        public ?string $invoiceRefNbr = null,
        public int|float|null $amountPaid = null,
        public int|float|null $cashDiscountTaken = null,
        public int|float|null $withholdingTax = null,
        public ?string $applicationPeriod = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public int|float|null $balance = null,
        public int|float|null $cashDiscountBalance = null,
        public ?string $description = null,
        public ?string $currency = null,
        public ?string $postPeriod = null,
        public ?string $supplierRef = null,
    ) {}
}

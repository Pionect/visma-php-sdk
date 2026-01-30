<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceDtoFactory factory()
 */
class SupplierBalanceDto extends Model
{
    public function __construct(
        public ?string $branchNumber = null,
        public ?SupplierDescriptionDto $supplier = null,
        public int|float|null $balance = null,
        public ?WithoutWithVatDto $unreleasedPurchasesNotInApproval = null,
        public ?WithoutWithVatDto $totalSentForApproval = null,
        public ?WithoutWithVatDto $totalPurchaseInvoicePeriod = null,
        public ?WithoutWithVatDto $totalPurchaseInvoiceYear = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}

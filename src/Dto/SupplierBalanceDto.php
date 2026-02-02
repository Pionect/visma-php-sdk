<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceDtoFactory testFactory()
 */
class SupplierBalanceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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

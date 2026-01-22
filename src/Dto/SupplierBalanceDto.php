<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierBalanceDto extends Model
{
    #[Property]
    public ?string $branchNumber;

    #[Property]
    public ?\SupplierDescriptionDto $supplier;

    #[Property]
    public ?float $balance;

    #[Property]
    public ?\WithoutWithVatDto $unreleasedPurchasesNotInApproval;

    #[Property]
    public ?\WithoutWithVatDto $totalSentForApproval;

    #[Property]
    public ?\WithoutWithVatDto $totalPurchaseInvoicePeriod;

    #[Property]
    public ?\WithoutWithVatDto $totalPurchaseInvoiceYear;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}

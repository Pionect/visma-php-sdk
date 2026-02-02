<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentQueryParametersFactory testFactory()
 */
class SupplierPaymentQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $invoiceRefNbr = null,
        public ?string $paymentType = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $supplier = null,
        public ?string $branch = null,
        public ?\Carbon\Carbon $docDate = null,
        public ?string $docDateCondition = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?string $dueDateCondition = null,
        public ?string $financialPeriod = null,
        public int|float|null $balance = null,
        public ?string $balanceCondition = null,
        public ?string $status = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

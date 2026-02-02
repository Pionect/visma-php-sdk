<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Summary tab &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\SummaryInCustomerContractDtoFactory testFactory()
 */
class SummaryInCustomerContractDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $setupDate = null,
        public ?\Carbon\Carbon $activationDate = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?\Carbon\Carbon $terminationDate = null,
        public ?bool $massRenewal = null,
        public ?int $renewalPoint = null,
        public ?int $gracePeriod = null,
        public ?string $currency = null,
        public ?\Carbon\Carbon $invoicingScheduleStartsOn = null,
        public ?string $invoicingPeriod = null,
        public ?\Carbon\Carbon $lastInvoicingDate = null,
        public ?\Carbon\Carbon $nextInvoicingDate = null,
        public ?string $invoiceTo = null,
        public ?InvoiceAccountInCustomerContractSummaryDto $invoiceAccount = null,
        public ?LocationNameDescriptionDto $invoiceLocation = null,
        public ?OwnerInCustomerContractSummaryDto $owner = null,
        public ?SalesPersonInCustomerContractSummaryDto $salesPerson = null,
        public ?CaseCountItemInCustomerContractSummaryDto $caseCountItem = null,
    ) {}
}

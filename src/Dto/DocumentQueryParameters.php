<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DocumentQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DocumentQueryParametersFactory factory()
 */
class DocumentQueryParameters extends Model
{
    public function __construct(
        public ?string $documentType = null,
        public ?int $released = null,
        public ?int $dunningLevel = null,
        public ?string $closedFinancialPeriod = null,
        public ?string $dunningLetterDateTime = null,
        public ?string $dunningLetterDateTimeCondition = null,
        public ?string $project = null,
        public ?bool $expandApplications = null,
        public ?bool $expandDunningInformation = null,
        public ?bool $expandAttachments = null,
        public ?bool $expandTaxDetails = null,
        public ?bool $expandInvoiceAddress = null,
        public ?string $financialPeriod = null,
        public ?\Carbon\Carbon $documentDueDate = null,
        public ?string $documentDueDateCondition = null,
        public ?string $status = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $externalReference = null,
        public ?string $paymentReference = null,
        public ?string $customerRefNumber = null,
        public ?string $customer = null,
        public ?string $branch = null,
        public ?\Carbon\Carbon $documentDate = null,
        public ?string $documentDateCondition = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

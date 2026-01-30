<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceQueryParametersFactory factory()
 */
class SupplierInvoiceQueryParameters extends Model
{
    public function __construct(
        public ?string $supplier = null,
        public ?bool $expandAttachment = null,
        public ?bool $expandLandedCosts = null,
        public ?string $documentType = null,
        public ?int $released = null,
        public ?string $project = null,
        public ?bool $expandApproval = null,
        public ?bool $expandNote = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $status = null,
        public ?bool $expandLinePrebookAccounts = null,
        public ?string $branch = null,
        public ?string $financialPeriod = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?string $dueDateCondition = null,
        public ?\Carbon\Carbon $docDate = null,
        public ?string $docDateCondition = null,
        public ?string $item = null,
        public int|float|null $balance = null,
        public ?string $balanceCondition = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

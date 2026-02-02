<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptV2queryParametersFactory testFactory()
 */
class PurchaseReceiptV2queryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $receiptType = null,
        public ?string $status = null,
        public ?string $greaterThanValue = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $supplier = null,
        public ?string $poOrderNbr = null,
        public ?bool $expandNote = null,
        public ?string $branch = null,
        public ?string $finPeriod = null,
        public ?string $receiptDate = null,
        public ?string $receiptDateCondition = null,
        public ?string $dueDate = null,
        public ?string $dueDateCondition = null,
        public ?bool $includeCustomFreeFields = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

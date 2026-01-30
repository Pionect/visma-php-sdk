<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptV2queryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptV2queryParametersFactory factory()
 */
class PurchaseReceiptV2queryParameters extends Model
{
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

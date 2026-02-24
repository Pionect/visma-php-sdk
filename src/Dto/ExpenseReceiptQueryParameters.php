<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ExpenseReceiptQueryParametersStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ExpenseReceiptQueryParametersFactory testFactory()
 */
class ExpenseReceiptQueryParameters extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseReceiptQueryParametersFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The date of the document */
        public ?string $date = null,
        public ?string $dateCondition = null,
        /** Identifies the inventory item from the document */
        public ?string $inventory = null,
        /** Identifies the project from the document */
        public ?string $project = null,
        /** Identifies the employee from the document */
        public ?string $claimedBy = null,
        /** Filter on Task ID. */
        public ?string $projectTask = null,
        /** If the document is invoiceable */
        public ?bool $invoiceable = null,
        /** The status of the document. */
        public ?ExpenseReceiptQueryParametersStatusEnum $status = null,
        /** Identifies the customer from the document */
        public ?string $customer = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ExpenseReceiptQueryParametersFactory testFactory()
 */
class ExpenseReceiptQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $date = null,
        public ?string $dateCondition = null,
        public ?string $inventory = null,
        public ?string $project = null,
        public ?string $claimedBy = null,
        public ?string $projectTask = null,
        public ?bool $invoiceable = null,
        public ?string $status = null,
        public ?string $customer = null,
    ) {}
}

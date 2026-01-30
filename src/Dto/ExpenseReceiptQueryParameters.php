<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseReceiptQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseReceiptQueryParametersFactory testFactory()
 */
class ExpenseReceiptQueryParameters extends Model
{
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

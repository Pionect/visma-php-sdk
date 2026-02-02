<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TransactionDetailDtoFactory testFactory()
 */
class TransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        public ?BranchInTransactionDetailDto $branch = null,
        public ?ItemInTransactionDetailDto $item = null,
        public ?string $description = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public int|float|null $price = null,
        public int|float|null $amount = null,
        public ?OffsetCashAccountInTransactionDetailDto $offsetCashAccount = null,
        public ?OffsetAccountInTransactionDetailDto $offsetAccount = null,
        public ?OffsetSubAccountInTransactionDetailDto $offsetSubAccount = null,
        public ?TaxCategoryInTransactionDetailDto $taxCategory = null,
        public ?bool $nonBillable = null,
        public ?ProjectInTransactionDetailDto $project = null,
        public ?ProjectTaskInTransactionDetailDto $projectTask = null,
    ) {}
}

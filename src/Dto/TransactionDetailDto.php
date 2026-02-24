<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\TransactionDetailDtoFactory testFactory()
 */
class TransactionDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TransactionDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The line number in the table. */
        public ?int $lineNumber = null,
        public ?BranchInTransactionDetailDto $branch = null,
        public ?ItemInTransactionDetailDto $item = null,
        /** Description > The description provided for the item. */
        public ?string $description = null,
        /** Quantity > The quantity of the item. */
        public int|float|null $quantity = null,
        /** UoM > The unit of measure of the item. */
        public ?string $uom = null,
        /** Price > The unit price for the item. */
        public int|float|null $price = null,
        /** Amount > The total amount for all units or items. */
        public int|float|null $amount = null,
        public ?OffsetCashAccountInTransactionDetailDto $offsetCashAccount = null,
        public ?OffsetAccountInTransactionDetailDto $offsetAccount = null,
        public ?OffsetSubAccountInTransactionDetailDto $offsetSubAccount = null,
        public ?TaxCategoryInTransactionDetailDto $taxCategory = null,
        /**
         * Non-invoiceable > A check box that indicates (if selected) that this
         * transaction is non-invoiceable in the project.
         */
        public ?bool $nonBillable = null,
        public ?ProjectInTransactionDetailDto $project = null,
        public ?ProjectTaskInTransactionDetailDto $projectTask = null,
    ) {}
}

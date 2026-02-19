<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ContractUsageLineDtoFactory testFactory()
 */
class ContractUsageLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $transactionNumber = null,
        /**
         * Information indicating that the contract is collected from the Transaction
         * history tab and the contract is invoiced. Not indicated on screen CT303000.
         */
        public ?bool $billed = null,
        public ?BranchInContractUsageLineDto $branch = null,
        public ?ItemInContractUsageLineDto $item = null,
        /** Both tabs > Description > A description of the non-stock item. */
        public ?string $description = null,
        /** Both tabs > UoM > The unit of measure used for the item. */
        public ?string $uom = null,
        /** Both tabs > Quantity > A number of units used for the item. */
        public int|float|null $quantity = null,
        /**
         * Mandatory field: Both tabs > Date* > The date of the activity, case, applied
         * labour, or other usage (for the item).
         */
        public ?\Carbon\Carbon $date = null,
        /** Transaction history tab > Type > The type of the customer ledger document. */
        public ?string $type = null,
        /**
         * Transaction history tab > Ref. no. > The reference number of the
         * document/invoice.
         */
        public ?string $referenceNbr = null,
        /**
         * Transaction history tab > Invoicing date > The date when the invoice was
         * issued.
         */
        public ?\Carbon\Carbon $billingDate = null,
        /** A system generated date/time that indicates the last change for the document. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}

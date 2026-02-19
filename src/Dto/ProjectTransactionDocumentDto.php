<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
use Pionect\VismaSdk\Enums\JournalTransactionLineModuleEnum;
use Pionect\VismaSdk\Enums\ProjectTransactionDocumentOrigDocTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionDocumentDtoFactory testFactory()
 */
class ProjectTransactionDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The top part > Ref. no. > The reference number of the transaction. */
        public ?string $refNbr = null,
        /** The top part > Description > The description provided for the transaction. */
        public ?string $description = null,
        /**
         * The top part > Orig. doc. no. > The reference number of the underlying
         * document for the transaction.
         */
        public ?string $origDocNbr = null,
        /**
         * The top part > Status > The status of the transaction. The following statuses
         * are possible: Balanced, Released.
         */
        public ?InventoryAdjustmentStatusEnum $status = null,
        /** The top part > Module > The module you create the transactions in. */
        public ?JournalTransactionLineModuleEnum $module = null,
        /**
         * The top part > Orig. doc. no. > The type of the document the transaction is
         * based on. It has one of the following values: Allocation, Time card, Case,
         * Expense claim, Allocation reversal, Reversal, Credit note.
         */
        public ?ProjectTransactionDocumentOrigDocTypeEnum $origDocType = null,
        public ?string $note = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        /**
         * @var ProjectTransactionLineDto[]|null
         */
        public ?array $lines = null,
        public ?string $errorInfo = null,
    ) {}
}

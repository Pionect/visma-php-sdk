<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\FixedAssetTransactionOriginEnum;
use Pionect\VismaSdk\Enums\FixedAssetTransactionTransactionTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetTransactionDtoFactory testFactory()
 */
class FixedAssetTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The referance number for this fixed asset transaction */
        public ?string $refNo = null,
        /** The line number of this fixed asset transaction */
        public ?int $lineNo = null,
        /** The branch id for this fixed asset transaction */
        #[MapName('branchID')]
        public ?string $branchId = null,
        /** The origin of this fixed asset transaction. Origin can be */
        public ?FixedAssetTransactionOriginEnum $origin = null,
        /** The asset id this fixed asset transaction belongs to */
        #[MapName('assetID')]
        public ?string $assetId = null,
        /** The description of this fixed asset transaction */
        public ?string $transactionDescription = null,
        /** The book id for this fixed asset transaction */
        #[MapName('bookID')]
        public ?string $bookId = null,
        /** Type can be */
        public ?FixedAssetTransactionTransactionTypeEnum $transactionType = null,
        public ?AccountsInFixedAssetTransactionDto $accounts = null,
        /** The amount of this fixed asset transaction */
        public int|float|null $transactionAmount = null,
        /**
         * The batch number of the general ledger transaction for this fixed asset
         * transaction
         */
        public ?string $batchNo = null,
        /** The transaction period id for this fixed asset transaction */
        #[MapName('transactionPeriodID')]
        public ?string $transactionPeriodId = null,
        /** The transaction date for this fixed asset transaction */
        public ?\Carbon\Carbon $transactionDate = null,
        public ?RegisterInFixedAssetTransactionDto $register = null,
        /**
         * A system generated date/time that indicates the last change for this fixed
         * asset transaction
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}

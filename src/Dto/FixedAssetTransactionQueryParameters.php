<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetTransactionQueryParametersFactory testFactory()
 */
class FixedAssetTransactionQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $refNo = null,
        #[MapName('assetID')]
        public ?string $assetId = null,
        #[MapName('bookID')]
        public ?string $bookId = null,
        public ?string $fromPeriod = null,
        public ?string $toPeriod = null,
        #[MapName('accountID')]
        public ?string $accountId = null,
        #[MapName('subAccountID')]
        public ?string $subAccountId = null,
        public ?string $status = null,
        public ?string $transactionType = null,
        public ?string $transactionFromDate = null,
        public ?string $transactionToDate = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetTransactionQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetTransactionQueryParametersFactory testFactory()
 */
class FixedAssetTransactionQueryParameters extends Model
{
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

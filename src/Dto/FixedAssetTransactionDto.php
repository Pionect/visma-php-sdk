<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetTransactionDtoFactory factory()
 */
class FixedAssetTransactionDto extends Model
{
    public function __construct(
        public ?string $refNo = null,
        public ?int $lineNo = null,
        #[MapName('branchID')]
        public ?string $branchId = null,
        public ?string $origin = null,
        #[MapName('assetID')]
        public ?string $assetId = null,
        public ?string $transactionDescription = null,
        #[MapName('bookID')]
        public ?string $bookId = null,
        public ?string $transactionType = null,
        public ?AccountsInFixedAssetTransactionDto $accounts = null,
        public int|float|null $transactionAmount = null,
        public ?string $batchNo = null,
        #[MapName('transactionPeriodID')]
        public ?string $transactionPeriodId = null,
        public ?\Carbon\Carbon $transactionDate = null,
        public ?RegisterInFixedAssetTransactionDto $register = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}

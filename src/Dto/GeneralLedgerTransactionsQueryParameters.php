<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerTransactionsQueryParametersFactory testFactory()
 */
class GeneralLedgerTransactionsQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $branch = null,
        public ?string $ledger = null,
        public ?string $fromPeriod = null,
        public ?string $toPeriod = null,
        public ?string $account = null,
        public ?string $subaccountId = null,
        public ?string $fromDate = null,
        public ?string $toDate = null,
        public ?bool $includeUnposted = null,
        public ?bool $includeUnreleased = null,
        public ?int $skipRecords = null,
        public ?int $numberToRead = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?bool $expandAccountInfo = null,
        public ?bool $expandBranchInfo = null,
        public ?bool $includeTransactionBalance = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

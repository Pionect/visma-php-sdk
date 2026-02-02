<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerPeriodBalanceQueryParametersFactory testFactory()
 */
class GeneralLedgerPeriodBalanceQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $periodId = null,
        public ?string $account = null,
        public ?string $ledger = null,
        public ?string $branch = null,
        public ?string $balanceType = null,
        public ?bool $toggleBalanceSigns = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        #[MapName('excludeYTDAccount')]
        public ?bool $excludeYtdaccount = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}

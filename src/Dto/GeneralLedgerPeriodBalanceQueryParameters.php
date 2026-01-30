<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GeneralLedgerPeriodBalanceQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerPeriodBalanceQueryParametersFactory testFactory()
 */
class GeneralLedgerPeriodBalanceQueryParameters extends Model
{
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

<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GeneralLedgerBudgetQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerBudgetQueryParametersFactory factory()
 */
class GeneralLedgerBudgetQueryParameters extends Model
{
    public function __construct(
        public ?bool $isReleased = null,
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $orderBy = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $branch = null,
        public ?string $ledger = null,
        public ?string $financialYear = null,
        public ?string $subaccount = null,
    ) {}
}

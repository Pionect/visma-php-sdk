<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LedgerDtoFactory testFactory()
 */
class LedgerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $description = null,
        public ?string $balanceType = null,
        public ?string $currencyId = null,
        public ?bool $consolidationSource = null,
        public ?ConsolBranchInLedgerDto $consolBranch = null,
        public ?bool $branchAccounting = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?bool $postInterCompany = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LedgerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerDtoFactory testFactory()
 */
class LedgerDto extends Model
{
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

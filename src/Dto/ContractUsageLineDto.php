<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ContractUsageLineDtoFactory testFactory()
 */
class ContractUsageLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $transactionNumber = null,
        public ?bool $billed = null,
        public ?BranchInContractUsageLineDto $branch = null,
        public ?ItemInContractUsageLineDto $item = null,
        public ?string $description = null,
        public ?string $uom = null,
        public int|float|null $quantity = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $type = null,
        public ?string $referenceNbr = null,
        public ?\Carbon\Carbon $billingDate = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}

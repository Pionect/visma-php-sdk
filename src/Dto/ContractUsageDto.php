<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ContractUsageDtoFactory testFactory()
 */
class ContractUsageDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ContractUsageDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $contract = null,
        /**
         * @var ContractUsageLineDto[]|null
         *                                  Transactions not yet invoiced tab or Transaction history tab
         */
        public ?array $transaction = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}

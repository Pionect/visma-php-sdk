<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Contract management section &gt; Owner &gt; The owner of the contract.
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInCustomerContractSummaryDtoFactory testFactory()
 */
class OwnerInCustomerContractSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

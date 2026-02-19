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
        /** The identifier of the particular destination of the selected type. */
        public ?string $number = null,
        /** The name of the particular destination of the selected type. */
        public ?string $name = null,
    ) {}
}

<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Contract management section &gt; Owner &gt; The owner of the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OwnerInCustomerContractSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInCustomerContractSummaryDtoFactory testFactory()
 */
class OwnerInCustomerContractSummaryDto extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

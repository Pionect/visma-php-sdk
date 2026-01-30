<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Contract management &gt; Salesperson &gt; The salesperson associated with the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCustomerContractSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerContractSummaryDtoFactory testFactory()
 */
class SalesPersonInCustomerContractSummaryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

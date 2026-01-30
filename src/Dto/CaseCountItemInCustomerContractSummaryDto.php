<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Contract management section &gt; Case count item &gt; A non-stock item used for counting cases
 * associated with the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CaseCountItemInCustomerContractSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CaseCountItemInCustomerContractSummaryDtoFactory factory()
 */
class CaseCountItemInCustomerContractSummaryDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}

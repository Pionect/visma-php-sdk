<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Contract management &gt; Salesperson &gt; The salesperson associated with the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCustomerContractSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerContractSummaryDtoFactory factory()
 */
class SalesPersonInCustomerContractSummaryDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}

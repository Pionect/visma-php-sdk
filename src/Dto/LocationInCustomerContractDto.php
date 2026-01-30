<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Location &gt; The customer location associated with the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInCustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerContractDtoFactory factory()
 */
class LocationInCustomerContractDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}

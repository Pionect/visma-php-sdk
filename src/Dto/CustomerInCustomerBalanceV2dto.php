<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Customer
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInCustomerBalanceV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerBalanceV2dtoFactory testFactory()
 */
class CustomerInCustomerBalanceV2dto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

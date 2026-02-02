<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Customer
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerBalanceV2dtoFactory testFactory()
 */
class CustomerInCustomerBalanceV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}

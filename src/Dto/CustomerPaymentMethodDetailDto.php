<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory testFactory()
 */
class CustomerPaymentMethodDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $detailId = null,
        public ?string $description = null,
        public ?string $value = null,
    ) {}
}

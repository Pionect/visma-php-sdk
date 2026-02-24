<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory testFactory()
 */
class CustomerPaymentMethodDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $detailId = null,
        /**
         * Payment method details tab > Description > A description of the selected
         * payment method.
         */
        public ?string $description = null,
        /**
         * Payment method details tab > Value > The value you enter. This must match the
         * input validation mask set for the column.
         */
        public ?string $value = null,
    ) {}
}

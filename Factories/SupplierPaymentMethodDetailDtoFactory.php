<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierPaymentMethodDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierPaymentMethodDetailDto>
 */
class SupplierPaymentMethodDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodDetailDescription' => $this->faker->sentence(),
            'paymentMethodDetailValue' => $this->faker->word(),
            'paymentMethodDetailBankingDetailType' => $this->faker->word(),
            'paymentMethodDetailId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentMethodDetailDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerPaymentMethodDetailDto>
 */
class CustomerPaymentMethodDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'detailId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodDetailDto::class;
    }
}

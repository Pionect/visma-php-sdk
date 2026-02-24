<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerPaymentMethodDetailUpdateDto>
 */
class CustomerPaymentMethodDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'detailId' => $this->faker->uuid(),
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodDetailUpdateDto::class;
    }
}

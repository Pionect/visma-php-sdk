<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PaymentMethodDetailDto>
 */
class PaymentMethodDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'detailId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'bankingDetailType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodDetailDto::class;
    }
}

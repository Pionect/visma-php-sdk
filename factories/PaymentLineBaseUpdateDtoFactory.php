<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentLineBaseUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentLineBaseUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLineBaseUpdateDto::class;
    }
}

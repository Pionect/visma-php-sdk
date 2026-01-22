<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VoidPaymentActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VoidPaymentActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'voidPayment' => $this->faker->word(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VoidPaymentActionResultDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VoidPaymentActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VoidPaymentActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'returnVoidPayment' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return VoidPaymentActionDto::class;
    }
}

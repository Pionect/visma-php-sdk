<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\HoldInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class HoldInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return HoldInPaymentUpdateDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WriteOffReasonCodeInPaymentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WriteOffReasonCodeInPaymentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WriteOffReasonCodeInPaymentLineDto::class;
    }
}

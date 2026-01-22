<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DeferralSubInDeferralCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DeferralSubInDeferralCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DeferralSubInDeferralCodeDto::class;
    }
}

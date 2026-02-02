<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DeferralCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DeferralCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'deferralCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'deferredRevenueFromItem' => $this->faker->boolean(),
            'recognitionMethod' => $this->faker->word(),
            'codeType' => $this->faker->word(),
            'deferralAccount' => null,
            'deferralSub' => null,
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DeferralCodeDto::class;
    }
}

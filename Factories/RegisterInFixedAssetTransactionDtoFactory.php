<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\RegisterInFixedAssetTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RegisterInFixedAssetTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return RegisterInFixedAssetTransactionDto::class;
    }
}

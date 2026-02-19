<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UpdateCostActionResultDto;
use Pionect\VismaSdk\Enums\ReleaseCashTransactionActionResultActionResultEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UpdateCostActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->randomElement(ReleaseCashTransactionActionResultActionResultEnum::cases()),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UpdateCostActionResultDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodAmountUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodAmountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'periodId' => $this->faker->uuid(),
            'amount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodAmountUpdateDto::class;
    }
}

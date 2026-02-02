<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ApplicationPeriodInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ApplicationPeriodInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ApplicationPeriodInPaymentUpdateDto::class;
    }
}

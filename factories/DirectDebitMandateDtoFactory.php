<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DirectDebitMandateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DirectDebitMandateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'mandateId' => $this->faker->uuid(),
            'mandateDescription' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DirectDebitMandateDto::class;
    }
}

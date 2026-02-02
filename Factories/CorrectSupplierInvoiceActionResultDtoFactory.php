<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CorrectSupplierInvoiceActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CorrectSupplierInvoiceActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'errorMessage' => $this->faker->word(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CorrectSupplierInvoiceActionResultDto::class;
    }
}

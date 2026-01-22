<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrepareInvoiceActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrepareInvoiceActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'customerInvoiceDto' => $this->faker->word(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PrepareInvoiceActionResultDto::class;
    }
}

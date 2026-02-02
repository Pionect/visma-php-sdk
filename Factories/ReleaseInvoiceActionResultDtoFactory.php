<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleaseInvoiceActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReleaseInvoiceActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ReleaseInvoiceActionResultDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerDocumentVatZoneDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDocumentVatZoneDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDocumentVatZoneDto::class;
    }
}

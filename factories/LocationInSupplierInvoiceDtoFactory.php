<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInSupplierInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInSupplierInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInSupplierInvoiceDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributes' => [],
            'paymentMethodId' => $this->faker->uuid(),
            'paymentMethodDescription' => $this->faker->sentence(),
            'timeStamp' => $this->faker->word(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierClassDto::class;
    }
}

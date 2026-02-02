<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'taxZoneId' => $this->faker->uuid(),
            'requiredTaxzoneId' => $this->faker->boolean(),
            'paymentMethodId' => $this->faker->uuid(),
            'attributes' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerClassDto::class;
    }
}

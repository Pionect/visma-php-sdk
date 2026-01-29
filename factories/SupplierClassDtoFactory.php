<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
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
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierClassDto::class;
    }
}

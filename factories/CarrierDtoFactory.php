<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CarrierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CarrierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'carrierId' => $this->faker->uuid(),
            'carrierDescription' => $this->faker->sentence(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CarrierDto::class;
    }
}

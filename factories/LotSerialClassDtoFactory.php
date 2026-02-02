<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LotSerialClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerialClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'trackingMethod' => $this->faker->word(),
            'trackExpirationDate' => $this->faker->boolean(),
            'requiredForDropShip' => $this->faker->boolean(),
            'assignmentMethod' => $this->faker->word(),
            'issueMethod' => $this->faker->word(),
            'autoIncrementalValueBetweenClasses' => $this->faker->boolean(),
            'autoIncrementalValue' => $this->faker->word(),
            'autoGenerateNextNumber' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'details' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassDto::class;
    }
}

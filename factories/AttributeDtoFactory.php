<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\AttributeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'controlType' => $this->faker->word(),
            'internal' => $this->faker->boolean(),
            'entryMask' => $this->faker->word(),
            'regExp' => $this->faker->word(),
            'details' => [],
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\TimeCardMaterialsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TimeCardMaterialsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uoM' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'mon' => $this->faker->randomFloat(2, 0, 1000),
            'tue' => $this->faker->randomFloat(2, 0, 1000),
            'wed' => $this->faker->randomFloat(2, 0, 1000),
            'thu' => $this->faker->randomFloat(2, 0, 1000),
            'fri' => $this->faker->randomFloat(2, 0, 1000),
            'sat' => $this->faker->randomFloat(2, 0, 1000),
            'sun' => $this->faker->randomFloat(2, 0, 1000),
            'totalQty' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardMaterialsDto::class;
    }
}

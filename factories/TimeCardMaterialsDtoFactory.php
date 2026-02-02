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
            'project' => null,
            'projectTask' => null,
            'mon' => null,
            'tue' => null,
            'wed' => null,
            'thu' => null,
            'fri' => null,
            'sat' => null,
            'sun' => null,
            'totalQty' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return TimeCardMaterialsDto::class;
    }
}

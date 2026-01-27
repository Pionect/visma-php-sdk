<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ArspcommnHistoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ArspcommnHistoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'commnPeriod' => $this->faker->word(),
            'commnAmt' => $this->faker->randomFloat(2, 0, 1000),
            'commnblAmt' => $this->faker->randomFloat(2, 0, 1000),
            'prProcessedDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ArspcommnHistoryDto::class;
    }
}

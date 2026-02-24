<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ArspcommnHistoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ArspcommnHistoryDto>
 */
class ArspcommnHistoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'commnPeriod' => $this->faker->word(),
            'commnAmt' => null,
            'commnblAmt' => null,
            'prProcessedDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ArspcommnHistoryDto::class;
    }
}

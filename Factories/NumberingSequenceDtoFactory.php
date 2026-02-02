<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\NumberingSequenceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class NumberingSequenceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'numberingId' => $this->faker->uuid(),
            'branch' => null,
            'startNbr' => $this->faker->word(),
            'endNbr' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastNbr' => $this->faker->word(),
            'warnNbr' => $this->faker->word(),
            'nbrStep' => $this->faker->numberBetween(1, 100),
            'nextNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return NumberingSequenceDto::class;
    }
}

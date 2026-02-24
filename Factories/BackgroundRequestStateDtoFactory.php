<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BackgroundRequestStateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BackgroundRequestStateDto>
 */
class BackgroundRequestStateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'status' => $this->faker->word(),
            'statusCode' => $this->faker->numberBetween(1, 100),
            'receivedUtc' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'startedUtc' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'finishedUtc' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'webhookAddress' => $this->faker->word(),
            'errorMessage' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'originalUri' => $this->faker->word(),
            'hasResponseContent' => $this->faker->boolean(),
            'hasRequestContent' => $this->faker->boolean(),
            'contentLocation' => $this->faker->word(),
            'responseHeaders' => (object) [],
        ];
    }

    protected function modelClass(): string
    {
        return BackgroundRequestStateDto::class;
    }
}

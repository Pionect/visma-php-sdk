<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubmitTimeCardActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubmitTimeCardActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SubmitTimeCardActionResultDto::class;
    }
}

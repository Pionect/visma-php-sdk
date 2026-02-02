<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChangeInventoryNbrActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ChangeInventoryNbrActionResultDtoFactory extends Factory
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
        return ChangeInventoryNbrActionResultDto::class;
    }
}

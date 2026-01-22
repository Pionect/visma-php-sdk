<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleaseInventoryDocumentActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReleaseInventoryDocumentActionResultDtoFactory extends Factory
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
        return ReleaseInventoryDocumentActionResultDto::class;
    }
}

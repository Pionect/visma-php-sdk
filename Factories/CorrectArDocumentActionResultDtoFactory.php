<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CorrectArDocumentActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CorrectArDocumentActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CorrectArDocumentActionResultDto::class;
    }
}

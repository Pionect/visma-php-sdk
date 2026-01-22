<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTransactionDocumentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTransactionDocumentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->word(),
            'module' => $this->faker->word(),
            'lines' => [],
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionDocumentUpdateDto::class;
    }
}

<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTransactionDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTransactionDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'origDocNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'module' => $this->faker->word(),
            'origDocType' => $this->faker->word(),
            'note' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'lines' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionDocumentDto::class;
    }
}

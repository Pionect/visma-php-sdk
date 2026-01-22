<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExternalReferenceInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExternalReferenceInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExternalReferenceInInventoryIssueUpdateDto::class;
    }
}

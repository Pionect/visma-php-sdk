<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReferenceNumberInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReferenceNumberInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ReferenceNumberInInventoryIssueUpdateDto::class;
    }
}

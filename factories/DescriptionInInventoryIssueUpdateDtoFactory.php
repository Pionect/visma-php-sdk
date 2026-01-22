<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInInventoryIssueUpdateDto::class;
    }
}

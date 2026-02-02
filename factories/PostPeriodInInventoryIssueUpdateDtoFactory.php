<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInInventoryIssueUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInInventoryIssueUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInInventoryIssueUpdateDto::class;
    }
}
